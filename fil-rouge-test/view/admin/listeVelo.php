<?php $titre = 'Informations sur les vélos'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Liste de tous les vélos</h1>
	
	<div class="row">

		<div class="col-md-5">

			<table class="table table-striped">
				<tr>
					<th>Identifiant</th>
					<th>Statut</th>
					<th>Identifiant Borne</th>
					<th>Identifiant Station</th>
					<th>Nom Station</th>

					
				</tr>
				<?php 
				foreach ($velos as $detail){?>
				<tr>
					<td> <?php echo $detail->IDVELO;?> </td>
					<td> <?php echo $detail->STATUTVELO; ?> </td>
					<td><?php echo $detail->IDBORNE; ?></td>
					<td><?php echo $detail->IDSTATION; ?></td>
					<td><?php echo $detail->NOMSTATION; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
		</div>

<?php $contenu = ob_get_clean(); ?>



<?php require_once ("view/gabarit_admin.php"); ?>