<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-30 18:22:44
  from '/home/sio/www/mdmoxfam/templates/inc/inputPeriode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d7fce44ad059_22627112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae13bd279cd6720962947f57e6035032c26b5818' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/inc/inputPeriode.tpl',
      1 => 1666540096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d7fce44ad059_22627112 (Smarty_Internal_Template $_smarty_tpl) {
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
