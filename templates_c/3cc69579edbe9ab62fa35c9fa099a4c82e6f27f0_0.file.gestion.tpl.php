<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-01 18:19:03
  from '/home/sio/www/mdmoxfam/templates/gestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63615507ddb989_35010546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc69579edbe9ab62fa35c9fa099a4c82e6f27f0' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/gestion.tpl',
      1 => 1667317971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/tableGestion.tpl' => 1,
    'file:inc/usersList.tpl' => 1,
  ),
),false)) {
function content_63615507ddb989_35010546 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">

    <div class="col-md-9 col-sm-12">

        <div class="clearfix"></div>

        <!-- -------------------- Enregistrement et reset -------------------- -->

        <div class="btn-group">

            <button type="button" class="btn btn-danger btn-sm" id="btn-saveGestion">
                <i class="fa fa-graduation-cap"></i><span class="hidden-xs"> N'oubliez pas d'Enregistrer</span>
            </button>
            <button type="button" class="btn btn-default btn-sm" id="resetGestion">
                <i class="fa fa-recycle"></i><span class="hidden-xs"> Annuler les modifications</span>
            </button>

        </div>

        <!-- --------------------------------------------------------------------------------- -->

        <!-- bouton modèle pour ajout dans la grille -->
        <div id="bouton" hidden>
            <button type="button" 
                class="btn btn-pink candidat btn-block"
                data-acronyme = ""
                data-toggle="tooltip"
                title="N'oubliez pas d'enregistrer">
                <span class="visible-xs hidden-md hidden-lg">
                    <span class="prenom"></span>
                    <span class="disk">(<i class="fa fa-floppy-o"></i>)</span>
                </span>
                <span class="visible-sm visible-md visible-lg">
                    <span class="nom"></span> 
                    <span class="disk">(<i class="fa fa-floppy-o"></i>)</span>
                </span>
            </button>
        </div>
        <!-- bouton modèle pour ajout dans la grille -->

        <div style="max-height:55em; overflow: auto">

            <!------------------------------------------------------------------------------------->

            <form id="formGestion" style="padding: 0 !important">
            
            <?php $_smarty_tpl->_subTemplateRender("file:inc/tableGestion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </form>

            <div class="clearfix"></div>

        </div>  <!-- form -->

    </div>

    <div class="col-md-3 col-sm-12">

        <?php $_smarty_tpl->_subTemplateRender('file:inc/usersList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div> <!-- users list -->

</div> <!-- row -->

<?php echo '<script'; ?>
>

    $(document).ready(function(){

        $('[data-toggle="tooltip"]').tooltip();
    
    })

<?php echo '</script'; ?>
>
<?php }
}
