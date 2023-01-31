<?php
/* Smarty version 3.1.34-dev-7, created on 2022-10-27 20:22:05
  from '/home/sio/www/mdmoxfam/templates/modal/modalRenewPwd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_635acc4d5f00c9_49175982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3024d2e681eabc3b584a23ee49b601996914c0' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/modal/modalRenewPwd.tpl',
      1 => 1665472364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635acc4d5f00c9_49175982 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalRenewPwd" tabindex="-1" role="dialog" aria-labelledby="modalChangePwdTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="modalChangePwdTitle">Changement du mot de passe</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form id="formRenewPasswd">

            <div class="form-group">
              <label for="passwd">Veuillez indiquer votre identifiant (6 ou 7 signes) ou l'adresse mail de votre profil</label>
              <input type="text" class="form-control" id="identifiantMDP" name="identifiantMDP" minlength="6" maxlength="60"
                placeholder="Votre identifiant" value="">
            </div>
          
          <div class="clearfix"></div>

        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="btn-modalRenewPwd">Envoyer la demande</button>
      </div>
    </div>
  </div>
</div>
<?php }
}
