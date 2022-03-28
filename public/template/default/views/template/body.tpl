{include file="template/head.tpl"}
{if $_controller neq 'login' && $_controller neq 'signup' && $_action neq 'login'}
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="{$smarty.const.SITE_URL}media/images/logo-lg.png" alt="Rhapsody" height="240" width="240">
		</div>

	{block name=body}
	
	{if $smarty.session.permissions eq 'admin' || $smarty.session.permissions eq 'employee'}
		{include file="template/employee_menu.tpl"}
	{else}
		{include file="template/client_menu.tpl"}
	{/if}

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Dashboard v1</li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
		<div class="container-fluid">

		<div class="modal fade" id="session" role="dialog" aria-labelledby="sessionLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header alert-warning-light">
				<h4 class="modal-title" id="sessionLabel">Your Session Is About To Expire</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body" id="session-message">
				We haven't detected any activity for a while, so for your security, you will be logged out of 
				the system automatically.
				<script>
				var timeleft = 120;
				var downloadTimer = setInterval(function(){
					if(timeleft <= 0){
					clearInterval(downloadTimer);
					document.getElementById("countdown").innerHTML = "[ Logging out... ]";
					} else {
					document.getElementById("countdown").innerHTML = "[ Logging out in " + timeleft + " seconds ]";
					}
					timeleft -= 1;
				}, 1000);
				</script>
				<p>To stay logged in, click the button below. Do nothing if you wish to let the system log you out automatically in a moment.</p>
			</div>
			<div class="modal-footer">
				<button type="button" id="continuesession" class="btn btn-block btn-warning" data-dismiss="modal">
					Continue Session <span style="float: right;" id="countdown"></span>
				</button>
			</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
		</div>

		{foreach $content as $tpl}
			{include file=$tpl}
		{/foreach}

		</div>
		</section>
		<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

	{/block}

	{else}

	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="{$smarty.const.SITE_URL}media/images/logo-lg.png" alt="Rhapsody" height="240" width="240">
	</div>

	<style>
	.main-footer {
		margin-left: 0px;
		background-color: transparent;
		border-top: none;
	}
	body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header 
	{
		margin-left: 0px;
	}
	</style>

	{foreach $content as $tpl}
		{include file=$tpl}
	{/foreach}

{/if}

	{include file="template/footer.tpl"}
</body>
</html>