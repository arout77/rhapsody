<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
	<meta charset="utf-8">
	<title>
		{block name=title}
			{if isset($title)} {$title} {else} DiamondPHP | Framework for PHP 8+ {/if}
		{/block}
	</title>
	{block name=head}
	<meta name="author" content="Andrew Rout">
	<meta name="description" content="DiamondPHP | Framework for PHP 8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- CSS Files -->
	<link href="{$smarty.const.SITE_URL}media/{$_template_name}/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{$smarty.const.SITE_URL}media/{$_template_name}/css/now-ui-dashboard.css?v=1.6.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{$smarty.const.SITE_URL}media/{$_template_name}/demo/demo.css" rel="stylesheet" />
	<link href="{$smarty.const.SITE_URL}media/{$_template_name}/css/custom.css" rel="stylesheet">
	
	<!-- jQuery -->
	<script src="{$smarty.const.SITE_URL}media/{$_template_name}/js/core/jquery.min.js"></script>
	{/block}
</head>