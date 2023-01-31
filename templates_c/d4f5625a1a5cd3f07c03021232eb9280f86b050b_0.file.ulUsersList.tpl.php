<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 14:48:44
  from '/home/yves/www/mdm/templates/inc/ulUsersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d91c3c6caba1_17395484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f5625a1a5cd3f07c03021232eb9280f86b050b' => 
    array (
      0 => '/home/yves/www/mdm/templates/inc/ulUsersList.tpl',
      1 => 1666083621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d91c3c6caba1_17395484 (Smarty_Internal_Template $_smarty_tpl) {
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
