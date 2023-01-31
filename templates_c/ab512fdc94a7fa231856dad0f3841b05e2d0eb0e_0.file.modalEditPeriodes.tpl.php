<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 14:36:19
  from '/home/yves/www/mdm/templates/modal/modalEditPeriodes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d919532e6fe0_24649493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab512fdc94a7fa231856dad0f3841b05e2d0eb0e' => 
    array (
      0 => '/home/yves/www/mdm/templates/modal/modalEditPeriodes.tpl',
      1 => 1666541185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../inc/inputPeriode.tpl' => 1,
  ),
),false)) {
function content_63d919532e6fe0_24649493 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalEditPeriodes" tabindex="-1" role="dialog" aria-labelledby="modalEditPeriodesTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalEditPeriodesTitle">Modification des périodes de permanences</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

            <form id="formEditPeriodes">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'periode', false, 'id');
$_smarty_tpl->tpl_vars['periode']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['periode']->value) {
$_smarty_tpl->tpl_vars['periode']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:../inc/inputPeriode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="clearfix"></div>

            </form>

      </div>

      <div class="modal-footer">
            <button type="button" id="btn-savePeriodes" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>

<?php }
}
