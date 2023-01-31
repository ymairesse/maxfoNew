<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Oxfam: Gestion des bénévoles</title>

{include file="styles.sty"}
{include file="javascript.js"}

</head>

<body>

<div class="container-fluid">
	{include file="boutonsHaut.tpl"}
</div>

<div id="corpsPage">
	{if isset($corpsPage)}
		{include file="$corpsPage.tpl"}
	{/if}
</div>

<div id="modal"></div>

{include file="footer.tpl"}

</body>

<script src="js/inscriptions.js"></script>	
<script src="js/conge.js"></script>
<script src="js/gestion.js"></script>

<link rel="stylesheet" href="summernote/summernote.min.css" />
<script src="summernote/summernote.min.js"></script>
<script src="summernote/lang/summernote-fr-FR.min.js"></script>

<script>

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
								window.location.assign('{$BASEDIR}');
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
</script>

</html>
