<header id="header" class="header-transparent header-effect-shrink" @if(\Route::currentRouteName() != 'home') style="position: initial;" @endif data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none" @if(\Route::currentRouteName() != 'home') style="background-color: #212529 !important;" @endif>
        <div class="header-container container" @if(\Route::currentRouteName() != 'home') style="height: 70px;" @else style="height: 135px;" @endif>
            <div class="header-row">
                <div class="header-column">
                    {{-- <div class="header-row">
                        <div class="header-logo mt-2">
                            <a href="{{ route('home') }}">
                                <img alt="Porto" src="{{ asset('img/img_index/logo-principal.png') }}" class="index-icon">
                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" @if(\Route::currentRouteName() == 'home') data-hash data-hash-offset="80" @endif href="@if(\Route::currentRouteName() == 'home') #main @else {{ route('home') }} @endif">
                                                Inicio
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0);">
                                                Conoce acerca de nosotros
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Monumentos históricos</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-accordions.html">Iglesia de San Juan Bautista</a></li>
                                                                    <li><a class="dropdown-item" href="elements-toggles.html">Cueva del maíz</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Fiestas</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-buttons.html">Fiesta patronal</a></li>
                                                                    <li><a class="dropdown-item" href="elements-badges.html">Fiesta de San Juan Evangelista</a></li>
                                                                    <li><a class="dropdown-item" href="elements-lists.html">Procesion de semana santa</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Artesanías</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-typography.html">Tejidos</a></li>							
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Gastronomía</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-headings.html">Alimentos</a></li>
                                                                    <li><a class="dropdown-item" href="elements-dividers.html">Dulces</a></li>
                                                                    <li><a class="dropdown-item" href="elements-animations.html">Bebidas</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0);">
                                                Nuestra historia
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-hash data-hash-offset="40" href="@if(\Route::currentRouteName() == 'maiz') {{ route('home') }} @else #maiz @endif">Cuna del maíz</a></li>
                                                <li><a class="dropdown-item" data-hash data-hash-offset="125" href="@if(\Route::currentRouteName() == 'history') {{ route('home') }} @else #history @endif">A través del tiempo</a></li>
                                                {{-- <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Navigations</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Pills</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-pills.html">Pills</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-arrows.html">Pills + Arrows</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-dark-text.html">Pills Dark Text</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-color-dropdown.html">Pills Color Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-square.html">Pills Square</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-rounded.html">Pills Rounded</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Stripes</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-stripe.html">Stripe</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-stripe-dark-text.html">Stripe Dark Text</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-stripe-color-dropdown.html">Stripe Color Dropdown</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Hover Effects</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-top-line.html">Top Line</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-top-line-animated.html">Top Line Animated</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-top-line-color-dropdown.html">Top Line Color Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line.html">Bottom Line</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line-animated.html">Bottom Line Animated</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-slide.html">Slide</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-sub-title.html">Sub Title</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-line-under-text.html">Line Under Text</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Vertical</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-dropdown.html">Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-expand.html">Expand</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-columns.html">Columns</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-slide.html">Slide</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Hamburguer</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-hamburguer-sidebar.html">Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hamburguer-overlay.html">Overlay</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Dropdown Styles</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-dark.html">Dark</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-light.html">Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-colors.html">Colors</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-top-line.html">Top Line</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-square.html">Square</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow.html">Arrow Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow-center.html">Arrow Center Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-light.html">Modern Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-dark.html">Modern Dark</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Dropdown Effects</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move To Bottom</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-right.html">Move To Right</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-left.html">Move To Left</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Font Styles</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-font-small.html">Small</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-font-medium.html">Medium</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-font-large.html">Large</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-font-alternative.html">Alternative</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Icons</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-icons.html">Icons</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-icons-float-icons.html">Float Icons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="feature-navigations-sub-title.html">Sub Title</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-divisors.html">Divisors</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-logo-between.html">Logo Between</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-one-page.html">One Page Nav</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-click-to-open.html">Click To Open</a></li>
                                                    </ul>
                                                </li> --}}
                                                {{-- <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Layout Options</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
                                                        <li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
                                                        <li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
                                                    </ul>
                                                </li> --}}
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        {{-- <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <span class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fa fa-search header-nav-top-icon"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2">
                                <a href="#" class="header-nav-features-toggle">
                                    <img src="img/icons/icon-cart-light.svg" width="14" alt="" class="header-nav-top-icon-img">
                                    <span class="cart-info">
                                        <span class="cart-qty">1</span>
                                    </span>
                                </a>
                                <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <a href="#" title="Camera X1000" class="product-image"><img src="img/products/product-1.jpg" alt="Camera X1000"></a>
                                            <div class="product-details">
                                                <p class="product-name">
                                                    <a href="#">Camera X1000 </a>
                                                </p>
                                                <p class="qty-price">
                                                        1X <span class="price">$890</span>
                                                </p>
                                                <a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="totals">
                                        <span class="label">Total:</span>
                                        <span class="price-total"><span class="price">$890</span></span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-dark" href="#">View Cart</a>
                                        <a class="btn btn-primary" href="#">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>