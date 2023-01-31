<?php
/* Smarty version 3.1.34-dev-7, created on 2022-10-25 09:43:54
  from '/home/sio/www/mdmoxfam/templates/inc/pdfBtn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_635793ba996217_98775167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c83e341f509023fdfe8ed5567ab5b2e83af5caf' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/inc/pdfBtn.tpl',
      1 => 1666681835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635793ba996217_98775167 (Smarty_Internal_Template $_smarty_tpl) {
?><a type="button" class="btn btn-info btn-sm" name="button" href="inc/getPlanningPDF.php?month=<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
&year=<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" target="_blanck">
    <i class="fa fa-file-pdf-o"></i><span class="hidden-xs"> Impression PDF</span>
</a><?php }
}
