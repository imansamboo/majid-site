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
       $allMenus = Men::all();
       $allMenusCount = Men::all()->count();
       $subMenus = Men::where('parent_name' , $menu->name)->get();
       if($menu->degree == 0){
           return view('welcome')
               ->with('menuName', $menu->name)
               ->with('menu', $menu->urlMain)
               ->with('subMenus',$subMenus )
               ->with('subMenuCount', $subMenus->count())
               ->with('gridNumber',floor(($subMenus->count())/4) )
               ->with('rest', $subMenus->count() - (4*floor(($subMenus->count())/4)))
               ->with('allMenus', $allMenus)
               ->with('allMenusCount', $allMenusCount)
               ;
       }else{
           if ($subMenus[0]->degree == 10){
               return view('9degree')
                   ->with('menu', $menu->urlMain)
                   ->with('menuName', $menu->name)
                   ->with('subMenus',$subMenus )
                   ->with('subMenuCount', $subMenus->count())
                   ->with('gridNumber',floor(($subMenus->count())/4) +1)
                   ->with('rest', $subMenus->count() - (4*floor(($subMenus->count())/4)))
                   ->with('allMenus', $allMenus)
                   ->with('allMenusCount', $allMenusCount)
                   ;
           }else{
               return view('1degree')
                   ->with('menuName', $menu->name)
                   ->with('menu', $menu->urlMain)
                   ->with('subMenus',$subMenus )
                   ->with('subMenuCount', $subMenus->count())
                   ->with('allMenus', $allMenus)
                   ->with('allMenusCount', $allMenusCount)
                   ->with('gridNumber',floor(($subMenus->count())/4) +1)
                   ->with('rest', $subMenus->count() - (4*floor(($subMenus->count())/4)))

                   ;
           }
       }

    }

    public function index2($products)
    {
        $allMenus = Men::all();
        $allMenusCount = Men::all()->count();
        $menu = Men::where('urlMy' , url('/') . '/catalogue/products/' .$products)->get()[0]  ;
        $showProfile = new ShowProfile();
        $showProfile->scrapOneItem($menu->urlMain);
        return view('inner')
            ->with('menu', $menu)
            ->with('content', Content::where('men_id' , $menu->id)->get()[0])
            ->with('allMenus', $allMenus)
            ->with('allMenusCount', $allMenusCount)
            ;


    }




}
