@include('layouts/head')
@include('layouts/header')
@include('layouts/navBarMenu')
@include('layouts/searchBar')
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
            @include('layouts/sideBarMenu');
            @include('layouts/nonBelowestDirectory');
            @include('layouts/pagination');
            @include('layouts/BestSellers');
        </div>
    </div>
</div>
@include('layouts/footer')