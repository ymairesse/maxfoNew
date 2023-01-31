<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 14:48:44
  from '/home/yves/www/mdm/templates/inc/tableGestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d91c3c6b85a1_11152102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65627d088ad8588b4a8b0d8b2f10d2a9f51ca19' => 
    array (
      0 => '/home/yves/www/mdm/templates/inc/tableGestion.tpl',
      1 => 1666551287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d91c3c6b85a1_11152102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/yves/www/mdm/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!-- -------------------- Navigation temporelle -------------------- -->

    <div style="text-align: center">
        <h2 id="encadre">
            <button type="button" 
                class="btn btn-primary pull-left" 
                id="btn-prevGestMonth"
                title="Mois précédent">
                <i class="fa fa-arrow-left"></i>
                <span class="hidden-xs hidden-sm"> Mois précédent</span>
            </button>
            <span id="navMonthName"><?php echo $_smarty_tpl->tpl_vars['monthName']->value;?>
</span>
            <span id="navYear" class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</span>
            <button type="button" 
                class="btn btn-primary pull-right"
                id="btn-nextGestMonth"
                title="Mois suivant">
                <span class="hidden-sm hidden-xs">Mois suivant </span>
                <i class="fa fa-arrow-right"></i>
            </button> 
        </h2>
    </div>

<!-- --------------------------------------------------------------------------------- -->

<table class="table table-condensed" id="calendar-table">

    <tr>
        <th style="width:10%">
            &nbsp;
        </th>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'periode', false, 'noPeriode');
$_smarty_tpl->tpl_vars['periode']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noPeriode']->value => $_smarty_tpl->tpl_vars['periode']->value) {
$_smarty_tpl->tpl_vars['periode']->do_else = false;
?>
            <th data-periode="<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
" style="width:30%"><?php echo $_smarty_tpl->tpl_vars['periode']->value['debut'];?>
<span class="hidden-xs"> -<?php echo $_smarty_tpl->tpl_vars['periode']->value['fin'];?>
</span></th>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calendar']->value, 'dataJournee', false, 'laDate');
$_smarty_tpl->tpl_vars['dataJournee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['laDate']->value => $_smarty_tpl->tpl_vars['dataJournee']->value) {
$_smarty_tpl->tpl_vars['dataJournee']->do_else = false;
?>

        <?php $_smarty_tpl->_assignInScope('numJourSemaine', $_smarty_tpl->tpl_vars['dataJournee']->value['day']['dayOfWeek']);?>
        <tr data-dayOfWeek="<?php echo $_smarty_tpl->tpl_vars['numJourSemaine']->value;?>
" 
            data-dayOfMonth="<?php echo $_smarty_tpl->tpl_vars['dataJournee']->value['day']['dayOfMonth'];?>
"
            data-date="<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
"
            <?php if ($_smarty_tpl->tpl_vars['numJourSemaine']->value == 1) {?>class="beginOfWeek"<?php }?>>

            <td style="padding:0">

                    <div class="postit"
                        class="btn btn-default btn-xs btn-block" 
                        data-dayofweek = "<?php echo $_smarty_tpl->tpl_vars['dataJournee']->value['day']['dayOfWeek'];?>
">
                            <?php echo substr($_smarty_tpl->tpl_vars['dataJournee']->value['day']['fr'],0,2);?>
<br><span style="font-size:1.2em"><?php echo substr($_smarty_tpl->tpl_vars['dataJournee']->value['day']['fr'],4);?>
</span>
                    </div>
                    <div class="btn-group-vertical btn-block">
                    <a href="#" 
                        class="btn btn-primary btn-xs btn-block btn-confirm" 
                        data-toggle="tooltip" 
                        data-container="body"
                        data-placement="right"
                        data-nombre="1"
                        title="Confirmer le 1er">
                        1
                    </a>
                    <a href="#" 
                        class="btn btn-warning btn-xs btn-block btn-confirm" 
                        data-toggle="tooltip" 
                        data-container="body"
                        data-placement="right"
                        data-nombre="2" 
                        title="Confirmer les deux 1ers">
                        2
                    </a>
                    <a href="#" 
                        class="btn btn-info btn-xs btn-block btn-confirm" 
                        data-toggle="tooltip" 
                        data-container="body"
                        data-placement="right"
                        data-nombre="3" 
                        title="Confirmer les trois 1ers">
                        3
                    </a>
                </div>

            </td>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataJournee']->value['periodes'], 'dateHeure', false, 'periode');
$_smarty_tpl->tpl_vars['dateHeure']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['periode']->value => $_smarty_tpl->tpl_vars['dateHeure']->value) {
$_smarty_tpl->tpl_vars['dateHeure']->do_else = false;
?>
                <!-- liste des acronymes pour cette période -->
                <?php $_smarty_tpl->_assignInScope('benevoles', array_keys($_smarty_tpl->tpl_vars['dataJournee']->value['periodes'][$_smarty_tpl->tpl_vars['periode']->value]));?>
    
                <td data-periode="<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
" 
                    data-date="<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
" 
                    class="case <?php if (((isset($_smarty_tpl->tpl_vars['listeConges']->value['feries'][$_smarty_tpl->tpl_vars['laDate']->value][$_smarty_tpl->tpl_vars['periode']->value]))) || ((isset($_smarty_tpl->tpl_vars['listeConges']->value['hebdo'][$_smarty_tpl->tpl_vars['numJourSemaine']->value][$_smarty_tpl->tpl_vars['periode']->value])))) {?>conge<?php }?>"
                    <?php if (((isset($_smarty_tpl->tpl_vars['listeConges']->value['feries'][$_smarty_tpl->tpl_vars['laDate']->value][$_smarty_tpl->tpl_vars['periode']->value]))) || ((isset($_smarty_tpl->tpl_vars['listeConges']->value['hebdo'][$_smarty_tpl->tpl_vars['numJourSemaine']->value][$_smarty_tpl->tpl_vars['periode']->value])))) {?>
                    title="Congé ou fermeture"
                    <?php }?>>

                    <div style="padding: 1em">

                        <input  
                            type="checkbox" name="inscriptions[]" class="inscription" hidden
                            <?php if (((isset($_smarty_tpl->tpl_vars['listeConges']->value['feries'][$_smarty_tpl->tpl_vars['laDate']->value][$_smarty_tpl->tpl_vars['periode']->value]))) || ((isset($_smarty_tpl->tpl_vars['listeConges']->value['hebdo'][$_smarty_tpl->tpl_vars['numJourSemaine']->value][$_smarty_tpl->tpl_vars['periode']->value])))) {?>disabled<?php }?>
                            value = "<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
"
                            data-date = "<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
"
                            data-dayofweek = "<?php echo $_smarty_tpl->tpl_vars['dataJournee']->value['day']['dayOfWeek'];?>
"
                            data-periode = "<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
">

                            <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['listePeriodes']->value[$_smarty_tpl->tpl_vars['periode']->value]['debut'];?>
</span>

                            <?php if (!(((isset($_smarty_tpl->tpl_vars['listeConges']->value['feries'][$_smarty_tpl->tpl_vars['laDate']->value][$_smarty_tpl->tpl_vars['periode']->value]))) || ((isset($_smarty_tpl->tpl_vars['listeConges']->value['hebdo'][$_smarty_tpl->tpl_vars['numJourSemaine']->value][$_smarty_tpl->tpl_vars['periode']->value]))))) {?>
                                <button type="button" 
                                    class="btn btn-xs btn-primary btn-inscription pull-right"
                                    data-placement="left" 
                                    data-toggle="tooltip" 
                                    title="Inscription ou désinscription"
                                    data-date="<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
"
                                    data-periode="<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
">
                                    <span class="visible hidden-xs desinscription hidden">Désinscription</span>
                                    <span class="visible hidden-xs inscription">Inscription</span>

                                    <span class="visible-xs hidden-sm"><i class="fa fa-calendar-check-o"></i></span>
                                </button>
                            <?php }?>

                    </div>

                    <div class="listeBenevoles" data-date="<?php echo $_smarty_tpl->tpl_vars['laDate']->value;?>
" data-periode="<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['benevoles']->value, 'unAcronyme');
$_smarty_tpl->tpl_vars['unAcronyme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unAcronyme']->value) {
$_smarty_tpl->tpl_vars['unAcronyme']->do_else = false;
?>

                            <?php $_smarty_tpl->_assignInScope('benevole', $_smarty_tpl->tpl_vars['usersList']->value[$_smarty_tpl->tpl_vars['unAcronyme']->value]);?>

                            <div class="btn-group btn-group-justified doubleBtn">

                                <div class="btn-group" style="width:85%">
                                    <button type="button" 
                                        class="btn btn-primary btn-block btn-benevole <?php if ($_smarty_tpl->tpl_vars['calendar']->value[$_smarty_tpl->tpl_vars['laDate']->value]['periodes'][$_smarty_tpl->tpl_vars['periode']->value][$_smarty_tpl->tpl_vars['unAcronyme']->value]['confirme'] == 1) {?>confirmed<?php }?>" 
                                        data-toggle="popover"
                                        data-html="true"
                                        data-title="Paramètres de contact"
                                        data-content="<?php echo $_smarty_tpl->tpl_vars['benevole']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['benevole']->value['nom'];?>
<br>
                                            <i class='fa fa-send'></i> <a href='mailto:<?php echo $_smarty_tpl->tpl_vars['benevole']->value['mail'];?>
'><?php echo $_smarty_tpl->tpl_vars['benevole']->value['mail'];?>
</a><br>
                                            <i class='fa fa-phone'></i> <?php echo $_smarty_tpl->tpl_vars['benevole']->value['telephone'];?>
"
                                        data-container="body"
                                        data-acronyme="<?php echo $_smarty_tpl->tpl_vars['benevole']->value['acronyme'];?>
"
                                        data-confirme="false"
                                        data-placement="top">
                                            <span class="visible-xs hidden-md hidden-lg">
                                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['benevole']->value['prenom'],10,"...",true);?>
 
                                                    <span class="check"><?php if ($_smarty_tpl->tpl_vars['calendar']->value[$_smarty_tpl->tpl_vars['laDate']->value]['periodes'][$_smarty_tpl->tpl_vars['periode']->value][$_smarty_tpl->tpl_vars['unAcronyme']->value]['confirme'] == 1) {?> <i class="fa fa-check"></i><?php }?></span>
                                                <span class="disk" hidden>(<i class="fa fa-floppy-o"></i>)</span>
                                            </span>
                                            <span class="visible-sm visible-md visible-lg">
                                                <?php echo $_smarty_tpl->tpl_vars['benevole']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['benevole']->value['nom'];?>
 
                                                    <span class="check"><?php if ($_smarty_tpl->tpl_vars['calendar']->value[$_smarty_tpl->tpl_vars['laDate']->value]['periodes'][$_smarty_tpl->tpl_vars['periode']->value][$_smarty_tpl->tpl_vars['unAcronyme']->value]['confirme'] == 1) {?><i class="fa fa-check"></i><?php }?></span>
                                                <span class="disk" hidden>(<i class="fa fa-floppy-o"></i>)</span>
                                            </span>
                                    </button>
                                </div>

                                <div class="btn-group" style="width:15%">
                                    <button type="button" 
                                        class="btn btn-success btn-confirmePermanence"
                                        data-acronyme="<?php echo $_smarty_tpl->tpl_vars['unAcronyme']->value;?>
">
                                            <i class="fa fa-check"></i>
                                    </button>
                                </div>

                            </div>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>

                </td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table><?php }
}
