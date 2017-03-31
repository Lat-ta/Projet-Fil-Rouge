<?php $titre = 'Historique des vélos'; ?>

<?php ob_start(); ?>

<h1>Historique d'un vélo</h1>
	
	<div class="row">
			
			<div class="col-md-4">

				<div class="panel panel-primary">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Rechercher un vélo par son ID</div>
				  
				  <div class="panel-body">
				    
					<form method="POST" action="#">
	
					<input type="text" class="form-control" name="idvelo" />
					<input type="submit" value="Rechercher" class="btn btn-primary"/> 
					
					</form>

				  </div>

				</div>

		</div>


		<div class="col-md-8">

			<h2>Résultat</h2>

			<?php if(empty($detailVelo)) {
				echo 'Aucun vélo trouvé';
			} else {
			?>

				<table class="table table-striped">
				<tr>
				
					<th>Identifiant</th>
					<th>Date de mise en route</th>
					<th>Km parcourus</th>
					<th>Identifiant Station</th>
				
				</tr>
				<?php 
				foreach ($detailVelo as $velo){?>
				<tr>
					<td style="text-align:center"> <?php echo $velo['IDVELO']; ?> </td>
					<td style="text-align:center"> <?php echo $velo['DATEMISEENROUTE']; ?> </td>
					<td style="text-align:center"> <?php echo $velo['KMPARCOURUS']; ?> </td>
					<td style="text-align:center"> <?php echo $velo['IDSTATION']; ?> </td>
			
				</tr>
				<?php }?>
			</table>

			<?php
			}
			?>

			

		</div>
	</div>

	
		
	
	
<?php $contenu = ob_get_clean(); ?>



<?php require_once ("view/gabarit_admin.php"); ?>