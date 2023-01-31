<?php
/* Smarty version 3.1.34-dev-7, created on 2022-10-25 14:41:27
  from '/home/sio/www/mdmoxfam/templates/conges.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6357d97788b620_34082296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f72ca3eb8dedac97bae0f15a8fe746db8b3219b9' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/conges.tpl',
      1 => 1665413957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/tableauFeries.tpl' => 1,
  ),
),false)) {
function content_6357d97788b620_34082296 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="form-conges">

<h2>Jours de congés</h2>

<div class="col-xs-12 col-md-6">

    <h3>Fermetures hebodomadaires</h3>

    <table class="table table-condensed">
        <thead>
        <tr>
            <th style="width:10%">Jour</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'permanence', false, 'noPeriode');
$_smarty_tpl->tpl_vars['permanence']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noPeriode']->value => $_smarty_tpl->tpl_vars['permanence']->value) {
$_smarty_tpl->tpl_vars['permanence']->do_else = false;
?>
                <th style="width:30%"><?php echo $_smarty_tpl->tpl_vars['permanence']->value['debut'];?>
 - <?php echo $_smarty_tpl->tpl_vars['permanence']->value['fin'];?>
</th>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        </thead>

        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daysOfWeek']->value, 'jourFR', false, 'noJour');
$_smarty_tpl->tpl_vars['jourFR']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noJour']->value => $_smarty_tpl->tpl_vars['jourFR']->value) {
$_smarty_tpl->tpl_vars['jourFR']->do_else = false;
?>
            <tr data-jour="<?php echo $_smarty_tpl->tpl_vars['jourFR']->value;?>
">
                <th><?php echo $_smarty_tpl->tpl_vars['jourFR']->value;?>
</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'permanence', false, 'noPeriode');
$_smarty_tpl->tpl_vars['permanence']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noPeriode']->value => $_smarty_tpl->tpl_vars['permanence']->value) {
$_smarty_tpl->tpl_vars['permanence']->do_else = false;
?>
                <td data-jour="<?php echo $_smarty_tpl->tpl_vars['noJour']->value;?>
" data-periode="<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['listeConges']->value['hebdo'][$_smarty_tpl->tpl_vars['noJour']->value][$_smarty_tpl->tpl_vars['noPeriode']->value]))) {?> conge<?php }?>">
                    <div class="checkbox" style="float:left">
                        <label>
                            <input  
                                type="checkbox" name="hebdo[]" 
                                class="conge" 
                                value="<?php echo $_smarty_tpl->tpl_vars['noJour']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
"
                                data-jour="<?php echo $_smarty_tpl->tpl_vars['noJour']->value;?>
"
                                data-periode="<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
"
                                <?php if ((isset($_smarty_tpl->tpl_vars['listeConges']->value['hebdo'][$_smarty_tpl->tpl_vars['noJour']->value][$_smarty_tpl->tpl_vars['noPeriode']->value]))) {?> checked<?php }?>>
                                <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['permanence']->value['debut'];?>
</span>
                        </label>
                    </div>
                </td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

</div>

<div class="col-xs-12 col-md-6">

    <h3><button type="button" class="btn btn-info btn-sm btn-prevConge"><i class="fa fa-arrow-left"></i></button> 
        Jours fériés ou de fermeture extraordinaire (<span id="moisConge"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</span>) 
        <button type="button" class="btn btn-info btn-sm btn-nextConge"><i class="fa fa-arrow-right"></i></button>
    </h3>

    <div id="tableauFeries">

        <?php $_smarty_tpl->_subTemplateRender('file:inc/tableauFeries.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>

</div>

<button type="button" class="btn btn-danger btn-block" id="btn-saveDatesConge">Enregistrer</button>

</form>


<?php echo '<script'; ?>
>

    $(document).ready(function(){

        $('body').on('focus','.datepicker', function(){
            $(this).datepicker({
                format: 'dd/mm/yyyy',
                clearBtn: true,
                language: 'fr',
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
                changeMonth: false,
                startDate: new Date(<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['month']->value-1;?>
,1),
                endDate: new Date(<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['month']->value;?>
, 0),
                clearBtn: false,
                showTodayButton: true
            });
        });
    
    })

<?php echo '</script'; ?>
><?php }
}
