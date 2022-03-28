{literal}
<style media="screen">
	pre {
		background-color: #242424;
		color: lime;
		font-size: 16px;
		font-family: "Lucida Console", Monaco, monospace;
	}
	h3 { color: #242424; background-color: lime; width: 25%; text-align: center; margin-left: auto; margin-right: auto; }
</style>
{/literal}

<pre>
<h3>DEBUG CONSOLE</h3>
>  <strong>MESSAGE: VIEW FILE NOT FOUND</strong>
>  <small>view file:   {$smarty.const.VIEWS_PATH}/{$content}</small>
>  <small>controller:  {$controller_class}</small>
>
>  The view file being requested by the controller cannot be found.
>  To correct this error, either create the view file specified above,
>  or edit the following method in the controller file below 
>  to display a different view file.
>
>  <span class="btn-danger">{$smarty.const.CONTROLLERS_PATH}{$controller_filename}</span>
>
>  View <a href="{$smarty.const.SITE_URL}documentation/mvc/views">the Views documentation</a> for more information.
</pre>