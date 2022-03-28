{foreach $profile as $member}

<div class="inner-page inventory-listing">
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <h2>{$member.username}</h2>
                        <span class="margin-top-10">{$member.headline}</span> </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 text-right">
                        <h2>{$member.city}, {$member.state}</h2>
                        <em>{$member.dob|calculate_age} years old</em>
                        <!-- <span class="sold_text">Sold</span> -->
                    </div>
                </div>
            </div>
            {* <div class="content-nav margin-bottom-30">
                <div class="row">
                  <div class="col-lg-12">
                    <ul>
                        <li class="prev1 gradient_button"><a href="#">Prev Vehicle</a></li>
                        <li class="request gradient_button"><a href="forms/request.php?recaptcha" class="fancybox_div">Request More Info</a></li>
                        <li class="schedule gradient_button"><a href="forms/schedule.php?recaptcha" class="fancybox_div">Schedule Test Drive</a></li>
                        <li class="offer gradient_button"><a href="forms/offer.php?recaptcha" class="fancybox_div">Make an Offer</a></li>
                        <li class="trade gradient_button"><a href="forms/trade.php?recaptcha" class="fancybox_div">Trade-In Appraisal</a></li>
                        <li class="pdf gradient_button"><a href="#" class="">PDF Brochure</a></li>
                        <li class="print gradient_button"><a class="print_page">Print This Vehicle</a></li>
                        <li class="email gradient_button"><a href="forms/friend.php?recaptcha" class="fancybox_div">Email to a Friend</a></li>
                        <li class="next1 gradient_button"><a href="#">Next Vehicle</a></li>
                    </ul>
                  </div>
                </div>
            </div> *}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 left-content">
                    <!--OPEN OF SLIDER-->

                    <div class="listing-slider">
                        <!-- <div class="angled_badge red">
                            <span>Just Arrived</span>
                        </div> -->
                        <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                
                            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2800%; transition-duration: 0.6s; transform: translate3d(-6795px, 0px, 0px);">
                                    <li data-thumb="images/boxster1_slide.jpg" class="" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster1.jpg"><img src="images/boxster1_slide.jpg" alt="" data-full-image="images/boxster1.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster4_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster4.jpg"><img src="images/boxster4_slide.jpg" alt="" data-full-image="images/boxster4.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster5_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster5.jpg"><img src="images/boxster5_slide.jpg" alt="" data-full-image="images/boxster5.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster8_slide.jpg" style="float: left; display: block; width: 755px;" class=""> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster8.jpg"><img src="images/boxster8_slide.jpg" alt="" data-full-image="images/boxster8.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster10_slide.jpg" style="float: left; display: block; width: 755px;"><a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster10.jpg"><img src="images/boxster10_slide.jpg" alt="" data-full-image="images/boxster10.jpg" draggable="false"></a> </li>
                                    <!-- full -->
                                    <li data-thumb="images/boxster2_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster2.jpg"><img src="images/boxster2_slide.jpg" alt="" data-full-image="images/boxster2.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster3_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster3.jpg"><img src="images/boxster3_slide.jpg" alt="" data-full-image="images/boxster3.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster6_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster6.jpg"><img src="images/boxster6_slide.jpg" alt="" data-full-image="images/boxster6.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster7_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster7.jpg"><img src="images/boxster7_slide.jpg" alt="" data-full-image="images/boxster7.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster9_slide.jpg" style="float: left; display: block; width: 755px;" class="flex-active-slide"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster9.jpg"><img src="images/boxster9_slide.jpg" alt="" data-full-image="images/boxster9.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster11_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster11.jpg"><img src="images/boxster11_slide.jpg" alt="" data-full-image="images/boxster11.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster12_slide.jpg" style="float: left; display: block; width: 755px;" class=""> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster12.jpg"><img src="images/boxster12_slide.jpg" alt="" data-full-image="images/boxster12.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster13_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster13.jpg"><img src="images/boxster13_slide.jpg" alt="" data-full-image="images/boxster13.jpg" draggable="false"></a> </li>
                                    <li data-thumb="images/boxster14_slide.jpg" style="float: left; display: block; width: 755px;"> <a rel="gallery1" class="fancybox fancybox_listing_link" href="images/boxster14.jpg"><img src="images/boxster14_slide.jpg" alt="" data-full-image="images/boxster14.jpg" draggable="false"></a> </li>
                                </ul></div></div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                
                            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2800%; transition-duration: 0.6s; transform: translate3d(-1408px, 0px, 0px);">
                                    <li data-thumb="images/thumbnail1.jpg" class="" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail1.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail2.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail2.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail3.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail3.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail4.jpg" style="float: left; display: block; width: 171px;" class=""> <a href="#"><img src="images/thumbnail4.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail5.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail5.jpg" alt="" draggable="false"></a> </li>
                                    <!-- full -->
                                    <li data-thumb="images/thumbnail6.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail6.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail7.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail7.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail8.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail8.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail9.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail9.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail10.jpg" style="float: left; display: block; width: 171px;" class="flex-active-slide"> <a href="#"><img src="images/thumbnail10.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail11.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail11.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail12.jpg" style="float: left; display: block; width: 171px;" class=""> <a href="#"><img src="images/thumbnail12.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail13.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail13.jpg" alt="" draggable="false"></a> </li>
                                    <li data-thumb="images/thumbnail14.jpg" style="float: left; display: block; width: 171px;"> <a href="#"><img src="images/thumbnail14.jpg" alt="" draggable="false"></a> </li>
                                </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                        </section>
                    </div>
                    
                    <div class="listing-slider">
                        <!-- <div class="angled_badge red">
                            <span>Just Arrived</span> 
                        </div> -->
                        <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                <ul class="slides">
                                {foreach $img_gallery as $pic}
                                    <li data-thumb="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}"> 
                                    <img src="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" alt="" data-full-image="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" /> 
                                    </li>
                                {/foreach}
                                </ul>
                            </div>
                        </section>

                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides" style="width: 2800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <li data-thumb="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" class="flex-active-slide" style="float: left; display: block; width: 171px;"> <a href="#"><img src="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" alt="" draggable="false"></a> </li>
                                    <!-- full -->
                                    {foreach $img_gallery as $pic}
                                    <li data-thumb="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" style="float: left; display: block; width: 171px;"> 
                                    <a href="#"><img src="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" alt="" draggable="false"></a> 
                                    </li>
                                    {/foreach}
                                </ul>
                                
                                <ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li>
                                    <li><a class="flex-next" href="#">Next</a></li>
                                </ul>

                            </div>
                        </section>
                        {* <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                <ul class="slides">
                                {foreach $img_gallery as $pic}
                                    <li data-thumb="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}"> <img src="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" alt="" data-full-image="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" /> </li>
                                {/foreach}
                                </ul>
                            </div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">
                                {foreach $img_gallery as $pic}
                                    <li data-thumb="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}"> <a href="#"><img src="{$smarty.const.USER_PICS_URL}{$member.username}/{$pic.img_filename}" alt="" /></a> </li>
                                {/foreach}
                                </ul>
                            </div>
                        </section> *}
                        
                    </div>
                    
                    <!--CLOSE OF SLIDER-->
                    <!--Slider End-->
                    <div class="clearfix"></div>
                    <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        <ul id="myTab" class="nav nav-tabs">
                            <li><a href="#about" data-toggle="tab" class="active">About Me</a></li>
                            <li><a href="#features" data-toggle="tab">Features &amp; Options</a></li>
                            <li><a href="#technical" data-toggle="tab">Technical Specifications</a></li>
                            <li><a href="#location" data-toggle="tab">Vehicle Location</a></li>
                            <li><a href="#comments" data-toggle="tab">Other Comments</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                            <div class="tab-pane in active" id="about">
                                <p>{$member.about_me}</p>
                            </div>
                            <div class="tab-pane" id="features">
                                <ul class="fa-ul">
                                    <li><i class="fa-li fa fa-check"></i> Adaptive Cruise Control</li>
                                    <li><i class="fa-li fa fa-check"></i> Airbags</li>
                                    <li><i class="fa-li fa fa-check"></i> Air Conditioning</li>
                                    <li><i class="fa-li fa fa-check"></i> Alarm System</li>
                                    <li><i class="fa-li fa fa-check"></i> Anti-theft Protection</li>
                                    <li><i class="fa-li fa fa-check"></i> Audio Interface</li>
                                    <li><i class="fa-li fa fa-check"></i> Automatic Climate Control</li>
                                    <li><i class="fa-li fa fa-check"></i> Automatic Headlights</li>
                                    <li><i class="fa-li fa fa-check"></i> Auto Start/Stop</li>
                                    <li><i class="fa-li fa fa-check"></i> Bi-Xenon Headlights</li>
                                    <li><i class="fa-li fa fa-check"></i> Bluetooth® Handset</li>
                                    <li><i class="fa-li fa fa-check"></i> BOSE® Surround Sound</li>
                                    <li><i class="fa-li fa fa-check"></i> Burmester® Surround Sound</li>
                                    <li><i class="fa-li fa fa-check"></i> CD/DVD Autochanger</li>
                                    <li><i class="fa-li fa fa-check"></i> CDR Audio</li>
                                    <li><i class="fa-li fa fa-check"></i> Cruise Control</li>
                                    <li><i class="fa-li fa fa-check"></i> Direct Fuel Injection</li>
                                    <li><i class="fa-li fa fa-check"></i> Electric Parking Brake</li>
                                    <li><i class="fa-li fa fa-check"></i> Floor Mats</li>
                                    <li><i class="fa-li fa fa-check"></i> Garage Door Opener</li>
                                    <li><i class="fa-li fa fa-check"></i> Leather Package</li>
                                    <li><i class="fa-li fa fa-check"></i> Locking Rear Differential</li>
                                    <li><i class="fa-li fa fa-check"></i> Luggage Compartments</li>
                                    <li><i class="fa-li fa fa-check"></i> Manual Transmission</li>
                                    <li><i class="fa-li fa fa-check"></i> Navigation Module</li>
                                    <li><i class="fa-li fa fa-check"></i> Online Services</li>
                                    <li><i class="fa-li fa fa-check"></i> ParkAssist</li>
                                    <li><i class="fa-li fa fa-check"></i> Porsche Communication</li>
                                    <li><i class="fa-li fa fa-check"></i> Power Steering</li>
                                    <li><i class="fa-li fa fa-check"></i> Reversing Camera</li>
                                    <li><i class="fa-li fa fa-check"></i> Roll-over Protection</li>
                                    <li><i class="fa-li fa fa-check"></i> Seat Heating</li>
                                    <li><i class="fa-li fa fa-check"></i> Seat Ventilation</li>
                                    <li><i class="fa-li fa fa-check"></i> Sound Package Plus</li>
                                    <li><i class="fa-li fa fa-check"></i> Sport Chrono Package</li>
                                    <li><i class="fa-li fa fa-check"></i> Steering Wheel Heating</li>
                                    <li><i class="fa-li fa fa-check"></i> Tire Pressure Monitoring</li>
                                    <li><i class="fa-li fa fa-check"></i> Universal Audio Interface</li>
                                    <li><i class="fa-li fa fa-check"></i> Voice Control System</li>
                                    <li><i class="fa-li fa fa-check"></i> Wind Deflector</li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="technical">
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Engine</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Layout / number of cylinders</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>Displacement</td>
                                            <td>3.4 l</td>
                                        </tr>
                                        <tr>
                                            <td>Engine Layout</td>
                                            <td>Mid-engine</td>
                                        </tr>
                                        <tr>
                                            <td>Horespower</td>
                                            <td>315 hp</td>
                                        </tr>
                                        <tr>
                                            <td>@ rpm</td>
                                            <td>6,700 rpm</td>
                                        </tr>
                                        <tr>
                                            <td>Torque</td>
                                            <td>266 lb.-ft.</td>
                                        </tr>
                                        <tr>
                                            <td>Compression ratio</td>
                                            <td>12.5 : 1</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Performance</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Top Track Speed</td>
                                            <td>173 mph</td>
                                        </tr>
                                        <tr>
                                            <td>0 - 60 mph</td>
                                            <td>4.8 s</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Transmission</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Manual Gearbox</td>
                                            <td>6-speed with dual-mass flywheel and self-adjusting clutch</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Fuel consumption</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>City (estimate)</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Highway (estimate)</td>
                                            <td>28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Body</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Length</td>
                                            <td>172.2 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Width</td>
                                            <td>70.9 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Height</td>
                                            <td>50.4 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Wheelbase</td>
                                            <td>97.4 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Maximum payload</td>
                                            <td>739 lbs</td>
                                        </tr>
                                        <tr>
                                            <td>Curb weight</td>
                                            <td>2910 lbs</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Capacities</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Luggage compartment volume</td>
                                            <td>5.3 cu. ft. (front) / 4.6 cu. ft. (rear)</td>
                                        </tr>
                                        <tr>
                                            <td>Fuel Tank Capacity</td>
                                            <td>16.9 gal.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="location">
                                <div id='google-map-listing' class="contact" data-longitude='-79.38' data-latitude='43.65' data-zoom='11' style="height: 350px;" data-parallax="false"></div>
                            </div>
                            <div class="tab-pane fade" id="comments">
                                <p>Vestibulum sit amet ligula eget nibh cursus bibendum et id eros. Nam congue, dui quis consectetur blandit, neque neque mattis diam,
                                    vitae egestas urna lectus eu turpis. In vitae commodo sem. Etiam vehicula sed ligula malesuada cursus. Cras augue elit, tempus at dignissim
                                    sed, egestas eget leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam mollis luctus nibh et
                                    bibendum. Morbi congue lectus nec congue congue. Nulla molestie feugiat quam ac sollicitudin. Nulla sed congue lectus. Donec blandit elit
                                    sit amet aliquet laoreet.</p>
                                <p><img src="images/engine.png" alt="engine" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 right-content">
                    <div class="side-content">
                        <div class="car-info margin-bottom-50">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Body Style:</td>
                                            <td>Convertible</td>
                                        </tr>
                                        <tr>
                                            <td>ENGINE:</td>
                                            <td>3.4L Mid-Engine V6</td>
                                        </tr>
                                        <tr>
                                            <td>TRANSMISSION:</td>
                                            <td>6-speed Manual</td>
                                        </tr>
                                        <tr>
                                            <td>DRIVETRAIN:</td>
                                            <td>Rear Wheel Drive</td>
                                        </tr>
                                        <tr>
                                            <td>EXTERIOR:</td>
                                            <td>Lime Gold Metallic</td>
                                        </tr>
                                        <tr>
                                            <td>INTERIOR:</td>
                                            <td>Agate Grey</td>
                                        </tr>
                                        <tr>
                                            <td>MILES:</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>DOORS:</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>PASSENGERS:</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>STOCK #:</td>
                                            <td>16115</td>
                                        </tr>
                                        <tr>
                                            <td>VIN #:</td>
                                            <td>WP0AB2E81EK190171</td>
                                        </tr>
                                        <tr>
                                            <td>FUEL MILEAGE:</td>
                                            <td>20 City / 28 Hwy</td>
                                        </tr>
                                        <tr>
                                            <td>FUEL TYPE:</td>
                                            <td>Gasoline</td>
                                        </tr>
                                        <tr>
                                            <td>CONDITION:</td>
                                            <td>Brand New</td>
                                        </tr>
                                        <tr>
                                            <td>OWNERS:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>WARRANTY:</td>
                                            <td>3 Years Limited</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="efficiency-rating text-center padding-vertical-15 margin-bottom-40">
                            <h3>Fuel Efficiency Rating</h3>
                            <ul>
                                <li class="city_mpg"><small>City MPG:</small> <strong>20</strong></li>
                                <li class="fuel"><img src="images/fuel-icon.png" alt="" class="aligncenter"></li>
                                <li class="hwy_mpg"><small>Hwy MPG:</small> <strong>28</strong></li>
                            </ul>
                            <p>Actual rating will vary with options, driving conditions,
                                driving habits and vehicle condition.</p>
                        </div>
                        <ul class="social-likes pull-right" data-url="http://themesuite.com" data-title="Blog Post">
                            <li class="facebook" title="Share link on Facebook"></li>
                            <li class="pinterest" title="Share image on Pinterest" data-media=""></li>
                            <li class="twitter" title="Share link on Twitter"></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="financing_calculator margin-top-40">
                            <h3>FINANCING CALCULATOR</h3>
                            <div class="table-responsive">
                                <table class="table no-border no-margin">
                                    <tbody>
                                        <tr>
                                            <td>Cost of Vehicle ($):</td>
                                            <td><input type="text"  class="number cost" placeholder="10000" /></td>
                                        </tr>
                                        <tr>
                                            <td>Down Payment ($):</td>
                                            <td><input type="text"  class="number down_payment" placeholder="1000" /></td>
                                        </tr>
                                        <tr>
                                            <td>Annual Interest Rate (%):</td>
                                            <td><input type="text"  class="number interest" placeholder="7" /></td>
                                        </tr>
                                        <tr>
                                            <td>Term of Loan in Years:</td>
                                            <td><input type="text"  class="number loan_years" placeholder="5" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bi_weekly clearfix">
                                <div class="pull-left">Frequency of Payments:</div>
                                <div class="dropdown_container ">
                                    <select class="frequency css-dropdowns">
                                        <option value='0'>Bi-Weekly</option>
                                        <option value='1'>Weekly</option>
                                        <option value='2'>Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                            <div class="clear"></div>
                            <div class="calculation">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                            <td><strong class="payments">60</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>PAYMENT AMOUNT:</strong></td>
                                            <td><strong class="payment_amount">$ 89.11</strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="recent-vehicles-wrap">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 recent-vehicles xs-padding-bottom-20">
                        <h5 class="margin-top-none">Similar Vehicles</h5>
                        <p>Browse through the vast
                            selection of vehicles that
                            have recently been added
                            to our inventory.</p>
                        <div class="arrow3 clearfix" id="slideControls3"><span class="prev-btn"></span><span class="next-btn"></span></div>
                    </div>
                    <div class="col-lg-10 col-md-8 col-sm-8">
                        <div class="carasouel-slider3">
                            <div class="slide">
                                <div class="angled_badge blue">
                                    <span>405 HP</span>
                                </div>
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car1.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2012 Porsche Cayenne GTS</strong></h6>
                                        <h6>1 Owner, 26,273 miles</h6>
                                        <h5>$ 79,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                    <div class="angled_badge red">
                                        <span>Just Arrived</span>
                                    </div>
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car2.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2009 Porsche Boxster</strong></h6>
                                        <h6>New Tires, 26,273 miles</h6>
                                        <h5>$ 34,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car3.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2019 Porsche Panamera S</strong></h6>
                                        <h6>Demonstrator, 7,088 miles</h6>
                                        <h5>$ 63,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car4.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2010 Porsche Carrera 4S</strong></h6>
                                        <h6>AWD, 21,900 miles</h6>
                                        <h5>$ 73,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car5.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2012 Porsche Carrera S</strong></h6>
                                        <h6>Convertible, 22,158 miles</h6>
                                        <h5>$ 56,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car6.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2019 Porsche GTS</strong></h6>
                                        <h6>1 Owner, 3,914 miles</h6>
                                        <h5>$ 94,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car7.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2014 Porsche Cayenne GTS</strong></h6>
                                        <h6>1 Owner, 7 miles</h6>
                                        <h5>$ 114,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <span class="sold_text">Sold</span>
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car8.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2014 Porsche GTS</strong></h6>
                                        <h6>1 Owner, 5 miles</h6>
                                        <h5>$ 99,995</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="car-block">
                                    <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="images/c-car9.jpg" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>2009 Porsche Carrera 4S</strong></h6>
                                        <h6>1 Owner, 114,239 miles</h6>
                                        <h5>$ 39,995</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

{/foreach}