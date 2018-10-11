<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 10/10/18
 * Time: 11:22 PM
 */

namespace App\Http\Controllers;
use App\Content;
use App\Men;
use App\Http\Controllers\ShowProfile;


class RoutingController extends Controller
{
    public function index($categories)
    {
       $menu = Men::where('urlMy' , url('/') . '/catalogue/categories/' .$categories)->distinct()->get()[0]  ;
       $subMenus = Men::where('parent_name' , $menu->name)->get();
       if($menu->degree == 0){
           return view('welcome')->with('menu', $menu->urlMain)->with('subMenus',$subMenus )->with('subMenuCount', $subMenus->count());
       }else{
           if ($subMenus[0]->degree == 10){
               return view('9degree')->with('menu', $menu->urlMain)->with('subMenus',$subMenus )->with('subMenuCount', $subMenus->count());
           }else{
               return view('1degree')->with('menu', $menu->urlMain)->with('subMenus',$subMenus )->with('subMenuCount', $subMenus->count());
           }
       }

    }

    public function index2($products)
    {
        $menu = Men::where('urlMy' , url('/') . '/catalogue/products/' .$products)->get()[0]  ;
        $showProfile = new ShowProfile();
        $showProfile->scrapOneItem($menu->urlMain);
        return view('inner')->with('menu', $menu)->with('content', Content::where('men_id' , $menu->id)->get()[0]);


    }




}
