<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-26 16:07:00
  from '/home/yves/www/mdm/mdp/templates/steps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6308d38485f4f7_23716622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff9d2ce86a6689838037f6bd2d7d96ee22d76d9' => 
    array (
      0 => '/home/yves/www/mdm/mdp/templates/steps.tpl',
      1 => 1660926818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6308d38485f4f7_23716622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 id="titre" data-etape="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['etape']->value)===null||$tmp==='' ? 1 : $tmp);?>
">Changement du mot de passe <?php echo $_smarty_tpl->tpl_vars['etape']->value;?>
/4</h2>
<div class="wizard">
    <div class="wizard-inner">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs" role="tablist">

            <li class="etape active" data-etape="1" role="presentation">
                <a href="#etape1" data-toggle="tab" aria-controls="etape1" role="tab" title="Étape 1">
                    <span class="round-tab">
                        <i class="fa fa-user"></i>
                    </span>
                </a>
            </li>

            <li class="etape disabled" data-etape="2" role="presentation">
                <a href="#etape2" data-toggle="tab" aria-controls="etape2" role="tab" title="Étape 2">
                    <span class="round-tab">
                        <i class="fa fa-envelope"></i>
                    </span>
                </a>
            </li>
            <li class="etape disabled" data-etape="3" role="presentation">
                <a href="#etape3" data-toggle="tab" aria-controls="etape3" role="tab" title="Étape 3">
                    <span class="round-tab">
                        <i class="fa fa-user-secret"></i>
                    </span>
                </a>
            </li>

            <li class="etape disabled" data-etape="4" role="presentation">
                <a href="#complete" data-toggle="tab" aria-controls="etape4" role="tab" title="Étape 4">
                    <span class="round-tab">
                        <i class="fa fa-thumbs-o-up"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" id="etape1" data-etape="1">
            <h3>Étape 1</h3>
            <?php if ($_smarty_tpl->tpl_vars['etape']->value == 1) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['sousDoc']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <p class="pull-right"><a href="../index.php">Retour à la page d'accueil</a></p>
            <?php }?>
        </div>

        <div class="tab-pane" role="tabpanel" id="etape2" data-etape="2">
            <h3>Étape 2</h3>
            <?php if ($_smarty_tpl->tpl_vars['etape']->value == 2) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['sousDoc']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <p class="pull-right"><a href="../index.php">Retour à la page d'accueil</a></p>
            <?php }?>
        </div>

        <div class="tab-pane" role="tabpanel" id="etape3" data-etape="3">
            <h3>Étape 3</h3>
            <?php if ($_smarty_tpl->tpl_vars['etape']->value == 3) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['sousDoc']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <p class="pull-right"><a href="../index.php">Retour à la page d'accueil</a></p>
            <?php }?>
        </div>

        <div class="tab-pane" role="tabpanel" id="etape4" data-etape="4">
            <h3>Étape 4</h3>
            <?php if ($_smarty_tpl->tpl_vars['etape']->value == 4) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['sousDoc']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <p class="pull-right"><a href="../index.php">Retour à la page d'accueil</a></p>
            <?php }?>
        </div>
        <div class="clearfix"></div>
    </div>  <!-- tab-content -->

</div>


<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function () {

    var etape = $("#titre").data('etape');

    $(".etape").each(function(){
        var sousEtape = $(this).data('etape');
        if (sousEtape == etape)
            $(this).removeClass('disabled').addClass('active');
            else $(this).addClass('disabled').removeClass('active');
        })
    $(".tab-pane").each(function(){
        var sousEtape = $(this).data('etape');
        if (sousEtape == etape)
            $(this).removeClass('disabled').addClass('active');
            else $(this).addClass('disabled').removeClass('active');
        })


    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });

});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}


<?php echo '</script'; ?>
>
<?php }
}
