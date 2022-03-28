<aside id="aside-main" class="aside-start col-md-2 bg-gradient-dark fw-light aside-hide-xs d-flex align-items-stretch justify-content-lg-between align-items-start flex-column" style="height: 100% !important;">

    <!-- 
        OPTIONAL LOGO 
        visibility : desktop only
        .d-none + .d-sm-block
    -->
    <div class="clearfix px-3 py-4 mb-1 text-center bg-diff">
        <i class="fi fi-shield-ok fs-1"></i>
        <h2 class="h5">Static Sidebar</h2>
    </div>
    <!-- /LOGO -->

    <div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

        <!--

            All parent open navs are closed on click!
            To ignore this feature, add .js-ignore to .nav-deep

            Links height (paddings):
                .nav-deep-xs
                .nav-deep-sm
                .nav-deep-md  	(default, ununsed class)

            .nav-deep-hover 	hover background slightly different
            .nav-deep-bordered	bordered links
        -->
        <nav class="nav-deep nav-deep-dark nav-deep-hover">
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link js-ajax" href="#">
                        <span class="group-icon float-end">
                            <i class="fi fi-arrow-end-slim"></i>
                            <i class="fi fi-arrow-down-slim"></i>
                        </span>
                        <i class="fi fi-layers"></i>
                        <b>Overview</b>
                    </a>
                
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/requirements">
                                Requirements
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/install">
                                Installation
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/configuration">
                                Configuration
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/index">
                                Introduction
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-ajax" href="#">
                        <span class="group-icon float-end">
                            <i class="fi fi-arrow-end-slim"></i>
                            <i class="fi fi-arrow-down-slim"></i>
                        </span>
                        <i class="fi fi-layers"></i>
                        <b>MVC</b>
                    </a>
                
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/mvc/controllers">
                                Controllers
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/mvc/models">
                                Models
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/mvc/views">
                                Views
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-ajax" href="#">
                        <span class="group-icon float-end">
                            <i class="fi fi-arrow-end-slim"></i>
                            <i class="fi fi-arrow-down-slim"></i>
                        </span>
                        <i class="fi fi-layers"></i>
                        <b>Built-In Functionality</b>
                    </a>
                
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/requirements">
                                Requirements
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/install">
                                Installation
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/configuration">
                                Configuration
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/index">
                                Introduction
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link js-ajax" href="#">
                        <span class="group-icon float-end">
                            <i class="fi fi-arrow-end-slim"></i>
                            <i class="fi fi-arrow-down-slim"></i>
                        </span>
                        <i class="fi fi-layers"></i>
                        <b>Plugins</b>
                    </a>
                
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/requirements">
                                Requirements
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/install">
                                Installation
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/configuration">
                                Configuration
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="{$smarty.const.SITE_URL}documentation/introduction/index">
                                Introduction
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</aside>