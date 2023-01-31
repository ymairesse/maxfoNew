<?php /* Smarty version Smarty-3.1.13, created on 2019-04-22 23:03:00
         compiled from "./templates/waitMail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7368091875cbe2c04c05ae2-30972169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d817ba03f339227487c5bb05f043fb817c98b84' => 
    array (
      0 => './templates/waitMail.tpl',
      1 => 1439655134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7368091875cbe2c04c05ae2-30972169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cbe2c04c091a0_72239826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbe2c04c091a0_72239826')) {function content_5cbe2c04c091a0_72239826($_smarty_tpl) {?><div class="panel panel-warning">

    <div class="panel-body">

        <div class="col-md-8 col-md-8 col-sm-6">

            <p><img src="images/email.png" alt="mail" style="float:left">Super! Nous progressons. Un mail vient d'être envoyé à votre adresse <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['identite']->value['mail'];?>
"><?php echo $_smarty_tpl->tpl_vars['identite']->value['mail'];?>
</a> (est-ce bien votre adresse?).</p>
            <p>Ce courriel contiendra un lien qui vous permettra d'accéder à la page de changement de mot de passe.</p>
            <p>Si vous ne recevez pas ce mail, vérifiez parmi vos "Indésirables".</p>
            <p><strong>Attention, ce lien ne fonctionnera que pendant 48h après le moment précis de la demande (maintenant). Passé ce délai, il vous faudra faire une nouvelle demande.</strong></p>

        </div>

        <div class="col-md-4 col-sm-6 img-responsive">
            <img src="images/Password.png" alt="password">
        </div>

    </div>

</div>
<?php }} ?>