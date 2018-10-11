@include('layouts/head')
@include('layouts/header')
@include('layouts/navBarMenu')
{{count}}
<div class="container">
    <div class="row-fluid">
        <div id="breadcrumbs">
            <ul class="inline" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="#https://www.cef.co.uk/"><span itemprop="name">Home</span>
                    </a><meta content="1" itemprop="position">
                </li>
                >
                Industrial Controls
            </ul>

        </div>
    </div>
    <div class="row-fluid">
        <div class="main_content span12">
            <div class='row-fluid product-detail'>
                <div class='span4 p-images'>
                    <div id='product_images'>
                        <script>
                            $( document ).ready(function() {
                                $(function(){
                                    if ($('.mobile-thumb').length > 1) {
                                        var mainImage = document.querySelector('.main-mobile-image');
                                        var mc = new Hammer(mainImage);

                                        mc.on("swipeleft", function(e) {
                                            navigateMobileGallery("left", e);
                                        });

                                        mc.on("swiperight", function(e) {
                                            navigateMobileGallery("right", e);
                                        });

                                        function navigateMobileGallery(direction, e) {

                                            var image_index = parseInt(e.target.getAttribute('data-index'));

                                            if (direction === "left") {
                                                var next_image = image_index === 0 ? $('.mobile-thumb:last') : $('.mobile-thumb[data-thumb-id="' + (image_index - 1) + '"]');
                                            } else if (direction === "right") {
                                                var next_image = image_index === ($('.mobile-thumb').length - 1) ? $('.mobile-thumb:first') : $('.mobile-thumb[data-thumb-id="' + (image_index + 1) + '"]');
                                            }

                                            $('.main-mobile-image').attr('data-index', next_image.data("thumb-id"));
                                            $('.main-mobile-image').attr("src", next_image.data("medium-image"));
                                            $('.mobile-thumb').removeClass("on");
                                            $('.mobile-thumb:nth-of-type(' + (next_image.data("thumb-id") + 1) + ')').addClass("on");

                                        }
                                    }

                                    $(".product_image_thumbnail").on("click",function() {

                                        $('.product_image_thumbnail').removeClass("on");

                                        $(this).addClass("on");

                                        $('.image-zoom').removeData('elevateZoom');
                                        $('.image-zoom').removeData('zoomImage');
                                        $(".zoomContainer").remove();

                                        var m_image = $(this).data("medium-image");
                                        var o_image = $(this).data("original-image");

                                        $('.main-image img').attr("src", m_image);
                                        $('.main-image img').attr("data-zoom-image", o_image);


                                        $('.image-zoom, .main-image-zoom').elevateZoom({
                                            cursor: "cursor",
                                            zoomWindowFadeIn: 500,
                                            zoomWindowFadeOut: 750,
                                            borderColour: '#eee'
                                        });

                                        return false;

                                    });

                                    $('.image-zoom, .main-image-zoom').elevateZoom({
                                        cursor: "cursor",
                                        zoomWindowFadeIn: 500,
                                        zoomWindowFadeOut: 750,
                                        borderColour: '#eee'
                                    });


                                    $(".video_link").click(function(e){
                                        e.preventDefault();
                                        $("#video_modal").first().modal("show");
                                    });

                                    $("#video_modal").on("hidden", function () {
                                        var videosrc = $("#video_modal .modal-content").data("videosrc")
                                        $("#video_modal .modal-content").html("");
                                        $("#video_modal .modal-content").html("<iframe src='" + videosrc + "'></iframe>");
                                    })

                                });
                            });
                        </script>
                        <img alt="Google" class="pull-left b-image" src="https://04646a9cf351cc0d3888-b8b406d15fe93f790abb5bf0e9ab7ab3.ssl.cf3.rackcdn.com/images/brands/small/google_logo_f8614ca7f4e40be1ce97177bd8083032.png?1528376199" />
                        <div class='main-image'>
                            <img alt="Nest_wngoga210uk-b_432009c361a272b3c4d3b3b36aabd327" class="image-zoom remove_repeated" data-zoom-image="https://04646a9cf351cc0d3888-b8b406d15fe93f790abb5bf0e9ab7ab3.ssl.cf3.rackcdn.com/images/products/original/nest_wngoga210uk-b_432009c361a272b3c4d3b3b36aabd327.jpg?1528374355" src="https://04646a9cf351cc0d3888-b8b406d15fe93f790abb5bf0e9ab7ab3.ssl.cf3.rackcdn.com/images/products/medium/nest_wngoga210uk-b_432009c361a272b3c4d3b3b36aabd327.jpg?1528374355" />
                        </div>

                    </div>
                </div>
                <div class='span8 p-detail'>
                    <div class='row-fluid'>
                        <div class='span8'>
                            <h1 class="details_page">MCG Grip Tight Lockout Locates Over Red</h1><ul class="product-codes"><li><span>Part Code:</span>MCB-GT2</li><li><span>Stock Code:</span>0920-9122</li></ul><div class="span4 p-images"><div id="product_images"><script>  $( document ).ready(function() {    $(function(){      if ($('.mobile-thumb').length > 1) {        var mainImage = document.querySelector('.main-mobile-image');        var mc = new Hammer(mainImage);          mc.on("swipeleft", function(e) {          navigateMobileGallery("left", e);        });          mc.on("swiperight", function(e) {          navigateMobileGallery("right", e);        });          function navigateMobileGallery(direction, e) {            var image_index = parseInt(e.target.getAttribute('data-index'));            if (direction === "left") {            var next_image = image_index === 0 ? $('.mobile-thumb:last') : $('.mobile-thumb[data-thumb-id="' + (image_index - 1) + '"]');          } else if (direction === "right") {            var next_image = image_index === ($('.mobile-thumb').length - 1) ? $('.mobile-thumb:first') : $('.mobile-thumb[data-thumb-id="' + (image_index + 1) + '"]');          }            $('.main-mobile-image').attr('data-index', next_image.data("thumb-id"));          $('.main-mobile-image').attr("src", next_image.data("medium-image"));          $('.mobile-thumb').removeClass("on");          $('.mobile-thumb:nth-of-type(' + (next_image.data("thumb-id") + 1) + ')').addClass("on");          }      }        $(".product_image_thumbnail").on("click",function() {          $('.product_image_thumbnail').removeClass("on");          $(this).addClass("on");          $('.image-zoom').removeData('elevateZoom');        $('.image-zoom').removeData('zoomImage');        $(".zoomContainer").remove();          var m_image = $(this).data("medium-image");        var o_image = $(this).data("original-image");          $('.main-image img').attr("src", m_image);        $('.main-image img').attr("data-zoom-image", o_image);            $('.image-zoom, .main-image-zoom').elevateZoom({          cursor: "cursor",          zoomWindowFadeIn: 500,          zoomWindowFadeOut: 750,          borderColour: '#eee'        });          return false;        });        $('.image-zoom, .main-image-zoom').elevateZoom({        cursor: "cursor",        zoomWindowFadeIn: 500,        zoomWindowFadeOut: 750,        borderColour: '#eee'      });          $(".video_link").click(function(e){        e.preventDefault();        $("#video_modal").first().modal("show");      });        $("#video_modal").on("hidden", function () {        var videosrc = $("#video_modal .modal-content").data("videosrc")        $("#video_modal .modal-content").html("");        $("#video_modal .modal-content").html("<iframe src='" + videosrc + "'>");      })      });  });</script><img alt="MCG" class="pull-left b-image" src="https://04646a9cf351cc0d3888-b8b406d15fe93f790abb5bf0e9ab7ab3.ssl.cf3.rackcdn.com/images/brands/small/mcg-ind-blue-black-merged_3837cfa81042387e024271452361c2ab.png?1398863952"><div class="main-image"><img alt="Cefco_mcg-gt2_1e31dd433bcdd1abd323502e2abb9ff8" class="image-zoom remove_repeated" data-zoom-image="https://04646a9cf351cc0d3888-b8b406d15fe93f790abb5bf0e9ab7ab3.ssl.cf3.rackcdn.com/images/products/original/cefco_mcg-gt2_1e31dd433bcdd1abd323502e2abb9ff8.jpg?1408709626" src="https://04646a9cf351cc0d3888-b8b406d15fe93f790abb5bf0e9ab7ab3.ssl.cf3.rackcdn.com/images/products/medium/cefco_mcg-gt2_1e31dd433bcdd1abd323502e2abb9ff8.jpg?1408709626"></div></div></div><ul id="features"><li>Secure mounting for a solid lockout</li><li>Grips tight with simple thumb turn and clamping handle</li><li>Offers superior holding power compared to other devices</li><li>Universal fit, exclusive design accommodates many styles of breaker toggles</li><li>Compact design, the narrow profile permits side by side breaker lockout</li><li>Durable construction, are made of powder coated steel and reinforced polymer to operate in harsh conditions</li><li>Locates over the toggle and is ideal for use with single and double toggles</li></ul><div class="reevoo-badge"><script id="reevoomark-loader" type="text/javascript" charset="utf-8">      (function() {        var trkref = 'CEF';        var myscript = document.createElement('script');        myscript.type = 'text/javascript';        myscript.src=('//mark.reevoo.com/reevoomark/'+trkref+'.js?async=true');        var s = document.getElementById('reevoomark-loader');        s.parentNode.insertBefore(myscript, s);      })();      afterReevooMarkLoaded = [];      afterReevooMarkLoaded.push(function(){        ReevooApi.load('CEF', function(retailer){          retailer.init_badges();        });      });    </script><a href="//mark.reevoo.com/partner/CEF/1779703" class="reevoomark">Read Reviews</a></div><div class="overviewspec"><h2>Specification</h2><table><tbody><tr><td>Colour</td><td>Red</td></tr><tr><td>Finish</td><td>Powder Coated</td></tr><tr><td>Guarantee</td><td>1 Year</td></tr><tr><td>Height</td><td>20mm</td></tr><tr><td>Length</td><td>73mm</td></tr><tr><td>Material</td><td>Steel</td></tr><tr><td>Packaging Types</td><td>Pack</td></tr><tr><td>Product Range</td><td>MCB Lockout Kits</td></tr><tr><td>Unspsc</td><td>39121901</td></tr><tr><td>Weight</td><td>0.15200kg</td></tr><tr><td>Width</td><td>19mm</td></tr></tbody></table></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>














        </div>
    </div>
</div>
@include('layouts/footer')
