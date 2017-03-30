<?php $titre = 'Paiement'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Paiement</h1>


	<form name="paiement" onsubmit="return verifierformPaiement(this)" action ="index.php?controller=ClientController&action=paiement"> 

		<?php 
		if (isset($idAbo)) {
			echo '<input type="hidden" name="idAbo" value="'.$idAbo.'" />';
		}
	 	?>

		<div class="row">
			
			<div class="col-md-6">

				<div class="panel panel-primary">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Vos informations personnelles</div>
				  
				  <div class="panel-body">
				    
					<?php echo $clientInfo->PRENOMCLIENT.' '.$clientInfo->NOMCLIENT ?>
					<br/>
					<?php echo $clientInfo->ADRESSECLIENT ?>
					<br/>
					<?php echo $clientInfo->CPCLIENT.' '.$clientInfo->VILLECLIENT ?>
					<br/>
					<?php echo $clientInfo->TELCLIENT ?>
					<br/>
					<?php echo $clientInfo->MAILCLIENT ?>
					<br/>

				  </div>

				</div>

			</div>


			<div class="col-md-6">

				<div class="panel panel-primary">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Choisissez votre mode de Paiement</div>
				  
				  <div class="panel-body">

				  	<div  style="display:inline">
						<button type="button" class="btn btn-primary" onclick="afficherpaypal()">Paiement par Paypal</button>
						<button type="button" class="btn btn-primary" onclick="affichercb()">Paiement en Carte Bancaire </button>
				  	</div>
				    
				    <div class="hidden" id="paiementcb">

				    	<h4>Entrez vos informations de CB</h4>

				    	<div class="form-group">
					    	<input type="radio" name="choixcarte" value="mastercard" id="mastercard"/>	
							<label for="mastercard"> <img src="content/img/mastercard.jpg" alt="mastercard" width="60px" height="40px"/> </label>
					
							<input type="radio" name="choixcarte" value="visa" id="visa"/> 
							<label for="visa"> <img src="content/img/visa.jpg" alt="visa" width="60px" height="40px"/> </label>
				  		</div>

						<div class="form-group">
							<label for="nomcarte"> Nom du titulaire de la carte</label> : 
							<input type ="text" class="form-control" name="nomcarte" value="" onfocus=" if (value=='') value=' ';"/> 
						</div>

						<div class="form-group">
							<label for="numcartemcarte"> Numéro de la carte </label> : 
							<input type ="text" class="form-control" name="numcarte" max="16" value="" onfocus=" if (value=='') value=' ';" onkeypress="return pasdelettre(event);"/> 
						</div>

						<div class="form-group">
							<label for="dateexpi"> Date d'expiration </label> : 
							<input type ="text" class="form-control" name="dateexpi" placeholder="mm/aa" />
						</div>

						<div class="form-group">
							<label for="codesecu"> Code de sécurité </label> : 
							<input type ="text" class="form-control" name="codesecu" maxlength="3" value="" onfocus=" if (value=='') value=' ';"/>
						</div>						

				    </div>


				    <div class="hidden" id="paiementpaypal">

						<h4> Entrez vos Informations Paypal </h4>
				
						<img id="logopaypal" src="content/img/paypal.png" title="Paypal" width="90px" height="55px">

						<div class="form-group">
							<label for="identifiant"> Identifiant :</label> 
							<input type ="text" class="form-control" name="identifiant" value="" onfocus=" if (value=='') value=' ';"/> 
						</div>

						<div class="form-group">
							<label for="mdppaypal"> Mot de passe :</label> 
							<input type="password" class="form-control" name="mdppaypal" value="" onfocus=" if (value=='') value=' ';"/>
						</div>	

					</div>

				  </div>

				  	<input type="submit" class="btn btn-success" value="Paiement" />
					<input type="reset" class="btn btn-danger" value="Effacer" />

				</div>


			</div>
		</div>
				
												
	</form>