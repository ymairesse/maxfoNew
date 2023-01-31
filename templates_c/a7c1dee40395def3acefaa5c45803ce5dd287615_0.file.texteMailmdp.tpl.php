<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-20 23:23:52
  from '/home/sio/www/mdmoxfam/templates/texteMailmdp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637aa8f8724822_36834800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c1dee40395def3acefaa5c45803ce5dd287615' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/texteMailmdp.tpl',
      1 => 1664085144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637aa8f8724822_36834800 (Smarty_Internal_Template $_smarty_tpl) {
?><p>Chère/cher <?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>
,</p>

<p>Ce courriel vous est adressé par le système automatique d'envoi de mails de la plate-forme de gestion des bénévoles Oxfam de Boitsfort.</p>
<p>Ce <?php echo $_smarty_tpl->tpl_vars['jour']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 à <?php echo $_smarty_tpl->tpl_vars['heure']->value;?>
, quelqu'un (sans doute vous) à l'adresse IP <?php echo $_smarty_tpl->tpl_vars['identiteReseau']->value['ip'];?>
 (<?php echo $_smarty_tpl->tpl_vars['identiteReseau']->value['hostname'];?>
) a demandé le changement de mot passe pour l'utilisateur
    <strong><?php echo $_smarty_tpl->tpl_vars['identite']->value['acronyme'];?>
</strong>.</p>
<p>Si vous n'êtes pas à l'origine de cette demande ou si vous n'avez rien demandé, négligez simplement ce mail.</p>
<p>Si vous souhaitez, par contre, réellement pouvoir changer votre mot de passe, cliquez sur le lien suivant (ou recopiez la ligne dans la barre d'adresse de votre navigateur).</p>
<a href="<?php echo $_smarty_tpl->tpl_vars['BASEDIR']->value;?>
index.php?action=renewPasswd&amp;acronyme=<?php echo $_smarty_tpl->tpl_vars['identite']->value['acronyme'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BASEDIR']->value;?>
index.php?action=renewPasswd&amp;acronyme=<?php echo $_smarty_tpl->tpl_vars['identite']->value['acronyme'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</a>
<p>Attention: ce lien ne fonctionnera que pendant 48h à dater du moment précis de la demande, soit le moment d'envoi du présent mail. Si vous n'avez pas changé le mot de passe dans ce délai, il faudra faire une nouvelle demande.</p>
<?php }
}
