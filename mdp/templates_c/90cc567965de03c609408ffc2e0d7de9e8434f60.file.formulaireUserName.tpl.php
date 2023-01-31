<?php /* Smarty version Smarty-3.1.13, created on 2019-04-22 23:02:55
         compiled from "./templates/formulaireUserName.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2652028715cbe2bffb03862-02601257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90cc567965de03c609408ffc2e0d7de9e8434f60' => 
    array (
      0 => './templates/formulaireUserName.tpl',
      1 => 1439656067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2652028715cbe2bffb03862-02601257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cbe2bffb0c3f1_40674042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbe2bffb0c3f1_40674042')) {function content_5cbe2bffb0c3f1_40674042($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">
        <h4 class="panel-title">Nom d'utilisateur</h4>
    </div>

    <div class="panel-body">

        <div class="col-md-3 col-sm-6">

            <p>Veuillez fournir votre nom d'utilisateur.</p>

            <form name="user" id="user" method="POST" action="index.php" autocomplete="off" role="form" class="form-vertical">

                <div class="input-group">
                    <label for="userName" class="sr-only">Nom d'utilisateur</label>
                    <input type="text" name="userName" id="userName" value="" placeholder="Nom d'utilisateur" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

            </form>

        </div>

        <div class="col-md-5 col-sm-6">

            <p>Nous n'avons aucun moyen de connaître votre mot de passe. Il est donc impossible de vous le rappeler.</p>
            <p>Par contre, nous pouvons vous transmettre par mail le lien vers une page sur laquelle vous pourrez changer de mot de passe.</p>
            <p>Le message contenant le lien sera envoyé sur votre adresse mail professionnelle; en principe, il s'agit de votre adresse liée à l'école, celle qui figure dans votre "profil".</p>
            <p>Le lien que vous recevrez vous permettra de changer de mot de passe dans un délai de 48h à dater du moment où vous faites la demande. Au-delà, il faudra que vous fassiez une nouvelle demande.</p>

        </div>

        <div class="col-md-2 col-sm-12 img-responsive">

            <img src="images/Password.png" alt="passwd">

        </div>

    </div>

</div>

<script type="text/javascript">

$(document).ready(function(){

    $("#user").validate();

})


</script>
<?php }} ?>