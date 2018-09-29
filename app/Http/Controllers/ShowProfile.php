<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

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

    public function test()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.cef.co.uk/');
        $crawler->filter('a.divider-vertical')->each(function ($node) {
            print $node->text() . "<br>";
            print $node->attr('href') . "<br>";
            print str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) . "<br>";
            $node->siblings()->children()->each(function ($node) {
                $node->children()->each(function ($node) {
                    print $node->text() . "<br>";
                    $node->children()->each(function ($node) {
                        print $node->attr('href') . "<br>";
                        print str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) . "<br>";
                    });
                });
            });
            echo '<hr>';
            echo '<hr>';
        });

    }

    //this is a function for scraping menu pages and retrieving sub menus, picture source and part code
    public function test2()
    {
        $client = new Client();
        $count = 1;
        $i = 0;
        $j = 0;
        $crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/categories/incandescent-lamps-incandescent-candle-lamps?page=' . $i . '&per_page=12');

        while ($count > 0) {
            $crawler->filter('h5.product_description')->each(function ($node) {
                //retrieve submenu name
                print $node->text() . "<br>";
                //retrieve submenu link
                print $node->children()->attr('href') . "<br>";
                print str_replace('https://www.cef.co.uk', url('/'), $node->children()->attr('href')) . "<br>";
                //retrieve submenu part code
                print $node->nextAll()->html();
                //retrieve submenu stock code
                print $node->nextAll()->nextAll()->html() . "<br>";
                //retrieve submenu thumbnail brand
                print $node->parents()->first()->previousAll()->filter('img.brand_thumb')->attr('src') . "<br>";
                //retrieve submenu image in it's grid
                print $node->parents()->first()->previousAll()->filter('div.grid_product_image >  img')->attr('src') . "<br>";
                echo '<hr>';
                echo '<hr>';
            });
            $i++;
            $crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/categories/incandescent-lamps-incandescent-candle-lamps?page=' . $i . '&per_page=12');
            $count = $crawler->filter('h5.product_description')->count();

        }
    }

    public function test3()
    {
        $client = new Client();
        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://www.cef.co.uk/');
        // Click on the "Security Advisories" link
        /*$link = $crawler->selectLink('Security Advisories')->link();
        $crawler = $client->click($link);*/
        // Get the latest post in this category and display the titles
        /*$crawler->filter('h2 > a')->each(function ($node) {
            print $node->text()."\n";
        });*/
        /*get a text*/
        $crawler->filter('a.divider-vertical')->each(function ($node) {
            print $node->text() . "<br>";
            print $node->attr('href') . "<br>";
            print str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) . "<br>";
            //echo '<pre>';
            //print_r($node->siblings()->children()->html());
            $node->siblings()->children()->each(function ($node) {
                $node->children()->each(function ($node) {
                    print $node->text() . "<br>";
                    $node->children()->each(function ($node) {
                        print $node->attr('href') . "<br>";
                        print str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) . "<br>";
                    });
                    /*$node->parents()->first()->each(function ($node) {
                        print $node->html()."<br>";
                    });*/
                });
            });
            echo '<hr>';
            echo '<hr>';
        });
        /*get a href*/
        /*$crawler->filter('a.divider-vertical')->each(function ($node) {
            print $node->attr('href');;
        });*/
        /*get html element*/
        /*print $crawler->filter('div.cef-logo')->html();*/
        /*$crawler = $crawler->filter('a.divider-vertical')->nextAll();
        $crawler->each(function ($node) {
        print $node->html();
        });*/
        /*get subbest page*/
        /* $client = new Client();
         $crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/products/1782065-15a-anti-vibration-fuse-sold-in-1-s');
         //print $crawler->filter('div.overviewspec')->html();
         //print $crawler->filter('ul#features')->html();
         //print $crawler->filter('ul.product-codes')->html();
         //print $crawler->filter('h1.details_page')->html();
         //print $crawler->filter('img.image-zoom')->attr('src');*/
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

    public function test4()
    {
        /*get subbest page*/
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/products/1782065-15a-anti-vibration-fuse-sold-in-1-s');
        print $crawler->filter('h1.details_page')->html() . '<br>';
        print $crawler->filter('img.image-zoom')->attr('src');
        print $crawler->filter('ul.product-codes')->html();
        print $crawler->filter('ul#features')->html();
        print $crawler->filter('div.overviewspec')->html();
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

    public function test5()
    {
        $client = new Client();
        $count = 1;
        $i = 0;
        $j = 0;

        //get general description abput sub menus
        $crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/categories/cable-management-bench-trunking');
        //if is real first
        /*if($crawler->filter('div.marketing_text')->count() == 1){
            print $crawler->filter('div.marketing_text')->text() . '<br>';
            //get image source
            print $crawler->filter('div.marketing_text')->previousAll()->attr('src') . '<br>';
        }else{
            //if is fake first
            print $crawler->filter('div.row-fluid > div.span7')->text();
        }*/
        $crawler->filter('div.product_detail > div.product_category_image')->each(function ($node){
            $node->children()->first()->each(function ($node){
                print $node->attr('href') . '<br>';
                print $node->children()->first()->attr('src') . '<br>';
                print str_replace('https://www.cef.co.uk', url('/'), $node->attr('href')) . "<br>";
                print $node->parents()->first()->parents()->first()->children()->last()->text() . '<br>';
            });
        });
        exit();
        $crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/categories/cable-management' . $i . '&per_page=12');

        while ($count > 0) {
            $crawler->filter('h5.product_description')->each(function ($node) {
                //retrieve submenu name
                print $node->text() . "<br>";
                //retrieve submenu link
                print $node->children()->attr('href') . "<br>";
                print str_replace('https://www.cef.co.uk', url('/'), $node->children()->attr('href')) . "<br>";
                //retrieve submenu part code
                print $node->nextAll()->html();
                //retrieve submenu stock code
                print $node->nextAll()->nextAll()->html() . "<br>";
                //retrieve submenu thumbnail brand
                print $node->parents()->first()->previousAll()->filter('img.brand_thumb')->attr('src') . "<br>";
                //retrieve submenu image in it's grid
                print $node->parents()->first()->previousAll()->filter('div.grid_product_image >  img')->attr('src') . "<br>";
                echo '<hr>';
                echo '<hr>';
            });
            $i++;
            $crawler = $client->request('GET', 'https://www.cef.co.uk/catalogue/categories/incandescent-lamps-incandescent-candle-lamps?page=' . $i . '&per_page=12');
            $count = $crawler->filter('h5.product_description')->count();

        }
    }

    protected function saveImage($customName, $path)
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

    protected function ifIsFirst($url)
    {
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $count = $crawler->filter('div.compare')->count();
        if ($count == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function test6()
    {
        if ($this->ifIsSubbest('https://www.cef.co.uk/catalogue/products/504960-40w-ses-cooker-hood-lamp-clear-2700k')) {
            echo 'this is subbest';
        } else {
            echo 'no, this is not subbest';
        }
    }

    public function test7()
    {
        if ($this->ifIsFirst('https://www.cef.co.uk/catalogue/categories/industrial-control-automation-fuse-holders')) {
            echo 'this is first';
        } else {
            echo 'no, this is not first';
        }
    }
}