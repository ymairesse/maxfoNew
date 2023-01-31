<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-26 16:04:39
  from '/home/yves/www/mdm/mdp/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6308d2f7ef45e3_71325677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e1bcfde3013fa0414cc16cfa885552fb1ae8c12' => 
    array (
      0 => '/home/yves/www/mdm/mdp/templates/index.tpl',
      1 => 1660926818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../javascript.js' => 1,
    'file:../../styles.sty' => 1,
    'file:../../templates/footer.tpl' => 1,
  ),
),false)) {
function content_6308d2f7ef45e3_71325677 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>

<?php $_smarty_tpl->_subTemplateRender('file:../../javascript.js', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:../../styles.sty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
	<div class="container">

		<?php if ((isset($_smarty_tpl->tpl_vars['selecteur']->value))) {?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['selecteur']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php }?>

		<?php if (((isset($_smarty_tpl->tpl_vars['message']->value)))) {?>
		<div class="alert alert-dismissable alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['urgence'])===null||$tmp==='' ? 'info' : $tmp);?>

			<?php if ((!(in_array($_smarty_tpl->tpl_vars['message']->value['urgence'],array('danger','warning'))))) {?> auto-fadeOut<?php }?>">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['message']->value['texte'];?>
</p>
		</div>
		<?php }?>

				<div id="corpsPage">
		<?php if ((isset($_smarty_tpl->tpl_vars['corpsPage']->value))) {?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['corpsPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php }?>
		</div>

	</div>  <!-- container -->

<?php $_smarty_tpl->_subTemplateRender("file:../../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">

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

<?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
