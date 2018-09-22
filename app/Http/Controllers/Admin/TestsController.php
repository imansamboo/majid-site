<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use IvoPetkov\HTML5DOMElement;
use App\Photo;
use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $url = "https://www.cef.co.uk/catalogue/products/1779703-grip-tight-mcb-lockout-locates-over-red";
        $css_selector = "div.span8";
        $thing_to_scrape = "_text";

        $client = new Client();
        $crawler = $client->request('GET', $url);
        $output = $crawler->filter($css_selector)->last()->html()/*->extract(_text)*/;
        $output = str_replace("\n", "", $output);
        dd($output);


    }
    public function index2()
    {
        $parent = "root";
        $linkContent = ["Cable & Accessories","Cable Management","CCTV, Fire & Security","Data & Networking","Domestic Appliances","Heating & Ventilation","Industrial Controls","Lamps & Tubes","Lighting Luminaires","Switchgear & Distribution","Test Equipment","Tools & Fixings","Wiring Accessories","Workwear & Safety"];
        $linkHrefMain = ["https://www.cef.co.uk/catalogue/categories/cables-and-accessories","https://www.cef.co.uk/catalogue/categories/cable-management","https://www.cef.co.uk/catalogue/categories/cctv-fire-security","https://www.cef.co.uk/catalogue/categories/data-networking","https://www.cef.co.uk/catalogue/categories/domestic-appliances","https://www.cef.co.uk/catalogue/categories/heating-ventilation","https://www.cef.co.uk/catalogue/categories/industrial-control-automation","https://www.cef.co.uk/catalogue/categories/lamps-tubes","https://www.cef.co.uk/catalogue/categories/lighting-luminaires","https://www.cef.co.uk/catalogue/categories/switchgear-distribution","https://www.cef.co.uk/catalogue/categories/test-equipment","https://www.cef.co.uk/catalogue/categories/tools-fixings","https://www.cef.co.uk/catalogue/categories/wiring-accessories-and-devices","https://www.cef.co.uk/catalogue/categories/workwear-safety-equipment"];
        $linkHref = ["http://www.zenersystem.ir/catalogue/categories/cables-and-accessories","http://www.zenersystem.ir/catalogue/categories/cable-management","http://www.zenersystem.ir/catalogue/categories/cctv-fire-security","http://www.zenersystem.ir/catalogue/categories/data-networking","http://www.zenersystem.ir/catalogue/categories/domestic-appliances","http://www.zenersystem.ir/catalogue/categories/heating-ventilation","http://www.zenersystem.ir/catalogue/categories/industrial-control-automation","http://www.zenersystem.ir/catalogue/categories/lamps-tubes","http://www.zenersystem.ir/catalogue/categories/lighting-luminaires","http://www.zenersystem.ir/catalogue/categories/switchgear-distribution","http://www.zenersystem.ir/catalogue/categories/test-equipment","http://www.zenersystem.ir/catalogue/categories/tools-fixings","http://www.zenersystem.ir/catalogue/categories/wiring-accessories-and-devices","http://www.zenersystem.ir/catalogue/categories/workwear-safety-equipment"];
        for ($i=0; $i < count($linkContent); $i++){
            DB::table('mens')->insert(
                ['name' => $linkContent[$i], 'parent_name' => $parent, 'urlMain' => $linkHrefMain[$i], 'urlMy' => $linkHref[$i]]
            );
        }

    }



}
