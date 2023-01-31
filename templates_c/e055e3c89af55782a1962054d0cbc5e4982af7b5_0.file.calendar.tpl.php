<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 14:33:50
  from '/home/yves/www/mdm/templates/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d918bee47811_48392948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e055e3c89af55782a1962054d0cbc5e4982af7b5' => 
    array (
      0 => '/home/yves/www/mdm/templates/calendar.tpl',
      1 => 1670259396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/tableCalendar.tpl' => 1,
  ),
),false)) {
function content_63d918bee47811_48392948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/yves/www/mdm/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="clearfix"></div>

<!-- -------------------- Enregistrement et reset -------------------- -->

<div class="btn-group">

    <button type="button" class="btn btn-danger btn-sm" id="btn-saveCalendar">
        <i class="fa fa-floppy-o"></i><span class="hidden-xs"> N'oubliez pas d'Enregistrer</span>
    </button>

    <button type="button" class="btn btn-default btn-sm" id="reset">
        <i class="fa fa-recycle"></i><span class="hidden-xs"> Annuler les modifications</span>
    </button>

    <?php if ($_smarty_tpl->tpl_vars['freezeStatus']->value == 1) {?> <button type="button" data-toggle="tooltip" title="Attention, désinscriptions plus possibles" class="btn btn-sm btn-warning"> <i class="fa fa-anchor"></i></button><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['freezeStatus']->value == 2) {?> <button type="button"  data-toggle="tooltip" title="Attention, plus d'inscrirptions possibles" class="btn btn-sm btn-danger"> <i class="fa fa-anchor"></i></button><?php }?>

</div>
<!-- --------------------------------------------------------------------------------- -->

<!-- bouton modèle pour ajout dans la grille -->
<div id="bouton" hidden>
    <button type="button" 
        class="btn btn-pink candidat btn-block"
        data-acronyme="<?php echo $_smarty_tpl->tpl_vars['identite']->value['acronyme'];?>
"
        data-toggle="tooltip"
        title="N'oubliez pas d'enregistrer">
        <span class="visible-xs hidden-md hidden-lg"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['identite']->value['prenom'],10,"...",true);?>
 <span class="disk">(<i class="fa fa-floppy-o"></i>)</span></span>
        <span class="visible-sm visible-md visible-lg"><?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>
 <span class="disk">(<i class="fa fa-floppy-o"></i>)</span></span>
    </button>
</div>

<!-- ---------------- Grille et formulaire d'inscription ---------------- -->

<div style="max-height:55em; overflow: auto">
	
    <form id="formInscription" style="padding: 0 !important">
    
        <?php $_smarty_tpl->_subTemplateRender("file:inc/tableCalendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </form>

</div>

<!-- --------------------------------------------------------------------------------- -->

<?php echo '<script'; ?>
>

    $(document).ready(function(){

    $('[data-toggle="popover"]').on('click',function(e){
        e.preventDefault();
    }).popover();

    $('[data-toggle="tooltip"]').tooltip();
    
    })

    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });

<?php echo '</script'; ?>
>
<?php }
}
