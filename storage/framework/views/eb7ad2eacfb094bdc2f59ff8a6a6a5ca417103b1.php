<?php echo $__env->make('layouts/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/navBarMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <div class="row-fluid">
        <div id="breadcrumbs">
            

        </div>
    </div>
    <div class="row-fluid">
        <div class="main_content span12">
            <div class='row-fluid product-detail'>
                <div class='span4 p-images'>
                    <div id='product_images'>
                        <div class='main-image'>
                            <img  class="image-zoom remove_repeated"  src="<?php echo e($content->content_src); ?>" />
                        </div>

                    </div>
                </div>
                <div class='span8 p-detail'>
                    <div class='row-fluid'>
                        <div class='span8'>
                            <h1 class="details_page"><?php echo $content->content_header; ?></h1>
                            <ul class="product-codes"><?php echo $content->content_partstock; ?></ul>
                            <ul id="features"><li>Secure mounting for a solid lockout</li>
                                <?php echo $content->content_li; ?>

                            </ul>
                            <div class="reevoo-badge"><script id="reevoomark-loader" type="text/javascript" charset="utf-8">      (function() {        var trkref = 'CEF';        var myscript = document.createElement('script');        myscript.type = 'text/javascript';        myscript.src=('//mark.reevoo.com/reevoomark/'+trkref+'.js?async=true');        var s = document.getElementById('reevoomark-loader');        s.parentNode.insertBefore(myscript, s);      })();      afterReevooMarkLoaded = [];      afterReevooMarkLoaded.push(function(){        ReevooApi.load('CEF', function(retailer){          retailer.init_badges();        });      });    </script>
                                <a href="//mark.reevoo.com/partner/CEF/1779703" class="reevoomark">Read Reviews</a></div><div class="overviewspec">
                                <?php echo $content->content_spec; ?>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>














        </div>
    </div>
</div>
<?php echo $__env->make('layouts/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
