{include file="template/head.tpl"}

<body class="">
	<div class="wrapper ">
	{block name=body}
	
	{include file="template/menu.tpl"}

	{* 
	<div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
    </div> 
	*}
	
	<div class="panel-header panel-header-sm"></div>
    <div class="content">

		{foreach $content as $tpl}
			{include file=$tpl}
		{/foreach}

	</div>
	{/block}
	{include file="template/footer.tpl"}
</body>
</html>