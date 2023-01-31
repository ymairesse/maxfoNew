<?php
/* Smarty version 3.1.34-dev-7, created on 2023-01-31 17:44:29
  from '/home/yves/www/mdm/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_63d9456daf7c20_24322561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f0df7087bfd92334c963d117d16425fb7afe19' => 
    array (
      0 => '/home/yves/www/mdm/templates/index.tpl',
      1 => 1675183461,
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
function content_63d9456daf7c20_24322561 (Smarty_Internal_Template $_smarty_tpl) {
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

<link rel="stylesheet" href="summernote/summernote.min.css" />
<?php echo '<script'; ?>
 src="summernote/summernote.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="summernote/lang/summernote-fr-FR.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

	function testSession(event){
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
					});
				event.stopPropagation()
				}
			})
		}
		

	$(document).ready(function() {
		
		$('body').on('click', '#btn-gestion', function(event){
			testSession(event);

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

		$('body').on('click', '#reset', function(event){
			testSession(event);
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
			testSession(event);

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

		$('#btn-profil').click(function(event) {
			testSession(event);

			// Cookies.set('action', 'profil', { sameSite: 'strict' }, { expires: 30 } );
			$.post('inc/editProfile.inc.php', {}, function(resultat) {
				$('#modal').html(resultat);
				$('#modalProfil').modal('show');
			})
		})

		$('body').on('click', '#btn-saveProfil', function(event){
			testSession(event);
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

	})
<?php echo '</script'; ?>
>

</html>
<?php }
}
