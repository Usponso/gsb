<div class="col-md-6">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><h2>Mes fiches de frais</h2></div>
		</div>
		  	<div class="panel-body">
				<h3>Mois à sélectionner : </h3>
				<form class="form-horizontal" action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">				
					<select class="form-control" id="lstMois" name="lstMois">
									<?php
						foreach ($lesMois as $unMois)
						{
							$mois = $unMois['mois'];
							$numAnnee =  $unMois['numAnnee'];
							$numMois =  $unMois['numMois'];
                                                        $tableMois = ['','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
							if($mois == $moisASelectionner){
							?>
							<option selected value="<?php echo $mois ?>"><?php echo  $tableMois[$numMois]." ".$numAnnee ?> </option>
							<?php 
							}
							else{ ?>
							<option value="<?php echo $mois ?>"><?php echo  $tableMois[$numMois]." ".$numAnnee ?> </option>
							<?php 
							}
						
						}
								   
								   ?>    
					</select>
					<div class="form-horizontal">
                                                <br/>
						<input class="form-control" id="ok" type="submit" value="Valider" />
					</div>
				</form>
			</div>
	</div>
</div>
		