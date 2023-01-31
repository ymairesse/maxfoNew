<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-28 19:26:27
  from '/home/sio/www/mdmoxfam/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d568d360a741_10786443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d66d67d01d833fc8b091a882c6ef999770565bf' => 
    array (
      0 => '/home/sio/www/mdmoxfam/templates/index.tpl',
      1 => 1674930375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:styles.sty' => 1,
    'file:javascript.js' => 1,
    'file:boutonsHaut.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d568d360a741_10786443 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Oxfam: Gestion des bénévoles</title>

<?php $_smarty_tpl->_subTemplateRender("file:styles.sty", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:javascript.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

<div class="container-fluid">
	<?php $_smarty_tpl->_subTemplateRender("file:boutonsHaut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div id="corpsPage">
	<?php if ((isset($_smarty_tpl->tpl_vars['corpsPage']->value))) {?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['corpsPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php }?>
</div>

<div id="modal"></div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

<?php echo '<script'; ?>
 src="js/inscriptions.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="js/conge.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/gestion.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

	function testSession(){
		$.post('inc/testSession.inc.php', {},
			function(resultat){
			if (resultat == '') {
				bootbox.alert({
					title: 'Dépassement du délai',
					message: 'Votre session s\'est achevée. Veuillez vous reconnecter.',
					callback: function(){
						window.location.replace('accueil.php');
						exit();
					}
					})
				}
			})
		}
		

	$(document).ready(function() {
		
		$('body').on('click', '#btn-gestion', function(){
			testSession();

			var month = $('#month').val();
			var year = $('#year').val();;
			Cookies.set('action', 'gestion', { sameSite: 'strict' }, { expires: 30 } );
			$.post('inc/gestion.inc.php', {
				month: month,
				year: year
				}, 
				function(resultat){
					$('#corpsPage').html(resultat);
				})
		})

		$('body').on('click', '#reset', function(){
			$('#formInscription')[0].reset();
			$('.me').removeClass('toDelete btn-primary').addClass('btn-danger');
			$('.me').find('span.disk').hide();
			$('#calendar-table .case').each(function(i){
				var cb = $(this).find('input:checkbox');
				var status = $(this).find('input:checkbox').is(':checked');
				if (status == true) {
					cb.closest('td').find('.visible.desinscription').show();
					cb.closest('td').find('.visible.inscription').hide();
					}
					else {
					cb.closest('td').find('.visible.desinscription').hide();
					cb.closest('td').find('.visible.inscription').show();
					}
			})
			$('button.candidat').remove();
		})

		$('body').on('click', '#btn-conges', function(){
			testSession();

			var month = $('#month').val();
			var year = $('#year').val();
			Cookies.set('action', 'conge', { sameSite: 'strict' }, { expires: 30 } );
			$.post('inc/editConges.inc.php', {
				month: month,
				year: year
				}, 
				function(resultat){
					$('#corpsPage').html(resultat);
				})
		})

		$('#btn-calendrier').click(function() {
			testSession();

			var month = $('#month').val();
			var year = $('#year').val();
			Cookies.set('action', 'calendar', { sameSite: 'strict' }, { expires: 30 } );

			$.post('inc/getCalendar.inc.php', {
				month: month,
				year: year
				}, function(resultat) {
				$('#corpsPage').html(resultat);
			})
		})

		$('#btn-periodes').click(function(){
			testSession();

			Cookies.set('action', 'periodes', { sameSite: 'strict' }, { expires: 30 } );

			$.post('inc/editPeriodes.inc.php', {}, function(resultat){
				$('#modal').html(resultat);
				$('#modalEditPeriodes').modal('show');
			})
		})

		$('body').on('click', '#btn-savePeriodes', function(){
			testSession();

			var formulaire = $('#formEditPeriodes').serialize();
			$.post('inc/savePeriodes.inc.php', {
				formulaire: formulaire},
				function(resultat){
					bootbox.alert({
						title: 'Enregistrement',
						message: resultat + ' périodes enregistrées'
					});
					$('#modalEditPeriodes').modal('hide');
			})
		})

		$('#btn-logout').click(function() {
			bootbox.confirm({
				title: 'Déconnexion',
				message: 'Veuillez confirmer la déconnexion',
				callback: function(result) {
					if (result == true) {
						$.post('inc/logout.inc.php', {},
							function(resultat) {
								window.location.assign('<?php echo $_smarty_tpl->tpl_vars['BASEDIR']->value;?>
');
							})
					}
				}
			})
		})

		$('#btn-profil').click(function() {
			testSession();

			Cookies.set('action', 'profil', { sameSite: 'strict' }, { expires: 30 } );
			$.post('inc/editProfile.inc.php', {}, function(resultat) {
				$('#modal').html(resultat);
				$('#modalProfil').modal('show');
			})
		})

		$('body').on('click', '#btn-saveProfil', function(){
			if ($('#formEditionProfil').valid()) {
				var formulaire = $('#formEditionProfil').serialize();
				$.post('inc/saveUser.inc.php', {
					formulaire: formulaire
				}, function(resultat){
					bootbox.alert(resultat);
					$('#modalProfil').modal('hide');
				})
			}
		})

		$('body').on('click', '#btn-pdf', function(){
			testSession();

			var month = $('#month').val();
			$.post('inc/getPlanningPDF.inc.php', {
				month: month
			}, function(resultat){
				bootbox.alert({
					title: 'Planning PDF',
					message: 'Le <a href="pdf/planning.pdf" target="_blank">Planning</a> est à votre disposition'
				})
			})
		})

	})
<?php echo '</script'; ?>
>

</html>
<?php }
}
