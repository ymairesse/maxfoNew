<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-20 23:26:41
  from '/home/sio/www/mdmoxfam/templates/renewPasswd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637aa9a1609492_76033954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6cea96c3430397ec00a896ccf1bb86a33f05590' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/renewPasswd.tpl',
      1 => 1665759446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637aa9a1609492_76033954 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

    <h2>Changement du mot de passe</h2>

    <form id="form-passwd" autocomplete="off">

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
                    placeholder="Le mot de passe que vous souhaitez utiliser"
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
                <input type="password" class="form-control pwd" id="passwd2" name="passwd2" minlength="6" maxlength="20" placeholder="Répétez le mot de passe que vous souhaitez utiliser">
                    <span class="input-group-btn">
                        <button class="btn btn-primary voir" type="button"><i class="fa fa-eye"></i></button>
                    </span>
                </div>
            </div>

        </div>

        <input type="hidden" name="acronyme" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['acronyme'];?>
">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">

        <button type="button" class="btn btn-primary pull-right" id="btn-renewPwd">Envoyer</button>

        <div class="clearfix"></div>

    </form>

</div>

<?php echo '<script'; ?>
>
    $(document).ready(function() {

        $('.voir').click(function (){
            if ($('input.pwd').prop('type') == 'text')
                $('input.pwd').prop('type', 'password');
                else $('input.pwd').prop('type', 'text');
        })

        $('#btn-renewPwd').click(function() {
            if ($('#form-passwd').valid()) {
                var formulaire = $('#form-passwd').serialize();
                $.post('inc/saveRenewPwd.inc.php', {
                    formulaire: formulaire
                }, function(resultat){
                    var message = '<br>Vous allez être redirigé·e vers la page d\'accueil';
                    bootbox.confirm({
                        title: 'Enregistrement',
                        message: resultat + message,
                        callback: function(result){
                         if (result === true) {
                            location.href = '<?php echo $_smarty_tpl->tpl_vars['BASEDIR']->value;?>
';
                        }
                        }
                    })
                })
            }
        })


    })
<?php echo '</script'; ?>
><?php }
}
