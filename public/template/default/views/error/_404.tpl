<section id="slider" class="fullheight dark">

    <div class="display-table">
        <div class="display-table-cell vertical-align-middle">
            <div class="container">

                <div class="row err-404-row">
                    <div class="text-center col-md-8 col-xs-12 offset-md-2">
            
                        <h1 class="fa fa-frown-o fs-100 theme-color hidden-xs-down"></h1>
                        <h2><strong>404 Page Not Found</strong></h2>

                        <p>You may try searching for what you are looking for, or go back to the <a href="{$smarty.const.SITE_URL}">home page</a></p>

                    </div>
                    <div class="text-center col-md-4 col-xs-12 offset-md-4">
                        <!-- INLINE SEARCH -->
                        <div class="inline-search clearfix inline-search-404">
                            <form action="{$smarty.const.SITE_URL}search/results" method="post" class="widget_search">
                                <input type="search" placeholder="Search..." id="search_query" name="search_query" class="serch-input">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="clear"></div>
                            </form>
                        </div>
                        <!-- /INLINE SEARCH -->
                    </div>
                </div>
    
            </div>
        </div>
    </div>

</section>