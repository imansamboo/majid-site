@php
$allMenusD0 =  App\Men::where('degree' , 0)->get();
@endphp
<div class='menu-wrapper'>
    <div class='container'>
        <a href="##" class="visible-phone toggle-menu"><i class='icon-reorder'></i>
        </a><nav>
            <div class='row-fluid'>
                <div class='navbar main_nav'>
                    <div class='navbar-inner clearfix'>
                        <div class='nav-collapse collapse'>
                            <div class='category-header visible-phone'>
                                Categories
                                <i class='icon-remove'></i>
                            </div>
                            <ul class="nav main_nav">
                                @foreach ($allMenusD0 as $allMenuD0)
                                <li><a href="{{$allMenuD0->urlMain}}" class="divider-vertical">{{$allMenuD0->name}}</a>
                                    <ul>
                                        <div class='nav_column'>
                                            @php
                                            $allMenusD1 = App\Men::where('parent_name', App\Men::where('degree', 0)->get()[0]->name)->get();
                                            @endphp
                                            @foreach ($allMenusD1 as $allMenuD1)
                                            <li>
                                                <a href="{{$allMenuD1->urlMain}}">
                                                    <i class="icon-double-angle-right"></i>{{$allMenuD1->name}}
                                                </a>
                                            </li>
                                            @endforeach
                                            @endforeach
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class='menu-background'></div>
</div>
<script>
    var menuHoverTimer;

    $('.menu-wrapper ul.main_nav > li').on('mouseenter', function(e) {
        menuHoverTimer = setTimeout(function(){
            $('.menu-background').addClass('show');
        }, 250);
    });

    $('.menu-background').on('mouseenter', function() {
        $('.menu-background').removeClass('show');
    });

    $('.menu-wrapper ul.main_nav > li').on('mouseleave', function(e) {
        var target = e.relatedTarget || e.toElement;
        if ($(target).is("a.divider-vertical") || $(target).is("div.menu-background") || $(target).is("li")) {
            $('.menu-background').addClass('show');
        } else {
            $('.menu-background').removeClass('show');
        }
        clearTimeout(menuHoverTimer);
    });
</script>
