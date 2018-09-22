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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function test()
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
        /*$crawler->filter('a.divider-vertical')->each(function ($node) {
            print $node->text()."\n";
        });*/
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
                echo '<hr>';*/
            });*/

    }
}
