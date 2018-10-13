@include('layouts/head')
@include('layouts/header')
@include('layouts/navBarMenu')

<div class="container">
    <div class="row-fluid">
        <div id="breadcrumbs">
            {{--<ul class="inline" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="#http://127.0.0.1:8000/"><span itemprop="name">Home</span>
                    </a><meta content="1" itemprop="position">
                </li>
                >
                Industrial Controls
            </ul>--}}

        </div>
    </div>
    <div class="row-fluid">
        <div class="main_content span12">
            <div class='row-fluid product-detail'>
                <div class='span4 p-images'>
                    <div id='product_images'>
                        <div class='main-image'>
                            <img  class="image-zoom remove_repeated"  src="{{$content->content_src}}" />
                        </div>

                    </div>
                </div>
                <div class='span8 p-detail'>
                    <div class='row-fluid'>
                        <div class='span8'>
                            <h1 class="details_page">{!! $content->content_header !!}</h1>
                            <ul class="product-codes">{!! $content->content_partstock !!}</ul>
                            <ul id="features"><li>Secure mounting for a solid lockout</li>
                                {!! $content->content_li !!}
                            </ul>
                            <div class="reevoo-badge"><script id="reevoomark-loader" type="text/javascript" charset="utf-8">      (function() {        var trkref = 'CEF';        var myscript = document.createElement('script');        myscript.type = 'text/javascript';        myscript.src=('//mark.reevoo.com/reevoomark/'+trkref+'.js?async=true');        var s = document.getElementById('reevoomark-loader');        s.parentNode.insertBefore(myscript, s);      })();      afterReevooMarkLoaded = [];      afterReevooMarkLoaded.push(function(){        ReevooApi.load('CEF', function(retailer){          retailer.init_badges();        });      });    </script>
                                <a href="//mark.reevoo.com/partner/CEF/1779703" class="reevoomark">Read Reviews</a></div><div class="overviewspec">
                                {!! $content->content_spec !!}
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>














        </div>
    </div>
</div>
@include('layouts/footer')
