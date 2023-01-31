<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 14:48:46
  from '/home/yves/www/mdm/templates/modal/modalProfilAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d91c3e86f4d5_80377265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ebd76724df82265056d98bfa5dfdcb7ea9fc577' => 
    array (
      0 => '/home/yves/www/mdm/templates/modal/modalProfilAdmin.tpl',
      1 => 1666366033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d91c3e86f4d5_80377265 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalProfilAdmin" tabindex="-1" role="dialog" aria-labelledby="modalProfilAdminTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalProfilAdminTitle">Modification du profil des bénévoles</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form id="formEditionProfil" class="form" autocomplete="off">

            <div id="errorTxt"></div>

               <div class="col-xs-12 col-md-6">

                    <div class="form-group">
                        <label for="nom">Nom de famille *</label>
                        <input type="text" 
                            class="form-control nomPrenom" 
                            id="nom" 
                            name="nom" 
                            maxlength="40" 
                            placeholder="Votre nom de famille"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>
">
                        <span class="help-block">Nom de famille</span>
                    </div>
                
                </div>

                <div class="col-xs-12 col-md-6">

                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" 
                            class="form-control nomPrenom" 
                            id="prenom" 
                            name="prenom" 
                            maxlength="40" 
                            placeholder="Votre prénom"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
">
                        <span class="help-block">Prénom</span>
                    </div>

                </div>

                <div class="col-md-3 col-xs-12">

                    <div class="form-group">
                        <label for="acronyme">Pseudo</label>
                        <input type="text" 
                            class="form-control" 
                            id="acro" 
                            placeholder="Nom d'utilisateur"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['acronyme'];?>
"
                            name="acronyme"
                            readonly>
                    </div>

                </div>


                <div class="col-md-6 col-xs-12">

                    <div class="form-group">
                        <label for="mail">Adresse mail *</label>
                        <input type="email" 
                            class="form-control" 
                            id="mail" 
                            name="mail" 
                            maxlength="60" 
                            placeholder="Votre adresse mail"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['mail'];?>
">
                    </div>

                </div>

                <div class="col-md-3 col-xs-12">

                    <div class="form-group">
                        <label for="statut">Statut</label>
                          <select class="form-control" id="statut" name="statut">
                            <option <?php if ($_smarty_tpl->tpl_vars['identite']->value['statut'] == 'admin') {?>selected<?php }?>>admin</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['identite']->value['statut'] == 'user') {?>selected<?php }?>>user</option>
                        </select>
                    </div>

                </div>

                <div class="col-md-6 col-xs-12">

                    <div class="form-group">
                        <label for="passwd">Mot de passe souhaité *</label>
                        <div class="input-group">
                        <input type="password" 
                            class="form-control pwd" 
                            id="passwd" 
                            name="passwd" 
                            minlength="6" 
                            maxlength="20" 
                            placeholder="Ne rien indiquer si pas de changement"
                            value=""
                            autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn btn-primary voir" type="button"><i class="fa fa-eye"></i></button>
                            </span>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-xs-12">

                    <div class="form-group">
                        <label for="passwd">Mot de passe souhaité *</label>
                        <div class="input-group">
                        <input type="password" 
                            class="form-control pwd" 
                            id="passwd2" 
                            name="passwd2" 
                            minlength="6" 
                            maxlength="20" 
                            placeholder="Ne rien indiquer si pas de changement"
                            value=""
                            autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn btn-primary voir" type="button"><i class="fa fa-eye"></i></button>
                            </span>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-md-8">

                    <div class="form-group">
                        <label for="adresse">Adresse postale (optionnel)</label>
                        <input type="text" 
                            class="form-control" 
                            id="adresse" 
                            name="adresse" 
                            maxlength="40" 
                            placeholder="Rue et numéro"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['adresse'];?>
">
                    </div>

                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label for="cpostal">Code postal (optionnel)</label>
                        <input type="text"
                            class="form-control" 
                            id="cpostal" 
                            name="cpostal" 
                            maxlength="6"
                            placeholder="Code Postal"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['cpostal'];?>
">
                    </div>
                </div>

                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <label for="commune">Commune de résidence (optionnel)</label>
                        <input type="text" 
                            class="form-control" 
                            id="commune" 
                            name="commune" 
                            maxlength="40" 
                            placeholder="Commune"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['commune'];?>
">
                    </div>
                </div>


                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label for="adresse">Téléphone (optionnel)</label>
                        <input type="tel" 
                            class="form-control" 
                            id="telephone" 
                            name="telephone" 
                            maxlength="40" 
                            placeholder="Numéro de téléphone"
                            value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['telephone'];?>
">
                    </div>
                </div> 
                
            <div class="clearfix micro">Les champs marqués d'une * sont obligatoires</div>

        </form> 

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" id="btn-delBenevole"><i class="fa fa-warning"></i> Suppression du profil</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="btn-saveProfilAdmin">Enregistrer</button>
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

        $('#formEditionProfil').validate({
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
                    maxlength: 20,
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
