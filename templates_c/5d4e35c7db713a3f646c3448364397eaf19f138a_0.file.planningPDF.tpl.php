<?php
/* Smarty version 3.1.34-dev-7, created on 2022-10-29 20:15:00
  from '/home/sio/www/mdmoxfam/templates/planningPDF.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_635d6da4edbef6_26975553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d4e35c7db713a3f646c3448364397eaf19f138a' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/planningPDF.tpl',
      1 => 1667067211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635d6da4edbef6_26975553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sio/www/mdmoxfam/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<style type="text/css">

table {
    border-collapse: collapse;
 }
th, td {
    border: 2px solid #555;
 }

 th {
    font-weight: bold;
    padding: 10px; 
 }

.benevole {
    margin: 0em;
    padding: 0;
}

.conge {
    background-color: #ccc;
}

.me {
    // background-color: red;
}

p.benevole {
    padding: 5px 10px;
    margin: 0;
    font-size: 10pt;
}

h1 {
    text-align:center;
}

p.caisse {
    font-size: 16pt;
    font-weight: bold;
    color: red;
    text-align: center;
}

p.encadre {
    text-decoration: underline;
    text-decoration-style: double;
}

.selected {
    font-weight: bold;
    font-size: 12pt;
    text-decoration: underline overline
}

#logo {
    width: 150px;
    float: left;
}

.check {
    height: 12px;
}

</style>

<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="20mm">

<img src="../images/oxfam.png" id="logo">
<h1>Planning <?php echo $_smarty_tpl->tpl_vars['monthName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</h1>

<p>Version du <strong><?php echo $_smarty_tpl->tpl_vars['ceJour']->value;?>
</strong> généré par <strong><?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>
</strong> </p>

<p class="caisse">Prévoir d’arriver à 9h45 pour compter la caisse<br>porte fermée à clé</p>

<table>

    <tr>
        <th>&nbsp;</th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'periode', false, 'noPeriode');
$_smarty_tpl->tpl_vars['periode']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noPeriode']->value => $_smarty_tpl->tpl_vars['periode']->value) {
$_smarty_tpl->tpl_vars['periode']->do_else = false;
?>
            <th data-periode="<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
" style="text-align:center;">
            <?php echo $_smarty_tpl->tpl_vars['periode']->value['debut'];?>
 - <?php echo $_smarty_tpl->tpl_vars['periode']->value['fin'];?>

            </th>
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
    <tr>

        <td style="font-size:12pt; text-align:center;">

            <span><?php echo $_smarty_tpl->tpl_vars['dataJournee']->value['day']['fr'];?>
</span>
        
        </td>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataJournee']->value['periodes'], 'dateHeure', false, 'periode');
$_smarty_tpl->tpl_vars['dateHeure']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['periode']->value => $_smarty_tpl->tpl_vars['dateHeure']->value) {
$_smarty_tpl->tpl_vars['dateHeure']->do_else = false;
?>
            
            <?php $_smarty_tpl->_assignInScope('benevoles', array_keys($_smarty_tpl->tpl_vars['dataJournee']->value['periodes'][$_smarty_tpl->tpl_vars['periode']->value]));?>
            
            <td class="case <?php if (((isset($_smarty_tpl->tpl_vars['listeConges']->value['feries'][$_smarty_tpl->tpl_vars['laDate']->value][$_smarty_tpl->tpl_vars['periode']->value]))) || ((isset($_smarty_tpl->tpl_vars['listeConges']->value['hebdo'][$_smarty_tpl->tpl_vars['numJourSemaine']->value][$_smarty_tpl->tpl_vars['periode']->value])))) {?>conge<?php }?>">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['benevoles']->value, 'unAcronyme');
$_smarty_tpl->tpl_vars['unAcronyme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unAcronyme']->value) {
$_smarty_tpl->tpl_vars['unAcronyme']->do_else = false;
?>

                        <?php $_smarty_tpl->_assignInScope('benevole', $_smarty_tpl->tpl_vars['usersList']->value[$_smarty_tpl->tpl_vars['unAcronyme']->value]);?>

                        <p class="benevole<?php if ($_smarty_tpl->tpl_vars['unAcronyme']->value == $_smarty_tpl->tpl_vars['acronyme']->value) {?> me <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['calendar']->value[$_smarty_tpl->tpl_vars['laDate']->value]['periodes'][$_smarty_tpl->tpl_vars['periode']->value][$_smarty_tpl->tpl_vars['unAcronyme']->value]['confirme'] == 1) {?> selected <?php } else { ?> unselected <?php }?>">
                            <?php echo $_smarty_tpl->tpl_vars['benevole']->value['prenom'];?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['benevole']->value['nom'],2,'.');?>
 
                            <?php if ($_smarty_tpl->tpl_vars['calendar']->value[$_smarty_tpl->tpl_vars['laDate']->value]['periodes'][$_smarty_tpl->tpl_vars['periode']->value][$_smarty_tpl->tpl_vars['unAcronyme']->value]['confirme'] == 1) {?>
                                <img class="check" src='../images/check.png' alt='check'>
                            <?php }?>
                        </p>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
            </td>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tr>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <tr>
        <th style="width:10%">&nbsp;</th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePeriodes']->value, 'periode', false, 'noPeriode');
$_smarty_tpl->tpl_vars['periode']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noPeriode']->value => $_smarty_tpl->tpl_vars['periode']->value) {
$_smarty_tpl->tpl_vars['periode']->do_else = false;
?>
            <th data-periode="<?php echo $_smarty_tpl->tpl_vars['noPeriode']->value;?>
" style="width:30%; text-align:center;">
            <?php echo $_smarty_tpl->tpl_vars['periode']->value['debut'];?>
 - <?php echo $_smarty_tpl->tpl_vars['periode']->value['fin'];?>

            </th>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>

</table>

    <page_footer> 
         Prévoir d’arriver à 9 h 45 pour compter la caisse porte fermée à clé
    </page_footer> 

</page>
<?php }
}
