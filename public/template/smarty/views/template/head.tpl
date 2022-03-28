<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta charset="UTF-8">
		<title>
			{block name=title}
				{if isset($title)} {$title} {else} DiamondPHP | Framework for PHP 8+ {/if}
			{/block}
		</title>

		{block name=head}
		<meta name="author" content="Andrew Rout">
		<meta name="description" content="DiamondPHP | Framework for PHP 8">
		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{$smarty.const.SITE_URL}media/smarty/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="{$smarty.const.SITE_URL}media/smarty/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="{$smarty.const.SITE_URL}media/smarty/assets/css/layout.css" rel="stylesheet" type="text/css" />
		
		<!-- SWIPER SLIDER -->
		<link href="{$smarty.const.SITE_URL}media/smarty/assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />
		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{$smarty.const.SITE_URL}media/smarty/assets/css/header-6.css" rel="stylesheet" type="text/css" />
		<link href="{$smarty.const.SITE_URL}media/smarty/assets/css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />
		<link rel="shortcut icon" href="{$smarty.const.SITE_URL}media/images/favicon.ico">
		<script type="text/javascript" src="{$smarty.const.SITE_URL}media/smarty/assets/plugins/html-parser.js"></script>
		<script type="text/javascript" src="{$smarty.const.SITE_URL}media/smarty/assets/plugins/initializer.js"></script>
		
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">

		<script src="{$smarty.const.SITE_URL}media/material/assets/js/plugins/prettify.js"></script>
		{* <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> *}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="{$smarty.const.SITE_URL}media/smarty/assets/css/custom.css" rel="stylesheet">

		{/block}
	</head>