<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 14:48:44
  from '/home/yves/www/mdm/templates/inc/usersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d91c3c6c3171_95093866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c34e765da10c2cfb423188156620c34fcb300c' => 
    array (
      0 => '/home/yves/www/mdm/templates/inc/usersList.tpl',
      1 => 1665761385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/ulUsersList.tpl' => 1,
  ),
),false)) {
function content_63d91c3c6c3171_95093866 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="max-height:45em; overflow: auto" class="row">

    <div class="panel panel-default">

        <div class="panel-heading">

        <h4>Liste des <?php echo count($_smarty_tpl->tpl_vars['usersList']->value);?>
 bénévoles</h4>

        </div>

        <div class="panel-body">

            <div class="btn-group btn-group-justified">
                <a href="javascript:void(0)" class="btn btn-info" id="btn-alphaNom"><i class="fa fa-sort-alpha-asc"></i> Par nom</a>
                <a href="javascript:void(0)" class="btn btn-warning" id="btn-alphaPrenom"><i class="fa fa-sort-alpha-asc"></i> Par prénom</a>
            </div>

            <div id="ulList">

                <?php $_smarty_tpl->_subTemplateRender("file:inc/ulUsersList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

        </div>

    </div>

</div>
<?php }
}
