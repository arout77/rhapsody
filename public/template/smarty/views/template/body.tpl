{include file="template/head.tpl"}

<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations
		
		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/_smarty/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">
	{block name=body}
	
	<!-- SLIDE TOP -->
	<div id="slidetop">

		<div class="container">
			
			<div class="row">

				<div class="col-md-6">
					<h4><i class="icon-diamond aqua"></i> DiamondPHP</h4>
					<p>
						<table>
							<tr>
								<td width="33%"><strong class="white">Latest Release Version:</strong></td>
								<td><span class="green">1.0.0</span></td>
							</tr>
							<tr>
								<td style="vertical-align: top;"><strong class="white">Check for updates:</strong></td>
								<td><span class="silver">Go to http://your-website.com/system/update to view available updates. <br>** You will need to add your IPv4 address 
									to the <strong>admin_ip</strong> setting in your .env config file in order to access the system's pages.</span></td>
							</tr>
						</table>
					</p>
				</div>

				<div class="col-md-6">
					<h6><i class="icon-rss orange"></i> Latest News</h6>
					<table id="diamond_news_feed">
						<tbody></tbody>
					</table>
				</div>

			</div>

		</div>

	<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

	</div>
	<script>
$(document).ready(function()
{  
 
    $.ajax(
    {  
        url:"{$smarty.const.SITE_URL}block/getnews/",
        type:"post",
        dataType: 'JSON',
        data: { 
          feed: 'get-feed' 
        },
        success:function(response)
        { 
	        let len = response.length;
	        if(len == 0) { 
	          let tr_str = "<tr><td align='center'>No current news to report</td></tr>";
	              $("#diamond_news_feed tbody").append(tr_str);
	        } 
	        else { 

	              let news = response.news;
	              let url = response.url;

	              let tr_str = "<tr>" +
	              	  "<td><span class='silver'>" + news + "</span></td></tr>" +
	                  "<tr><td align='center'><a class='blue' href='" + url + "'>...read more...</a></td></tr>";

	              $("#diamond_news_feed tbody").append(tr_str);
	        	}
	    }
    } );
            
} );
		</script>
	<!-- /SLIDE TOP -->

	<!-- wrapper -->
	<div id="wrapper">
	
	{include file="template/menu.tpl"}

	{if $slider neq ''}
		{include file="sliders/$slider.tpl"}
	{/if}

	<div class="bg-white">

		{foreach $content as $tpl}
			{include file=$tpl}
		{/foreach}

	</div>

	{include file="template/footer.tpl"}

	{/block}
</body>
</html>