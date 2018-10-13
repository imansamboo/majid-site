<?php echo $__env->make('layouts/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/navBarMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/searchBar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row-fluid">
        <div id="breadcrumbs">
            <ul class="inline" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="http://127.0.0.1:8000/"><span itemprop="name">Home</span>
                    </a><meta content="1" itemprop="position">
                </li>
                >
                Industrial Controls
            </ul>

        </div>
    </div>
    <div class="row-fluid">
        <div class="main_content span12">
            <?php echo $__env->make('layouts/sideBarMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
            <?php echo $__env->make('layouts/nonBelowestDirectory', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
            <?php echo $__env->make('layouts/pagination', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
            <?php echo $__env->make('layouts/BestSellers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
            <?php echo e(url("/posts/")); ?>

        </div>
    </div>
</div>
<?php echo $__env->make('layouts/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
