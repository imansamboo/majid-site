@include('layouts/head')
@include('layouts/header')
@include('layouts/navBarMenu')
<div class="container">
    <div class="row-fluid">
        <div class="row-fluid">
            <div id="breadcrumbs">
                <ul class="inline" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="https://www.cef.co.uk/"><span itemprop="name">
Home
</span>
                        </a><meta content="1" itemprop="position">
                    </li>
                    ›
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="https://www.cef.co.uk/catalogue/categories/lamps-tubes"><span itemprop="name">
Lamps &amp; Tubes
</span>
                        </a><meta content="2" itemprop="position">
                        ›
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="https://www.cef.co.uk/catalogue/categories/lamps-tubes-appliance-lamps"><span itemprop="name">
Appliance Lamps
</span>
                        </a><meta content="3" itemprop="position">
                        ›
                    </li>

                    Cooker Hood Lamps
                </ul>

            </div>
        </div>
        <div class="row-fluid">
            <div class="main_content span12">


                <h1 class="blockyheading margin-bottom">{{$menuName}}</h1>
                <div id="search_holder">
                    <div class="filters span3" id="filters">
                        <script>
                            $(function(){
                                $("#reset_filters").click(function(){
                                    window.location = $(location).attr('href');
                                    return false;
                                });
                                $(".filter_category").click(function(){
                                    var id = $(this).data('id');
                                    $("#"+id).slideToggle();
                                    $(this).find("i").toggleClass("icon-plus icon-minus");
                                    return false;
                                });
                                $(".filter_link").click(function(){
                                    $(this).prev().trigger('click');
                                    return false;
                                });
                                $(".search_filter_check_box").click(function(){
                                    // var link = $(this).next('a').attr('href');
                                    var link = window.location.pathname;
                                    var filters = {}
                                    $(".filters input:checkbox:checked").each(function(){
                                        var obj = $(this).data('object');
                                        if(filters[obj]){
                                            filters[obj] += " " + $(this).val();
                                        } else {
                                            filters[obj] = $(this).val();
                                        }
                                    })
                                    var params = ""
                                    $.each(filters, function(key, val){
                                        params += "&"+key+"="+encodeURIComponent(val)
                                    })
                                    window.location = link+'?&category=WebL4.24584'+params;
                                    // $.ajax({
                                    //   type: 'GET',
                                    //   url: link+'?&category=WebL4.24584'+params,
                                    //   dataType: 'script',
                                    //   success: function(data){
                                    //     setTimeout(function(){
                                    //       $(".main_content").unblock();
                                    //     }, 1000);
                                    //   }
                                    // })
                                });
                            });
                        </script>
                        <h4>
                            <span class="pull-left">Filters</span>
                            <span class="pull-right"><a href="#" id="reset_filters">Reset Filters</a></span>
                            <div class="clearfix"></div>
                        </h4>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="3"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Brand
                                </h5>
                            </a><ul class="hide" id="3">
                                <li>
                                    <input class="search_filter_check_box " data-index="3" data-object="brand" id="filter_ids_" name="filter_ids[]" value="wh_35857" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">Bell (1)
                                    </a></li>
                                <li>
                                    <input class="search_filter_check_box " data-index="3" data-object="brand" id="filter_ids_" name="filter_ids[]" value="wh_35928" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">Fusion (1)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="5"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Cap Type
                                </h5>
                            </a><ul class="hide" id="5">
                                <li>
                                    <input class="search_filter_check_box " data-index="5" data-object="cap_type" id="filter_ids_" name="filter_ids[]" value="SES/E14" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">SES/E14 (2)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="9"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Colour Temperature
                                </h5>
                            </a><ul class="hide" id="9">
                                <li>
                                    <input class="search_filter_check_box " data-index="9" data-object="colour_temperature" id="filter_ids_" name="filter_ids[]" value="2700%20K" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">2700 K (2)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="17"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Diameter
                                </h5>
                            </a><ul class="hide" id="17">
                                <li>
                                    <input class="search_filter_check_box " data-index="17" data-object="diameter" id="filter_ids_" name="filter_ids[]" value="25mm" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">25mm (2)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="18"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Dimmable
                                </h5>
                            </a><ul class="hide" id="18">
                                <li>
                                    <input class="search_filter_check_box " data-index="18" data-object="dimmable" id="filter_ids_" name="filter_ids[]" value="Yes" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">Yes (2)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="19"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Finish
                                </h5>
                            </a><ul class="hide" id="19">
                                <li>
                                    <input class="search_filter_check_box " data-index="19" data-object="finish" id="filter_ids_" name="filter_ids[]" value="Clear" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">Clear (2)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="24"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Height
                                </h5>
                            </a><ul class="hide" id="24">
                                <li>
                                    <input class="search_filter_check_box " data-index="24" data-object="height" id="filter_ids_" name="filter_ids[]" value="85mm" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">85mm (1)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="29"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Lamp Life
                                </h5>
                            </a><ul class="hide" id="29">
                                <li>
                                    <input class="search_filter_check_box " data-index="29" data-object="lamp_life" id="filter_ids_" name="filter_ids[]" value="1000h" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">1000h (2)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="30"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Lamp Lumens
                                </h5>
                            </a><ul class="hide" id="30">
                                <li>
                                    <input class="search_filter_check_box " data-index="30" data-object="lamp_lumens" id="filter_ids_" name="filter_ids[]" value="360lm" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">360lm (1)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="31"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Lamp Type
                                </h5>
                            </a><ul class="hide" id="31">
                                <li>
                                    <input class="search_filter_check_box " data-index="31" data-object="lamp_type" id="filter_ids_" name="filter_ids[]" value="Cooker%20Hood%20Lamps" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">Cooker Hood Lamps (1)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="32"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Length
                                </h5>
                            </a><ul class="hide" id="32">
                                <li>
                                    <input class="search_filter_check_box " data-index="32" data-object="length" id="filter_ids_" name="filter_ids[]" value="86mm" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">86mm (1)
                                    </a></li>
                            </ul>
                        </ul>
                        <ul>
                            <a href="#" class="filter_category minus" data-id="39"><h5>
                                    <i class="icon-plus pull-right"></i>
                                    Power Rating
                                </h5>
                            </a><ul class="hide" id="39">
                                <li>
                                    <input class="search_filter_check_box " data-index="39" data-object="power_rating" id="filter_ids_" name="filter_ids[]" value="40W" type="checkbox">
                                    <a href="https://www.cef.co.uk/catalogue/products/search" class="checkbox inline filter_link" data-remote="true">40W (2)
                                    </a></li>
                            </ul>
                        </ul>

                    </div>
                    <div class="span9" id="products">
                        <script>
                            $(function(){
                                $(document).on("click", ".compare_button", function(){
                                    var items = []
                                    $('input[name="compare_products[]"]').each(function(){
                                        items.push($(this).val());
                                    });
                                    if(items.length > 0){
                                        window.location = "https://www.cef.co.uk/catalogue/products/compare?products="+items;
                                        setTimeout(function() {
                                            check_number_of_compare_products();
                                        }, 500);
                                    }
                                    return false;
                                });
                                $(".compare .pull-left").click(function(){
                                    $(this).parent().find('input[name="products[]"]').trigger('click');
                                });
                                $('input[name="products[]"]').click(function(e){
                                    $('input[name="products[]"]').attr('disabled', 'disabled');
                                    var id = $(this).val();
                                    if(this.checked){
                                        $.get( "https://www.cef.co.uk/add_compare_product", {id: id}, function(data) {});
                                        setTimeout(function() {
                                            check_number_of_compare_products();
                                        }, 500);
                                    } else {
                                        $.get( "https://www.cef.co.uk/add_compare_product", {id: id, remove: true}, function(data) {});
                                        setTimeout(function() {
                                            check_number_of_compare_products();
                                        }, 500);
                                    }
                                });
                                check_number_of_compare_products();
                            });
                        </script>
                        <h5 class="no-top-margin">Displaying <b>all&nbsp;2</b> products</h5>
                        <div class="row-fluid" id="display_options">
                            <div class="span4">
                                <div class="inner-margin">
                                    Sort by
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                            Relevance
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?sort=">Relevance</a></li>
                                            <li><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?sort=description_short.sort_asc">Product A-Z</a></li>
                                            <li><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?sort=description_short.sort_desc">Product Z-A</a></li>
                                            <li><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?sort=catalogue.sort_asc">Part Code A-Z</a></li>
                                            <li><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?sort=catalogue.sort_desc">Part Code Z-A</a></li>
                                            <li><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?sort=brand_name.sort_asc">Brand A-Z</a></li>
                                            <li><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?sort=brand_name.sort_desc">Brand Z-A</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="span3 text-center per_page" id="display_option_box">
                                Products per page
                                <a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?page=1&amp;per_page=12" class="">12</a>
                                <a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?page=1&amp;per_page=24" class="on">24</a>
                                <a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?page=1&amp;per_page=48" class="">48</a>

                            </div>
                            <div class="span5 text-right" id="view_option_box">
                                <a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?view_type=grid" class="current"><i class="icon-th"></i>
                                    Grid View
                                </a><a href="/catalogue/categories/appliance-lamps-cooker-hood-lamps?view_type=list" class=""><i class="icon-list"></i>
                                    List View
                                </a></div>
                        </div>
                        <div class="row-fluid">
                            <div class="span9" id="page_numbers">

                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="compare_products"><script>
                                    $(function(){
                                        $(".remove-button").click(function(){
                                            var id = $(this).parent().find("input:hidden").val();
                                            $('input[value="'+id+'"]').attr("checked", false)
                                            setTimeout(function() {
                                                check_number_of_compare_products();
                                            }, 500);
                                        });
                                        $(".clear-compare").click(function(){
                                            $('input:checked').attr("checked", false)
                                            $.get( "https://www.cef.co.uk/clear_compare_product", function(data) {});
                                            setTimeout(function() {
                                                check_number_of_compare_products();
                                            }, 500);
                                            return false
                                        });
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <form accept-charset="UTF-8" action="https://www.cef.co.uk/catalogue/products/compare" class="new_compare" id="new_compare" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"></div>
                                @for ($i = 0; $i < $gridNumber; $i++)
                                    <div id="products">
                                        <div class="row-fluid" id="grid_products">
                                            <ul class="thumbnails uniform">
                                                {{--@php
                                                if($i == $gridNumber - 1){
                                                    $innerLoop = $rest;
                                                }else{
                                                     $innerLoop = 4;
                                                }
                                                @endphp--}}
                                                @for ($j = 0; $j < 4; $j++)
                                                    @if(4*$i + $j  < $subMenuCount)
                                                <div class="span3">
                                                    <li>
                                                        <div class="thumbnail text-center product_grid" style="height: 485px;">
                                                            <a href="{{$subMenus[4*$i + $j ]->urlMy}}"><img alt="Bell" class="brand_thumb" src="{{$subMenus[4*$i + $j ]->thumbnailSrc}}">
                                                                <div class="clearfix"></div>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <div class="grid_product_image">
                                                                    <img alt="{{$subMenus[4*$i + $j ]->name}}" src="{{$subMenus[4*$i + $j ]->imgSrc}}">
                                                                </div>
                                                            </a>
                                                            <div class="text-left caption">
                                                                <h5 class="product_description"><a href="{{$subMenus[4*$i + $j ]->urlMy}}">{{$subMenus[4*$i + $j ]->name}}</a></h5>
                                                                <p class="product_code">
                                                                    {!! $subMenus[4*$i + $j ]->partCode !!}
                                                                </p>
                                                                <p class="product_code">
                                                                    {!! $subMenus[4*$i + $j ]->stockCode !!}
                                                                </p>
                                                                <div class="clearfix"></div>
                                                                <br>
                                                            </div>
                                                            <div class="compare">
                                                                <div class="pull-left">Compare</div>
                                                                <input class="pull-right" id="products_" name="products[]" value="504960" type="checkbox">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                    @endif
                                            @endfor
                                            </ul>
                                        </div>
                                    </div>
                                @endfor

                            </form>

                        </div>
                        <div class="row-fluid">
                            <div class="span9" id="page_numbers">

                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="compare_products"><script>
                                    $(function(){
                                        $(".remove-button").click(function(){
                                            var id = $(this).parent().find("input:hidden").val();
                                            $('input[value="'+id+'"]').attr("checked", false)
                                            setTimeout(function() {
                                                check_number_of_compare_products();
                                            }, 500);
                                        });
                                        $(".clear-compare").click(function(){
                                            $('input:checked').attr("checked", false)
                                            $.get( "https://www.cef.co.uk/clear_compare_product", function(data) {});
                                            setTimeout(function() {
                                                check_number_of_compare_products();
                                            }, 500);
                                            return false
                                        });
                                    })
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
                <script>
                    $(document).ready(checkOrientation);
                    $(window).resize(checkOrientation);

                    function checkOrientation(){
                        var landscape = true;
                        var screenWidth = $(window).width();
                        var screenHeight = $(window).height();
                        if(screenHeight > screenWidth){
                            landscape = false;
                        }
                        apply_sizes(landscape);
                    }

                    function apply_sizes(landscape){
                        if(landscape){
                            $("#filters").removeClass("hide");
                            $("#filters").addClass("span3");
                            $("#products").removeClass("span11");
                            $("#products").addClass("span9");
                        } else {
                            $("#filters").removeClass("span3");
                            $("#filters").addClass("hide");
                            $("#products").removeClass("span9");
                            $("#products").addClass("span11");
                        }
                    }
                </script>

            </div>
        </div>
    </div>
</div>
@include('layouts/footer')
