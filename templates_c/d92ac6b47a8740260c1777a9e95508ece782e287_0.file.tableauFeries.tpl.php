<?php
/* Smarty version 3.1.34-dev-7, created on 2022-10-25 14:41:27
  from '/home/sio/www/mdmoxfam/templates/inc/tableauFeries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6357d9778b1174_46118668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd92ac6b47a8740260c1777a9e95508ece782e287' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/inc/tableauFeries.tpl',
      1 => 1665418296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6357d9778b1174_46118668 (Smarty_Internal_Template $_smarty_tpl) {
?>        <table class="table table-condensed" id="tableFeries">
        <tr>
            <th style="width:40%">Date</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'permanence', false, 'noPeriode');
$_smarty_tpl->tpl_vars['permanence']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noPeriode']->value => $_smarty_tpl->tpl_vars['permanence']->value) {
$_smarty_tpl->tpl_vars['permanence']->do_else = false;
?>
                <th style="width:20%"><?php echo $_smarty_tpl->tpl_vars['permanence']->value['debut'];?>
 - <?php echo $_smarty_tpl->tpl_vars['permanence']->value['fin'];?>
</th>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td style="width:1em;">
                &nbsp;
            </td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeConges']->value['feries'], 'lesPeriodes', false, 'laDate', 'ferie', array (
));
$_smarty_tpl->tpl_vars['lesPeriodes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['laDate']->value => $_smarty_tpl->tpl_vars['lesPeriodes']->value) {
$_smarty_tpl->tpl_vars['lesPeriodes']->do_else = false;
?>
        
        <tr class="congesFeries">
            <td>
              <div class="form-group">
                <input type="text" name="datesConge[]" class="form-control datepicker" placeholder="date" value="<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
">
            </div>
            </td>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'permanence', false, 'noPeriode');
$_smarty_tpl->tpl_vars['permanence']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noPeriode']->value => $_smarty_tpl->tpl_vars['permanence']->value) {
$_smarty_tpl->tpl_vars['permanence']->do_else = false;
?>
                <td class="<?php if ((isset($_smarty_tpl->tpl_vars['listeConges']->value['feries'][$_smarty_tpl->tpl_vars['laDate']->value][$_smarty_tpl->tpl_vars['noPeriode']->value]))) {?>conge<?php }?>">
                    <div class="checkbox">
                        <label>
                            <input  
                                type="checkbox" 
                                name="feries[]"
                                value="<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
"
                                data-laDate="<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
"
                                data-periode="<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
"
                                <?php if ((isset($_smarty_tpl->tpl_vars['listeConges']->value['feries'][$_smarty_tpl->tpl_vars['laDate']->value][$_smarty_tpl->tpl_vars['noPeriode']->value]))) {?>checked<?php }?>>
                                <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['permanence']->value['debut'];?>
</span>
                        </label>
                    </div>
                </td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td>
                <button type="button" 
                    class="btn btn-xs btn-danger btn-delConge"
                    title="Suppression de la ligne">
                    <i class="fa fa-times"></i>
                </button>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <!-- Ligne vide à compléter --------------------------------------------------- -->

        <tr class="congesFeries">
        <td>
            <div class="form-group">
            <input type="text" name="datesConge[]" class="form-control datepicker" placeholder="Date de la fermeture" value="">
            </div>
        </td>
        <td>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="feries[]" value="0" data-ladate="" data-periode="0">
                        <span class="hidden-xs">10h00</span>
                </label>
            </div>
        </td>
        <td>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="feries[]" value="1" data-ladate="" data-periode="1">
                        <span class="hidden-xs">12h30</span>
                </label>
            </div>
        </td>
        <td>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="feries[]" value="2" data-ladate="" data-periode="2">
                        <span class="hidden-xs">15h00</span>
                </label>
            </div>
        </td>
        <td>
            <button type="button" class="btn btn-xs btn-danger btn-delConge" title="Suppression de la ligne">
                <i class="fa fa-times"></i>
            </button>
        </td>
        </tr>

        </tbody>

        <tfoot>
            <tr>

                <td colspan="5">
                    <button type="button" 
                        class="btn btn-success btn-xs btn-block"
                        id="addDateConge"
                        title="Ajouter une date">
                        <i class="fa fa-plus"></i>
                        </button>
                </td>

            </tr>
        </tfoot>

        </table><?php }
}
