<style>
/* Fix image on specs page */
.thumbnail {
    padding: 0!important;
    border: none !important;
}

.img-fluid {
    display: block;
    max-width:400px;
    max-height:240px;
    width: auto;
    height: 240px;
}
</style>

<div class="container">

<div class="heading-title heading-dotted text-center">
	<h1>{$car.year} <span>{$car.make} {$car.model}</span></h1>
</div>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-7">
        <div class="thumbnail image-hover-zoom">
            <img class="img-fluid" src="{$car.img}" alt="" />
        </div>
    </div>

    <div class="col-md-5">
    <table class="fooTableInit col-xs-12 col-md-12"><!-- add .fooMinimal for minimal skin and remove foo css theme (footable.standalone.css) -->
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Engine</strong></td>
            <td align="right">{$car.liters}L {$car.engine} {if $car.turbo eq 1}Turbo{/if} {if $car.super eq 1}Supercharged{/if}</td>
        </tr>
        <tr>
            <td><strong>Horsepower</strong></td>
            <td align="right"><span class="countTo" data-speed="3000" style="color:#59BA41">{$car.hp}</span></td>
        </tr>
        <tr>
            <td><strong>Torque</strong></td>
            <td align="right"><span class="countTo" data-speed="3000" style="color:#59BA41">{$car.tq}</span></td>
        </tr>
        <tr>
            <td><strong>Curb Weight</strong></td>
            <td align="right"><span class="countTo" data-speed="4500" style="color:#59BA41">{$car.curb_weight}</span></td>
        </tr>
        <tr>
            <td><strong>Transmission</strong></td>
            <td align="right">{$car.gears} {$car.trans}</td>
        </tr>
        <tr>
            <td><strong>Drivetrain</strong></td>
            <td align="right">{$car.drive|upper}</td>
        </tr>
        <tr>
            <td><strong>0 - 60</strong></td>
            <td align="right">{$car.0to60}</td>
        </tr>
        <tr>
            <td><strong>1/4 mile</strong></td>
            <td align="right">{$car.quarter}</td>
        </tr>
        <tr>
            <td><strong>Top Speed</strong></td>
            <td align="right">{$car.top_speed}</td>
        </tr>
        <tr>
            <td><strong>Skidpad</strong></td>
            <td align="right">{$car.skidpad}</td>
        </tr>
        <tr>
            <td><strong>Slalom</strong></td>
            <td align="right">{$car.slalom}</td>
        </tr>
    </tbody>
    <caption class="text-center"></caption>
    </table>
    </div>
</div>

</div>