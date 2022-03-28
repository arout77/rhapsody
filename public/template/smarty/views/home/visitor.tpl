<div class="inner-page about-us row">
	
	<div class="clearfix"></div>

	<div class="find_team clearfix">
			<h2 class="margin-top-none">NEWEST MEMBERS</h2>
			<div class="inner-page portfolio-container row">
            <div class="list_faq clearfix col-lg-12 margin-bottom-40">
            <h5 class="padding-vertical-10 padding-horizontal-15">Sort Profiles By:</h5>
                <ul class="portfolioFilter padding-left-25">
                    <li class="active"><a href="#" data-filter="*" class="current filter">All</a></li>
                    <li><a href="#" class="filter" data-filter=".male">Men </a></li>
                    <li><a href="#" class="filter" data-filter=".female">Women</a></li>
                </ul>
            </div>
            <div class="portfolioContainer portfolio_4">
					{foreach $new_members as $member}	
					{* First get premium members *}
					<div class="col-md-3 {$member.gender} mix margin-bottom-50">
						<div class="box clearfix">
						<a href="{$smarty.const.USER_PICS_URL}{$member.username}/{$member.main_img}" class="fancybox"><img src="{$smarty.const.USER_PICS_URL}{$member.username}/{$member.main_img}" class="aligncenter" alt="{$member.username}" /> </a>
							<div class="padding-top-25 padding-bottom-10">
                                    <a href="{$smarty.const.SITE_URL}member/view/{$member.username}/">
										<h2>{$member.username}, {$member.dob|calculate_age}</h2>
									</a>
                                    <span>{$member.headline}</span> 
                            </div>
							<div class="clearfix"></div>
						</div>
					</div>
					{/foreach}

					{foreach $nearby_members as $member}
					<div class="col-md-4 col-sm-12">
						<div class="team margin-top-15 xs-margin-bottom-30"> 
						<a href="{$smarty.const.USER_PICS_URL}{$member.username}/{$member.main_img}" class="fancybox"><img src="{$smarty.const.USER_PICS_URL}{$member.username}/{$member.main_img}" class="aligncenter" alt="{$member.username}" /> </a>
							<div class="name_post padding-bottom-15">
								<h4>{$member.username}, {$member.dob|calculate_age}</h4>
								<p>
									<div style="width: 50%;">
										{$member.city}, {$member.state}
									</div>
									<div style="width: 50%;">
										Last online: {$member.last_login}<br>

										<div class="btn btn-light tooltip"><i class="fas fa-star red"></i>
											<div class="top">
												<h3>Add Favorite</h3>
												<p>Dolor sit amet, consectetur adipiscing elit.</p>
												<i></i>
											</div>
										</div>
										<div class="btn btn-light tooltip"><i class="fas fa-heart red"></i>
											<div class="top">
												<h3>Flirt</h3>
												<p>Dolor sit amet, consectetur adipiscing elit.</p>
												<i></i>
											</div>
										</div>
										<div class="btn btn-light tooltip"><i class="fas fa-envelope red"></i>
											<div class="top">
												<h3>Send Message</h3>
												<p>Dolor sit amet, consectetur adipiscing elit.</p>
												<i></i>
											</div>
										</div>
										<div class="btn btn-light tooltip"><i class="fas fa-close red"></i>
											<div class="top">
												<h3>Block</h3>
												<p>Dolor sit amet, consectetur adipiscing elit.</p>
												<i></i>
											</div>
										</div>
										{* <div class="btn-group mr-2" role="group" aria-label="First group">
											<button type="button" class="btn btn-light tooltip" data-toggle="tooltip" data-placement="top" title="Add to Favorites"><i class="fas fa-heart red"></i></button>
											<button type="button" class="btn btn-light tooltip" data-toggle="tooltip" data-placement="top" title="Send Flirt"><i class="far fa-kiss-wink-heart red"></i></button>
											<button type="button" class="btn btn-light tooltip" data-toggle="tooltip" data-placement="top" title="Send Message"><i class="far fa-envelope red"></i></button>
											<button type="button" class="btn btn-light tooltip" data-toggle="tooltip" data-placement="top" title="Block this user"><i class="fas fa-ban red"></i></button>
										</div> *}
									</div>
								</p>
							</div>
							<div class="about_team padding-bottom-10">
								<p class="margin-vertical-15">{$member.headline}</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					{/foreach}

				</div>
			</div>
		</div>
</div>