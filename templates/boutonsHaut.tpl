<div class="row">

	<h1>{$titre}</h1>
	
	<div class="col-xs-12 btn-group">

	<button type="button" class="btn btn-warning btn-sm" name="button" id="btn-calendrier">
		<i class="fa fa-calendar"></i><span class="hidden-xs"> Calendrier</span>
	</button>

	<button type="button" class="btn btn-success btn-sm" name="button" id="btn-profil">
		<i class="fa fa-user"></i><span class="hidden-xs"> Profil et Mot de passe</span>
	</button>

	
	<a type="button" class="btn btn-info btn-sm"  id="pdf-btn" name="button" href="inc/getPlanningPDF.php?month={$month}&year={$year}">
		<i class="fa fa-file-pdf-o"></i><span class="hidden-xs"> Impression PDF</span>
	</a>

	<button type="button" class="btn btn-primary btn-sm" name="button" id="btn-mail">
		<i class="fa fa-send-o" aria-hidden="true"></i><span class="hidden-xs"> Envoyer un mail</span>
	</button>
	

	{if $identite.statut == 'admin'}

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
	{/if}

	<button type="button" class="btn btn-danger btn-sm pull-right" name="button" id="btn-logout"><i
			class="fa fa-times"></i><span class="hidden-xs"> Quitter</span>
	</button>
	



<input type="hidden" name="month" id="month" value="{$month}">
<input type="hidden" name="year" id="year" value="{$year}">

</div>