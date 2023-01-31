<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 14:36:19
  from '/home/yves/www/mdm/templates/inc/inputPeriode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d919532ecfc4_44769048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19a9acec1f366077b3c2c8e866f5c11852e06d5' => 
    array (
      0 => '/home/yves/www/mdm/templates/inc/inputPeriode.tpl',
      1 => 1666540096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d919532ecfc4_44769048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12 col-sm-6">
  
  <input type="hidden" name="id[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['periode']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">

  <div class="form-group">
    <label for="periode">Début de la période</label>
    <input type="text" class="form-control" name="debut[]" maxlength="5" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['periode']->value['debut'])===null||$tmp==='' ? '' : $tmp);?>
">
  </div>

</div>


<div class="col-xs-12 col-sm-6">

  <div class="form-group">
    <label for="periode">Fin de la période</label>
    <input type="text" class="form-control" name="fin[]" maxlength="5" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['periode']->value['fin'])===null||$tmp==='' ? '' : $tmp);?>
">
  </div>

</div><?php }
}
