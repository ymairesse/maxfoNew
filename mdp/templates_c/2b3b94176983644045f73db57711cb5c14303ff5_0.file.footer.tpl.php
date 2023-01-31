<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-26 16:07:00
  from '/home/yves/www/mdm/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6308d384865ca5_31324087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b3b94176983644045f73db57711cb5c14303ff5' => 
    array (
      0 => '/home/yves/www/mdm/templates/footer.tpl',
      1 => 1630139844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6308d384865ca5_31324087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/yves/www/mdm/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div style="padding-bottom: 60px"></div>

<div class="hidden-print navbar-xs navbar-default navbar-fixed-bottom" style="padding-top:10px">
	<span class="hidden-xs">
		Le <?php echo smarty_modifier_date_format(time(),"%A, %e %b %Y");?>
 à <?php echo smarty_modifier_date_format(time(),"%Hh%M");?>

		Adresse IP: <strong><?php echo $_smarty_tpl->tpl_vars['netId']->value['ip'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['netId']->value['hostname'];?>

		Votre passage est enregistré
			<span id="execTime" class="pull-right"><?php if ($_smarty_tpl->tpl_vars['executionTime']->value) {?>Temps d'exécution du script: <?php echo $_smarty_tpl->tpl_vars['executionTime']->value;?>
s<?php }?></span>
	</span>

	<span class="visible-xs">
		<?php echo $_smarty_tpl->tpl_vars['netId']->value['ip'];?>
 <?php echo $_smarty_tpl->tpl_vars['netId']->value['hostname'];?>
 <?php echo smarty_modifier_date_format(time(),"%A, %e %b %Y");?>
 <?php echo smarty_modifier_date_format(time(),"%Hh%M");?>

	</span>

</div>  <!-- navbar -->
<?php }
}
