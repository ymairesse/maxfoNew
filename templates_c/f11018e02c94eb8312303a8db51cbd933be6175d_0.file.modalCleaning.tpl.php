<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 16:00:18
  from '/home/yves/www/mdm/templates/modal/modalCleaning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d92d02024185_54938781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f11018e02c94eb8312303a8db51cbd933be6175d' => 
    array (
      0 => '/home/yves/www/mdm/templates/modal/modalCleaning.tpl',
      1 => 1667312582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d92d02024185_54938781 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalCleaning" tabindex="-1" role="dialog" aria-labelledby="modalCleaningTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalCleaningTitle">Effacement des périodes échues</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form id="formClean" class="form">

            <p><span class="btn-danger">Attention, la suppression est définitive.</span><br>
            Il n'est pas possible de supprimer une période non échue</p>

            <ul class="list-unstyled" style="height:10em; overflow: auto;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeMois']->value, 'dataMois', false, 'mois');
$_smarty_tpl->tpl_vars['dataMois']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mois']->value => $_smarty_tpl->tpl_vars['dataMois']->value) {
$_smarty_tpl->tpl_vars['dataMois']->do_else = false;
?>
                <li>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" 
                        name="<?php echo $_smarty_tpl->tpl_vars['dataMois']->value['year'];?>
_<?php echo $_smarty_tpl->tpl_vars['dataMois']->value['month'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['dataMois']->value['past'] == 0) {?>disabled<?php }?> 
                        value="1">
                        <?php echo $_smarty_tpl->tpl_vars['dataMois']->value['monthName'];?>
 <?php echo $_smarty_tpl->tpl_vars['dataMois']->value['year'];?>
 <?php if ($_smarty_tpl->tpl_vars['dataMois']->value['past'] == 0) {?> <strong>[Non échu]</strong><?php }?>  
                    </label> 
                </div>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </form> 

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-danger" id="btn-modalClean">Confirmer</button>
      </div>
    </div>
  </div>
<?php }
}
