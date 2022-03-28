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
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/summernote/summernote-bs4.min.css">
	<link href="{$smarty.const.SITE_URL}media/{$_template_name}/dist/css/custom.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/jquery/jquery.min.js"></script>
	<!-- Vuejs -->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<!-- Image uploader -->
	<!-- Documentation:  https://docs.dropzone.dev/getting-started/installation/stand-alone -->
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	{/block}
</head>