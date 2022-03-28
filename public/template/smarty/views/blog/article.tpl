<div class="container">

<h1 class="blog-post-title">{$car.headline}</h1>
    
    <ul class="blog-post-info list-inline">
        <li>
            <a href="#">
                <i class="fa fa-clock-o"></i> 
                <span class="font-lato">{$car.blog_date}</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-user"></i> 
                <span class="font-lato">{$car.author}, {$car.source}</span>
            </a>
        </li>
    </ul>

    <!-- OWL SLIDER -->
    <!--
    <div class="owl-carousel-2 mb-20" data-plugin-options=' { 
        "responsiveBaseElement":	"#wrapper", 
        "loop":						true, 
        "margin":					0, 

        "nav":						true, 
        "dots":						false, 

        "center":					true, 
        "slideBy":					"1", 
        "autoplay":					true, 
        "autoplayTimeout":			4500, 
        "autoWidth":				false,
        "merge":					true,
        "rtl":						false,

        "animateIn":				"bounceIn",
        "animateOut":				"fadeOut",

        "responsive": { 
            "0":	{ "items":1 },
            "600":	{ "items":1 },
            "1000":	{ "items":1 }
        }

    }'>
        <div>
            <img class="img-fluid" src="{$car.img}" alt="">
        </div>
        <div>
            <img class="img-fluid" src="{$car.img}" alt="">
        </div>
    </div>
    -->
    <!-- /OWL SLIDER -->

    <!-- IMAGE -->
    <figure class="mb-20">
        <img class="img-fluid" src="{$car.img}" alt="img">
    </figure>
    <!-- /IMAGE -->

    <p class="lead text-center">
        {$car.intro}
    </p>

    <p class="dropcap">
        {$car.content}    
    </p>

</div>