<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-26 16:07:00
  from '/home/yves/www/mdm/mdp/templates/formulaireUserName.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6308d384860ee6_71889581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10772a17922cd49f433f40d0ffd2cb1963b979ae' => 
    array (
      0 => '/home/yves/www/mdm/mdp/templates/formulaireUserName.tpl',
      1 => 1660926818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6308d384860ee6_71889581 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">

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

<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function(){

    $("#user").validate();

})


<?php echo '</script'; ?>
>
<?php }
}
