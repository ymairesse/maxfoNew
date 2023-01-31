<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-01 18:18:57
  from '/home/sio/www/mdmoxfam/templates/boutonsHaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63615501b791a8_15815115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acd9d946895031a381ef746072ee5b30275d71d8' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/boutonsHaut.tpl',
      1 => 1667299253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63615501b791a8_15815115 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">

	<h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
	
	<div class="col-xs-12 btn-group">

	<button type="button" class="btn btn-warning btn-sm" name="button" id="btn-calendrier">
		<i class="fa fa-calendar"></i><span class="hidden-xs"> Calendrier</span>
	</button>

	<button type="button" class="btn btn-success btn-sm" name="button" id="btn-profil">
		<i class="fa fa-user"></i><span class="hidden-xs"> Profil et Mot de passe</span>
	</button>

	
	<a type="button" class="btn btn-info btn-sm"  id="pdf-btn" name="button" href="inc/getPlanningPDF.php?month=<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
&year=<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
">
		<i class="fa fa-file-pdf-o"></i><span class="hidden-xs"> Impression PDF</span>
	</a>
	

	<?php if ($_smarty_tpl->tpl_vars['identite']->value['statut'] == 'admin') {?>

		<div class="btn-group">

			<button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown">
				Administration <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li>
					<a href="#" id="btn-gestion">
						<i class="fa fa-calendar-check-o" aria-hidden="true"></i> Gestion des inscriptions
					</a>
				</li>

				<li>
					<a href="#" id="btn-freeze">
					<i class="fa fa-snowflake-o" aria-hidden="true"></i> Gel des inscriptions
					</a>
				</li>

				<li>
					<a href="#" id="btn-conges">
						<i class="fa fa-key" aria-hidden="true"></i> Congés et fermetures
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#" id="btn-periodes">
						<i class="fa fa-clock-o" aria-hidden="true"></i> Périodes de permanences
					</a>
				</li>
				<li>
					<a href="#" id="btn-clean">
						<i class="fa fa-eraser" aria-hidden="true"></i> Nettoyage des mois échus
					</a>
				</li>
			</ul>

		</div>
	<?php }?>

	<button type="button" class="btn btn-danger btn-sm pull-right" name="button" id="btn-logout"><i
			class="fa fa-times"></i><span class="hidden-xs"> Quitter</span>
	</button>
	



<input type="hidden" name="month" id="month" value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
">
<input type="hidden" name="year" id="year" value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
">

</div><?php }
}
