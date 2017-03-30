<?php $titre = 'Informations sur les vélos'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Liste de tous les vélos</h1>
	
	<div class="row">

		<div class="col-md-5">

			<table class="table table-striped">
				<tr>
					<td>Identifiant</td>
					<td>Statut</td>
					<td>Identifiant Borne</td>
					<td>Identifiant Station</td>
					<td>Nom Station</td>

					
				</tr>
				<?php 
				foreach ($velos as $velo){?>
				<tr>
					<td> <?php echo $velo->getIdVelo()?> </td>
					<td> <?php echo $velo->getStatutVelo() ?> </td>
					<td><?php echo $velo->getIdBorne()?></td>
					<td><?php echo $velo->getIdStation()?></td>
					<td><?php echo $velo->getNomStation()?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
<?php $contenu = ob_get_clean(); ?>



<?php require_once ("view/gabarit_admin.php"); ?>