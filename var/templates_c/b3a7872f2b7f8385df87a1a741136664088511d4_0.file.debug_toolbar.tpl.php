<?php
/* Smarty version 3.1.44, created on 2022-03-21 03:26:38
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/template/debug_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_623828ae3a1f17_95026710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a7872f2b7f8385df87a1a741136664088511d4' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/template/debug_toolbar.tpl',
      1 => 1646793077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623828ae3a1f17_95026710 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"><?php echo '</script'; ?>
>

<style>
	.expstickybar{
		position:fixed;
		color: white;
		padding: 11px;
		right:0; /*horizontally center bar in window*/
		left:0; /*horizontally center bar in window*/
		visibility:hidden;
		background: #27272A;
		z-index: 10000;
		width:auto; /*set width of bar to width of entire window*/
		font-weight:bold;
		border-top: 2px solid red;
		box-shadow: 10px 0px 0px 0px grey;
		box-shadow: 0px -12px 26px -2px #4a4141;
	}

	.expstickybar a{
		color: white;
	}
</style>

<?php echo '<script'; ?>
>

jQuery.noConflict()

function expstickybar(usersetting){
	var setting=jQuery.extend({position:'bottom', peekamount:30, revealtype:'mouseover', speed:200}, usersetting)
	var thisbar=this
	var cssfixedsupport=!document.all || document.all && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //check for CSS fixed support
	if (!cssfixedsupport || window.opera)
		return
	jQuery(function($){ //on document.ready
		if (setting.externalcontent){
			thisbar.$ajaxstickydiv=$('<div id="ajaxstickydiv_'+setting.id+'"></div>').appendTo(document.body) //create blank div to house sticky bar DIV
			thisbar.loadcontent($, setting)
			}
		else
			thisbar.init($, setting)
	})
}

expstickybar.prototype={

	loadcontent:function($, setting){
		var thisbar=this
		var ajaxfriendlyurl=setting.externalcontent.replace(/^http:\/\/[^\/]+\//i, "http://"+window.location.hostname+"/")
		$.ajax({
			url: ajaxfriendlyurl, //path to external content
			async: true,
			dataType: 'html',
			error:function(ajaxrequest){
				alert('Error fetching Ajax content.<br />Server Response: '+ajaxrequest.responseText)
			},
			success:function(content){
				thisbar.$ajaxstickydiv.html(content)
				thisbar.init($, setting)
			}
		})

	},

	showhide:function(keyword, anim){
		var thisbar=this, $=jQuery
		var finalpx=(keyword=="show")? 0 : -(this.height-this.setting.peekamount)
		var positioncss=(this.setting.position=="bottom")? {bottom:finalpx} : {top:finalpx}
		this.$stickybar.stop().animate(positioncss, (anim)? this.setting.speed : 0, function(){
			thisbar.$indicators.each(function(){
				var $indicator=$(this)
				$indicator.attr('src', (thisbar.currentstate=="show")? $indicator.attr('data-closeimage') : $indicator.attr('data-openimage'))
			})
		})

		thisbar.currentstate=keyword
	},

	toggle:function(){
		var state=(this.currentstate=="show")? "hide" : "show"
		this.showhide(state, true)
	},

	init:function($, setting){
		var thisbar=this
		this.$stickybar=$('#'+setting.id).css('visibility', 'visible')
		this.height=this.$stickybar.outerHeight()
		this.currentstate="hide"
		setting.peekamount=Math.min(this.height, setting.peekamount)
		this.setting=setting
		if (setting.revealtype=="mouseover")
			this.$stickybar.bind("mouseenter mouseleave", function(e){
				thisbar.showhide((e.type=="mouseenter")? "show" : "hide", true)
		})
		this.$indicators=this.$stickybar.find('img[data-openimage]') //find images within bar with data-openimage attribute
		this.$stickybar.find('a[href=#togglebar]').click(function(){ //find links within bar with href=#togglebar and assign toggle behavior to them
			thisbar.toggle()
			return false
		})
		setTimeout(function(){
			thisbar.height=thisbar.$stickybar.outerHeight() //refetch height of bar after 1 second (last change to properly get height of sticky bar)
		}, 1000)
		this.showhide("hide")
	}
}


/////////////Initialization code://///////////////////////////

//Usage: var unqiuevar=new expstickybar(setting)

var mystickybar=new expstickybar({
	id: "stickybar", //id of sticky bar DIV
	position:'bottom', //'top' or 'bottom'
	revealtype:'mouseover', //'mouseover' or 'manual'
	peekamount:45, //number of pixels to reveal when sticky bar is closed
	externalcontent:'', //path to sticky bar content file on your server, or "" if content is defined inline on the page
	speed:250 //duration of animation (in millisecs)
})


<?php echo '</script'; ?>
>

<div id="stickybar" class="expstickybar">

	<a href="#togglebar">
		<img src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/open.gif" data-closeimage="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/close.gif" data-openimage="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/open.gif" style="border-width:0; float:right;" />
	</a>
	<div class="row">
		<div class="col-md-1">
			<img src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/favicon.png" height="24px !important" /> 
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-2">
			<i class="fa fa-clock-o red"></i> Script exec. time: <?php echo $_smarty_tpl->tpl_vars['exec_time']->value;?>
 sec
		</div>
		<div class="col-md-4">
			<i class="fa fa-memory red"></i> [RAM usage] current: <?php echo $_smarty_tpl->tpl_vars['ram_usage']->value;?>
 | Peak: <?php echo $_smarty_tpl->tpl_vars['ram_peak_usage']->value;?>

		</div>
		<div class="col-md-3"></div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<strong>View File(s):</strong> <?php echo basename($_smarty_tpl->source->filepath);?>

			</div>
			<div class="col">
				<span>2 of 3</span>
			</div>
			<div class="col">
				<span>3 of 3</span>
			</div>
		</div>
	</div>

</div><?php }
}
