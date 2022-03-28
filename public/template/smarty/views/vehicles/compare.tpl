

<div class="row mega-price-table">
    
    <div class="col-md-3 col-sm-6 hidden-sm hidden-xs-down pricing-desc">

        {* <div class="pricing-title">
            <h3>Vehicle Comparisons</h3>
        </div> *}

        <ul class="list-unstyled" style="font-weight: bold;">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li>Engine</li>
            <li class="alternate">Horsepower</li>
            <li>Torque</li>
            <li class="alternate">Transmission</li>
            <li>Drivetrain</li>
            <li class="alternate">Curb Weight</li>
            <li>Seats</li>
            <li class="alternate">0 - 60</li>
            <li>1/4 mile</li>
            <li class="alternate">Top Speed</li>
            <li>Skidpad</li>
            <li class="alternate">Slalom</li>
        </ul>

    </div>

    {foreach $whichVehicles as $car}

        <div class="col-md-3 col-sm-6 block">
		<div class="pricing">

			<!-- option list -->
			<ul class="pricing-table list-unstyled">
                <li class="pricing-head">
                    <h3>{$car.year} {$car.make} {$car.model}</h3>
                </li>
                <li>
                <div class="thumbnail image-hover-zoom">
                    <img class="img-fluid" src="{$car.img}" style='height: 240px;' alt="" />
                </div>
                </li>
				<li>
    {$car.liters} {$car.engine} {if $car.turbo eq 1}Turbo{/if} {if $car.super eq 1}Supercharged{/if}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li class="alternate">
                    {$car.hp}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li>
                    {$car.tq}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li class="alternate">
                    {$car.gears} {$car.trans}
					<span class="hidden-md hidden-lg"></span>
				</li>
                <li>
                    {$car.drive}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li class="alternate">
                    {$car.curb_weight}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li>
                    {$car.seats}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li class="alternate">
                    {$car.0to60}
					<span class="hidden-md hidden-lg"></span>
				</li>
                <li>
                    {$car.quarter}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li class="alternate">
                    {$car.top_speed}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li>
                    {$car.skidpad}
					<span class="hidden-md hidden-lg"></span>
				</li>
				<li class="alternate">
                    {$car.slalom}
					<span class="hidden-md hidden-lg"></span>
				</li>
			</ul>
			<!-- /option list -->

		</div>
	</div>

    {/foreach}
</div>