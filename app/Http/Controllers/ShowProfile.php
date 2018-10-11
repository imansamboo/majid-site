<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use App\Content;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Men;
//main page : https://www.cef.co.uk
//sample real first page : https://www.cef.co.uk/catalogue/categories/data-networking
//sample fake first : https://www.cef.co.uk/catalogue/categories/lamps-tubes-appliance-lamps
//sample nonfirst : https://www.cef.co.uk/catalogue/categories/heating-ventilation-frost-watchers
//sample belpowest : https://www.cef.co.uk/catalogue/products/4567841-500w-frost-protection-heater
class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function scrapRoots()
    {
        $men = new Men();
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.cef.co.uk/');
        $crawler->filter('a.divider-vertical')->each(function ($node) use ($men) {
            $menuName = $node->text() ;
            $menuLink = $node->attr('href') ;
            $myMenuLink = str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) ;
            $men->Create(array(
                'name' => $menuName,
                'urlMain' => $menuLink,
                'urlMy' => $myMenuLink,
                'degree' => 0,
                'parent_name' => 'root',

            ));
            $node->siblings()->children()->each(function ($node )  use ($men , $menuName) {
                $node->children()->each(function ($node)  use ($men, $menuName) {
                    $menuName2 = $node->text() ;
                    $node->children()->each(function ($node) use ($menuName2, $men, $menuName) {
                        $menuLink = $node->attr('href') ;
                        $myMenuLink = str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) ;
                        $men->Create(array(
                            'name' => $menuName2,
                            'urlMain' => $menuLink,
                            'urlMy' => $myMenuLink,
                            'degree' => 1,
                            'parent_name' => $menuName,
                        ));
                    });
                });
            });
        });

    }

    public function scrapRealFirstPage($url, $menuName)
    {
        echo $menuName;
        echo $url;
        //$men = Men::where('name', '=', $menuName)->firstOrFail();
        $men = new Men();
        $parentName = $menuName;
        $count = 1;
        $i = 1;
        $client = new Client();
        $crawler = $client->request('GET', $url .'?page=' . $i);
        $menuDescription = $crawler->filter('div.marketing_text')->text();
        //get image source
        $menuInnerImage = $crawler->filter('div.marketing_text')->previousAll()->attr('src');
        //$this->saveImage($menuName. 'inner'.'.jpg', $thumbnailSrc);
        while ($count > 0) {
            $crawler->filter('div.product_category_image > a')->each(function ($node) use ($parentName, $men) {
                $menuLink = $node->attr('href');
                $myMenuLink = str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) ;
                $node->children()->each(function ($node) use ($parentName, $menuLink, $myMenuLink, $men){
                    $imageSrc = $node->attr('src');
                    $menuName = $node->attr('alt');
                    Men::where('name' , $menuName)
                        ->update(array(
                        'imgSrc' => $imageSrc,
                    ));
                    $this->saveImage($menuName.'-img.jpg', $imageSrc);

                });
            });
            $i++;
            $crawler = $client->request('GET', $url.'?page='  . $i . '&per_page=12');
            $count = $crawler->filter('div.marketing_text')->count();


        }
        Men::where('name', $parentName)
        ->update([
            'description' => $menuDescription,
            'imgInnerSrc' => $menuInnerImage,
        ]);
        $this->saveImage($parentName.'-img-inner.jpg', $menuInnerImage);


    }

    public function scrapFakeFirstPage($url, $menuName, $j = 2)
    {
        $men = new Men();
        $parentName = $menuName;
        $count = 1;
        $i = 1;
        $client = new Client();
        $crawler = $client->request('GET', $url .'?page=' . $i);
        if($crawler->filter('div.row-fluid > div.span7')->count() > 0){
            $menuDescription = $crawler->filter('div.row-fluid > div.span7')->text();
            Men::where('name', $parentName)
                ->update([
                    'description' => $menuDescription,
                ]);
        }else{
            $menuDescription = null;
        }
        while ($count > 0) {
            $crawler->filter('div.product_category_image > a')->each(function ($node) use ($parentName, $men, $j) {
                $menuLink = $node->attr('href');
                $myMenuLink = str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) ;
                $node->children()->each(function ($node) use ($parentName, $menuLink, $myMenuLink, $men, $j){
                    $imageSrc = $node->attr('src');
                    $menuName = $node->attr('alt');
                    Men::Create(
                        array(
                            'name' => $menuName,
                            'parent_name' => $parentName,
                            'imgSrc' => $imageSrc,
                            'urlMain' => $menuLink,
                            'urlMy' => $myMenuLink,
                            'degree' => $j,
                        )
                    );
                    $this->saveImage($menuName.'-img.jpg', $imageSrc);


                });
            });
            $i++;
            $crawler = $client->request('GET', $url.'?page='  . $i . '&per_page=12');
            $count = $crawler->filter('div.marketing_text')->count();
        }
    }

    //this is a function for scraping menu pages and retrieving sub menus, picture source and part code
    public function scrapNonFirstPage($url, $menuName)
    {
        $men = new Men();
        $client = new Client();
        $parentName = $menuName;
        $count = 1;
        $i = 1;
        $j = 0;
        $crawler = $client->request('GET', $url.'?page=' . $i . '&per_page=12');

        while ($count > 0) {
            $crawler->filter('h5.product_description')->each(function ($node) use ($men, $parentName) {
                //retrieve submenu name
                $menuName = $node->text() ;
                //retrieve submenu link
                $menuLink = $node->children()->attr('href') ;
                $myMenuLink = str_replace('https://www.cef.co.uk', url('/'), $node->children()->attr('href')) ;
                //retrieve submenu part code
                $menuPartCode = $node->nextAll()->html();
                //retrieve submenu stock code
                $menuStockCode = $node->nextAll()->nextAll()->html() ;
                //retrieve submenu thumbnail brand
                if($node->parents()->first()->previousAll()->filter('img.brand_thumb')->count() > 0){
                    $thumbnailSrc = $node->parents()->first()->previousAll()->filter('img.brand_thumb')->attr('src') ;
                    //$this->saveImage($menuName. '-thumbnail'.'.jpg', $thumbnailSrc);
                }else{
                    $thumbnailSrc = null;
                }
                //retrieve submenu image in it's grid
                if($node->parents()->first()->previousAll()->filter('div.grid_product_image >  img')->count() > 0){
                    $imageSrc = $node->parents()->first()->previousAll()->filter('div.grid_product_image >  img')->attr('src') ;
                    //$this->saveImage($menuName. '-img'.'.jpg', $imageSrc);

                }else{
                    $imageSrc = null;
                }

                $men->Create(array(
                    'name' => $menuName,
                    'urlMain' => $menuLink,
                    'urlMy' => $myMenuLink,
                    'partCode' => $menuPartCode,
                    'stockCode' => $menuStockCode,
                    'thumbnailSrc' => $thumbnailSrc,
                    'imgSrc' => $imageSrc,
                    'degree' => 10,
                    'parent_name' => $parentName,

                ));



            });
            $i++;
            $crawler = $client->request('GET', $url.'?page=' . $i . '&per_page=12');
            $count = $crawler->filter('h5.product_description')->count();

        }
    }

    public function scrapSubbestPage($url, $menuID)
    {
        /*get subbest page*/
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $contentHeader = $crawler->filter('h1.details_page')->html() . '<br>';
        $contentSrc = $crawler->filter('img.image-zoom')->attr('src');
        $contentPartStock = $crawler->filter('ul.product-codes')->html();
        $contentLi = $crawler->filter('ul#features')->html();
        $contentSpec = $crawler->filter('div.overviewspec')->html();
        $content = new Content();
        $content->Create(array(
            'men_id' => $menuID,
            'content_src' => $contentSrc,
            'content_header' => $contentHeader,
            'content_partstock' => $contentPartStock,
            'content_li' => $contentLi,
            'content_spec' => $contentSpec,

        ));
        $this->saveImage('content-'.$menuID.'.jpg', $contentSrc);
        /* get sub menu has submenu*/
        /*$crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/categories/cables-and-accessories-three-core-and-earth-pvc-cable-h6243y');
        $crawler->filter('h5.product_description')->each(function ($node) {
            print $node->html();
            echo '<hr>';
            print $node->text();
            echo '<hr>';
            print $node->children()->attr('href');
            echo '<hr>';
            /*print $node->attr('href');
                echo '<hr>';
                print $node->text();
                echo '<hr>';
            });*/

    }

    protected function saveImage($customName, $path)
    {
        Storage::disk('local')->put($customName, file_get_contents($path));
    }

    protected function savePdf($customName, $path)
    {
        Storage::disk('local')->put($customName, file_get_contents($path));
    }

    protected function ifIsSubbest($url)
    {
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $count = $crawler->filter('h5.product_description')->count();
        $crawler = $client->request('GET', $url);
        $count2 = $crawler->filter('div.product_category_box_top_level')->count();
        $count3 = array($count, $count2);
        if ($count == 0 && $count2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function ifIsNonFirst($url)
    {
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $count = $crawler->filter('div.compare')->count();

        if ($count == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function testScrapping($url = null, $menuName = null, $identity = null)
    {
        $this->scrapOneItem('https://www.cef.co.uk/catalogue/products/4479858-roughneck-compression-work-boot-socks-twin-pack');
        exit();
        switch ($url) {
            case 1:
                $url = 'https://www.cef.co.uk';
                break;
            case 2:
                $url = 'https://www.cef.co.uk/catalogue/categories/data-networking';
                break;
            case 3:
                $url = 'https://www.cef.co.uk/catalogue/categories/lamps-tubes-appliance-lamps';
                break;
            case 4:
                $url = 'https://www.cef.co.uk/catalogue/categories/heating-ventilation-frost-watchers';
                break;
            case 5:
                $url = 'https://www.cef.co.uk/catalogue/products/4567841-500w-frost-protection-heater';
                break;
        }

        if($identity == 1){
            $mens = Men::where('degree' , 10)->get();
            foreach ($mens as $men) {
                $this->scrapSubbestPage($men->urlMain, $men->id);
            }
        }elseif ($identity == 2){
            $this->scrapNonFirstPage($url, $menuName);
        }elseif ($identity ==3 ){
            $mens = Men::where('degree' , 0)->get();
            foreach ($mens as $men){
                $this->scrapRealFirstPage($men->urlMain, $men->name);
            }
        }elseif ($identity ==0){
            $this->scrapRoots();
        }elseif($identity == 4){
            $this->scrapFakeFirstPage($url, $menuName);
        }
    }

    public function scrap()
    {
        ini_set('max_execution_time', 18000);
        //scrap root
    /*    $this->scrapRoots();
        echo 1;
        //scrap first pages
        $mens = Men::where('degree' , 0)->get();
        foreach ($mens as $men){
            $this->scrapRealFirstPage($men->urlMain, $men->name);
        }
        echo 2;

        //scrap fake_first_page page until get a non_first

        $mens = Men::where('degree' , 1)->get();
        foreach ($mens as $men){
            if(!$this->ifIsNonFirst($men->urlMain)){
                $this->scrapFakeFirstPage($men->urlMain, $men->name, 2);
            }
        }*/
        /*$mens = Men::where('degree' , 2)->get();
        foreach ($mens as $men){
            if(!$this->ifIsNonFirst($men->urlMain)){
                $this->scrapFakeFirstPage($men->urlMain, $men->name, 3);
            }
        }*/

        /*$mens = Men::where('degree' , 3)->get();
        foreach ($mens as $men){
                $this->scrapNonFirstPage($men->urlMain, $men->name);

        }*/
        /*$mens = DB::table('mens')->select(['parent_name'])->where('degree', 3)->groupBy('parent_name')->get();
        $menDegree2Scrapped = array();
        foreach ($mens as $men) {
            $menDegree2Scrapped[] = $men->parent_name;
        }
        $menDegree2 = array();
        $mens = DB::table('mens')->select(['name'])->where('degree', 2)->get();
        foreach ($mens as $men){
            $menDegree2[] = $men->name ;
        }
        $mens = array();
        $mensDegree2NonScrapped = array_diff($menDegree2, $menDegree2Scrapped);
        foreach ($mensDegree2NonScrapped as $menDegree2NonScrapped){
            $mens['name'][] = $menDegree2NonScrapped;
            $mens['url'][] = Men::where('name' , $menDegree2NonScrapped)->get()[0]->urlMain;
        }
        $i = 0;
        foreach($mens['name'] as $name){
            //echo $name . '<br>';
            //echo $mens['url'][$i] . '<br>';
            $this->scrapNonFirstPage($mens['url'][$i], $name);
            $i++;*/

            /*--------------------------------------------------------*/
            /*$mens = DB::table('mens')->select(['parent_name'])->where('degree', 2)->groupBy('parent_name')->get();
            $menDegree2Scrapped = array();
            foreach ($mens as $men) {
                $menDegree2Scrapped[] = $men->parent_name;
            }
            $menDegree2 = array();
            $mens = DB::table('mens')->select(['name'])->where('degree', 1)->groupBy('name')->get();
            foreach ($mens as $men){
                $menDegree2[] = $men->name ;
            }
            $mens = array();
            $mensDegree2NonScrapped = array_diff($menDegree2, $menDegree2Scrapped);
            foreach ($mensDegree2NonScrapped as $menDegree2NonScrapped){
                $mens['name'][] = $menDegree2NonScrapped;
                $mens['url'][] = Men::where('name' , $menDegree2NonScrapped)->get()[0]->urlMain;
            }
            $i = 0;
            foreach($mens['name'] as $name){
                //echo $name . '<br>';
                //echo $mens['url'][$i] . '<br>';
                $this->scrapNonFirstPage($mens['url'][$i], $name);
                $i++;

        }*/

        //scrap belowest page
        echo 4;
        $mens = Men::where('degree' , 10)->get();
        $i=0;
        foreach ($mens as $men) {
            if( $i < 5000 && $i > 1999){
                $this->scrapSubbestPage($men->urlMain, $men->id);
            }
            $i++;
        }
        echo 5;
    }
    public function scrapOneItem($url)
    {
        $menu = Men::where('urlMain' , $url)->get()[0];
        $men_id = $menu->id;
        $count = Content::where('men_id' , $men_id)->count();


        if($count == 0)
        {
            $this->scrapSubbestPage($url, Men::where('urlMain' , $url)->get()[0]->id);
        }

    }

}
