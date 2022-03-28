<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- SLIDER -->
<section id="slider" class="fullheight">
   <!--
      SWIPPER SLIDER PARAMS
      
      data-effect="slide|fade|coverflow"
      data-autoplay="2500|false"
      -->
   <div class="swiper-container" data-effect="coverflow" data-autoplay="true">
      <div class="swiper-wrapper">
         <!-- SLIDE 1 -->
         <div class="swiper-slide" style="background-image: url('{$smarty.const.SITE_URL}media/smarty/assets/images/covers/ilya-pavlov-OqtafYT5kTw-unsplash.jpg');">
            <div class="overlay dark-5">
               <!-- dark overlay [1 to 9 opacity] -->
            </div>
            <div class="display-table">
               <div class="display-table-cell vertical-align-middle">
                  <div class="row">
                     <div class="text-center col-xs-12 col-md-12">
                        <h1 class="text-white pt-3 mt-n5" style="font-family: Comfortaa; text-shadow: 6px 2px 10px black;">DiamondPHP Framework</h1>
                        <h1 class="text-white" style="font-family: Roboto; text-shadow: 6px 2px 10px black;">
                           <span style="color: #c3c71e" id="typed"></span>
                           <span style="color: #c3c71e" class="typed-cursor"></span>
                        </h1>
                        <div id="typed-strings" style="display: none;">
                           <h1>secure</h1>
                           <h1>lightweight</h1>
                           <h1>open source</h1>
                           <h1>Powered by PHP 8</h1>
                        </div>
                        <script type="text/javascript">
                           if (document.getElementById('typed')) {
                             var typed = new Typed("#typed", {
                               stringsElement: '#typed-strings',
                               typeSpeed: 150,
                               backSpeed: 100,
                               backDelay: 300,
                               startDelay: 500,
                               loop: true
                             });
                           }
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /SLIDE 1 -->
      </div>
   </div>
</section>
<!-- /SLIDER -->
<!-- 
   INFO BAR 
   inside .container
   -->
<div class="info-bar info-bar-dark info-bar-bordered" style="margin: 0px; border-radius: 0;">
   <div class="container">
      <div class="row">
         <div class="col-sm-4">
            <i class="fa fa-github"></i>
            <h3>View on GitHub</h3>
            <p>Download the framework and star us on <a target="_blank" href="https://github.com/arout77/diamondphp">GitHub</a></p>
         </div>
         <div class="col-sm-4">
            <i class="glyphicon glyphicon-book"></i>
            <h3>Documentation</h3>
            <p>View <a href="{$smarty.const.SITE_URL}documentation">documentation</a> online. Updated weekly.</p>
         </div>
         <div class="col-sm-4">
            <i class="fa fa-question-circle-o"></i>
            <h3>Support</h3>
            <p>Have questions or problems? Visit our <a href="{$smarty.const.SITE_URL}documentation">support community</a></p>
         </div>
      </div>
   </div>
</div>
<!-- /INFO BAR -->
<section class="callout-dark heading-title heading-arrow-bottom" style="z-index:100; padding: 0px !important;">
   <div class="container">
      <div class="text-center">
         <p class="lead text-white mt-3" style="text-shadow: 2px 4px 9px black;">
            <br>
            <strong>
               <legend><em>Build stuff <span class="yellow">faster</span> than you ever thought possible!</em>
         </legend></strong>
         <br> With dozens of built-in developer tools, DiamondPHP speeds up the development and maintenance
         <br> of your applications by eliminating repetitive coding tasks.</p>
         <p><br><br></p>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="text-center">
         <h1>Get Started with <span>DiamondPHP</span></h1>
         <figure class="d-block mb-5 text-center">
            <svg width="80" viewBox="0 0 207 207">
               <g transform="translate(-78 -2353) translate(78 2353)" fill="none">
                  <circle fill="#EDE7F6" cx="103.5" cy="103.5" r="103.5"></circle>
                  <path d="M67.647 133.232c9.714 3.322 21.665 4.983 35.853 4.983 14.188 0 26.139-1.661 35.853-4.983 1.045-.357 2.182.2 2.54 1.245.071.208.108.427.108.647v8.828c0 .84-.525 1.591-1.314 1.879-9.963 3.637-22.49 5.455-37.582 5.455-15.072 0-27.345-1.814-36.819-5.441-.774-.296-1.285-1.039-1.285-1.868v-8.853c0-1.105.895-2 2-2 .22 0 .439.036.647.108z" id="Path" fill="#7E57C2"></path>
                  <path d="M156.417 75.333c-7.017 0-12.139 6.699-10.181 13.377 3.233 11.013-33.639 21.425-39.084-8.448-1.386-7.605.111-9.601 3.852-13.335 1.9-1.896 3.08-4.503 3.08-7.394 0-5.814-4.596-10.533-10.438-10.533-5.842 0-10.729 4.719-10.729 10.533 0 2.891 1.18 5.504 3.08 7.389 3.736 3.739 5.233 5.735 3.852 13.335-5.445 29.888-42.312 19.455-39.084 8.448 1.958-6.673-3.164-13.372-10.181-13.372-5.842 0-10.583 4.719-10.583 10.533 0 6.425 5.726 11.318 12.028 10.428 5.616-.786 10.325 9.213 14.125 29.998.197 1.075.962 1.958 1.999 2.305 8.842 2.96 20.673 4.44 35.494 4.44 14.808 0 26.547-1.477 35.217-4.432 1.029-.351 1.788-1.231 1.983-2.3 3.8-20.794 8.509-30.795 14.127-30.006 6.302.885 12.028-4.008 12.028-10.433 0-5.814-4.741-10.533-10.583-10.533z" fill="#B39DDB"></path>
               </g>
            </svg>
         </figure>
         <h2 class="col-sm-10 offset-sm-1 mb-0 fw-300">Learn how to develop web apps at <em class="red">warp</em> speed</h2>
      </div>
   </div>
</section>

<section>
   <div class="container">

      <div class="row">
         
         <div class="col-sm-6 col-md-4 col-lg-4">

            <div class="box-icon box-icon-left">
               <a class="box-icon-title" href="#">
                  <i class="fa fa-magic cottoncandy black"></i>
                  <h2>CODE GENIE</h2>
               </a>
               <p class="text-muted">Save time and let the Code Genie set up your controllers, models and views for you.</p>
            </div>

         </div>

         <div class="col-sm-6 col-md-4 col-lg-4">

            <div class="box-icon box-icon-left">
               <a class="box-icon-title" href="#">
                  <i style="color: #0dd154;" class="glyphicon glyphicon-console"></i>
                  <h2>TEMPLATE TOOLS</h2>
               </a>
               <p class="text-muted">Develop a sleek modern UI quickly and easily using the built-in template features.</p>
            </div>

         </div>

         <div class="col-sm-6 col-md-4 col-lg-4">

            <div class="box-icon box-icon-left">
               <a class="box-icon-title" href="#">
                  <i class="fa fa-html5 deepblue orange"></i>
                  <h2>MOBILE COMPATIBILE</h2>
               </a>
               <p class="text-muted">DiamondPHP ships with a mobile responsive template straight out of the box.</p>
            </div>

         </div>

         <div class="col-sm-6 col-md-4 col-lg-4">

            <div class="box-icon box-icon-left">
               <a class="box-icon-title" href="#">
                  <i class="fa fa-code bg-lime"></i>
                  <h2>MVC ARCHITECTURE</h2>
               </a>
               <p class="text-muted">By implementing MVC principles, you'll save countless hours in development and maintenance.</p>
            </div>

         </div>

         <div class="col-sm-6 col-md-4 col-lg-4">

            <div class="box-icon box-icon-left">
               <a class="box-icon-title" href="#">
                  <i class="fa fa-book bg-blue white"></i>
                  <h2>DOCUMENTATION</h2>
               </a>
               <p class="text-muted">We believe that a framework is only as good as it's documentation; spending hours figuring out simple tasks defeats the purpose of a framework.</p>
            </div>

         </div>

         <div class="col-sm-6 col-md-4 col-lg-4">

            <div class="box-icon box-icon-left">
               <a class="box-icon-title" href="#">
                  <i class="fa fa-life-saver bg-red"></i>
                  <h2>SUPPORT</h2>
               </a>
               <p class="text-muted">Get help from the community if you encounter any problems that you need help with.</p>
            </div>

         </div>

      </div>

   </div>
</section>


<div class="callout alert alert-warning mt-60">

   <div class="row">

      <div class="col-md-8 col-sm-8"><!-- left text -->
         <h4>Ready to get started?</h4>
         <p>
            Let's go! Start developing at warp speed
         </p>
      </div><!-- /left text -->

      
      <div class="col-md-4 col-sm-4 text-right"><!-- right btn -->
         <a href="https://github.com/arout77/diamondphp" target="_blank" class="btn btn-featured btn-warning btn-lg">
            <span style="font-weight: bold; font-size: 1.1em;">DOWNLOAD NOW</span>
            <i class="fa fa-download"></i>
         </a>
      </div><!-- /right btn -->

   </div>

</div>