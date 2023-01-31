<?php /* Smarty version Smarty-3.1.13, created on 2018-10-05 15:21:54
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11282715bb76572920f47-63992628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1439635797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11282715bb76572920f47-63992628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titre' => 0,
    'selecteur' => 0,
    'message' => 0,
    'corpsPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bb7657295dad9_29856016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb7657295dad9_29856016')) {function content_5bb7657295dad9_29856016($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>

<?php echo $_smarty_tpl->getSubTemplate ('../../javascript.js', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../../styles.sty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>
<body>
	<div class="container">

		<?php if (isset($_smarty_tpl->tpl_vars['selecteur']->value)){?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['selecteur']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['message']->value))){?>
		<div class="alert alert-dismissable alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['urgence'])===null||$tmp==='' ? 'info' : $tmp);?>

			<?php if ((!(in_array($_smarty_tpl->tpl_vars['message']->value['urgence'],array('danger','warning'))))){?> auto-fadeOut<?php }?>">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['message']->value['texte'];?>
</p>
		</div>
		<?php }?>

		
		<div id="corpsPage">
		<?php if (isset($_smarty_tpl->tpl_vars['corpsPage']->value)){?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['corpsPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		</div>

	</div>  <!-- container -->

<?php echo $_smarty_tpl->getSubTemplate ("../../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">

window.setTimeout(function() {
	$(".auto-fadeOut").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove();
		});
	}, 3000);

$(document).ready (function() {

	$("input:enabled").eq(0).focus();

	$("*[title]").tooltip();

	$(".pop").popover({
		trigger:'hover'
		});

})

</script>

</body>

</html>
<?php }} ?>