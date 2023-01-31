<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 16:01:04
  from '/home/yves/www/mdm/templates/modal/modalFreezing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d92d3024ca89_13118811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63ec896822c21e703e3d724ed822e4eb84690687' => 
    array (
      0 => '/home/yves/www/mdm/templates/modal/modalFreezing.tpl',
      1 => 1667292686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d92d3024ca89_13118811 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalFreezing" tabindex="-1" role="dialog" aria-labelledby="modalFreezingTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalFreezingTitle">Permissions sur les périodes</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form id="formFreeze" class="form">

            <table class="table table-condensed">
                <tr>
                    <th>Date</th>
                    <th>Geler</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeMois']->value, 'dataMois', false, 'mois');
$_smarty_tpl->tpl_vars['dataMois']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mois']->value => $_smarty_tpl->tpl_vars['dataMois']->value) {
$_smarty_tpl->tpl_vars['dataMois']->do_else = false;
?>
                <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['dataMois']->value['monthName'];?>
 <?php echo $_smarty_tpl->tpl_vars['dataMois']->value['year'];?>
</th>
                <td>
                <label class="radio-inline">
                    <input type="radio" name="freeze_<?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
" value="0" checked>Libre
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="freeze_<?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
" value="1" <?php if ((isset($_smarty_tpl->tpl_vars['freezes']->value[$_smarty_tpl->tpl_vars['mois']->value])) && $_smarty_tpl->tpl_vars['freezes']->value[$_smarty_tpl->tpl_vars['mois']->value] == 1) {?> checked<?php }?>>Plus de désinscription
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="freeze_<?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
" value="2"<?php if ((isset($_smarty_tpl->tpl_vars['freezes']->value[$_smarty_tpl->tpl_vars['mois']->value])) && $_smarty_tpl->tpl_vars['freezes']->value[$_smarty_tpl->tpl_vars['mois']->value] == 2) {?> checked<?php }?>>Ni inscription ni désinscription
                    </label>
                </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </table>
        </form> 

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="btn-modalFreeze">Confirmer</button>
      </div>
    </div>
  </div>

<style type="text/css">

    .help-block, .error {
        display: inline;
    }

    .error {
        color: red;
        font-weight: normal;
    }

    #acro {
        background-color: pink;
        font-size: 14pt;
        color: red;
    }

</style>

<?php echo '<script'; ?>
>

    $(document).ready(function(){

        $('#formInscription').validate({
            rules: {
                nom: {
                    required: true,
                    minlength: 2
                },
                prenom: {
                    required: true,
                    minlength: 2
                },
                mail: {
                    required: true,
                    email: true
                },
                passwd: {
                    maxlength: 12,
                    minlength: 6
                },
                passwd2: {
                    minlength : 6,
                    equalTo : "#passwd"
                }
            }
        })

        $('.voir').click(function (){
            if ($('input.pwd').prop('type') == 'text')
                $('input.pwd').prop('type', 'password');
                else $('input.pwd').prop('type', 'text');
        })


    })

<?php echo '</script'; ?>
><?php }
}
