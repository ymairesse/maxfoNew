<?php
/* Smarty version 3.1.34-dev-7, created on 2022-10-25 10:39:08
  from '/home/sio/www/mdmoxfam/templates/inc/ulUsersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6357a0acb03181_15561933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae50b67fe74828ce805386caa0a4c8b548437aa' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/inc/ulUsersList.tpl',
      1 => 1666083621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6357a0acb03181_15561933 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="list-unstyled" id="usersList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usersList']->value, 'data', false, 'acronyme');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acronyme']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
        <li>
            <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-warning btn-editProfile" 
                    data-toggle="tooltip" 
                    data-container="body"
                    data-placement="left"
                    data-acronyme="<?php echo $_smarty_tpl->tpl_vars['data']->value['acronyme'];?>
"
                    style="width:20%;" 
                    title="Modifier le profil">
                    <i class="fa fa-user"></i>
                </a>

                <a href="#"class="btn btn-success btn-block btn-user"
                    data-statut="<?php echo $_smarty_tpl->tpl_vars['data']->value['statut'];?>
"
                    data-acronyme="<?php echo $_smarty_tpl->tpl_vars['data']->value['acronyme'];?>
"
                    data-nom="<?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
"
                    data-prenom="<?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
"
                    style="width:80%">
                    <?php if ($_smarty_tpl->tpl_vars['triUsers']->value == 'alphaNom') {?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
</strong>
                    <?php }?>
                </a>

            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
