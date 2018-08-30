<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
