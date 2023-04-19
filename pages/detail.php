<?php
include('header.html');
$id_boutique = $_GET['boutique'];

//Connexion a la BDD
include('../connect_bases.php');

//Recuperation des polygones dans la BDD
$rq_boutique = "SELECT * 
				FROM points_interets
				RIGHT JOIN boutiques_ephemeres_informations
					ON boutiques_ephemeres_informations.id_boutique_ephemere = points_interets.id
				LEFT JOIN boutiques_ephemeres_images
					ON boutiques_ephemeres_informations.id_boutique_ephemere = boutiques_ephemeres_images.id_boutique_ephemere
				WHERE boutiques_ephemeres_informations.id_boutique_ephemere = ?;";
$boutique = $siteos_bdd->prepare($rq_boutique);
$boutique->execute(array($id_boutique));
$details_boutique = $boutique->fetchall(PDO::FETCH_ASSOC);

?>

<section class="property-single-pg">
	<div class="container">
		<a href="../index.php">Retour à l'accueil</a>
		<div class="property-hd-sec">
			<div class="card">
				<div class="card-body">
					<h3>
						<?php echo $details_boutique[0]['nom_pi']; ?>
					</h3>
					<p><?php echo $details_boutique[0]['adresse_pi']; ?></p>
					<ul>
						<?php if($details_boutique[0]['surface_de_vente'] != ''){?>
							<li><?php echo $details_boutique[0]['surface_de_vente']; ?> m²</li>
						<?php }?>
						<li>Score de la boutique : <?php echo $details_boutique[0]['note']; ?></li>
					</ul>
					<form method="POST" action="../note.php?notation=1&boutique=<?php echo $id_boutique; ?>">
						<button type="submit" class="btn2">Voter pour cette boutique</button>
					</form>
				</div><!--card-body end-->
			</div><!--card end-->
		</div><!---property-hd-sec end-->
		<div class="property-single-page-content">
			<div class="row">
				<div class="col-lg-8 pl-0 pr-0">
					<div class="property-pg-left">
						<div class="property-imgs">
							<?php if($details_boutique[0]['chemin_image1']!=''){ ?>
							<div class="property-main-img slick-initialized slick-slider">
								<div class="previewDiv">
									<img class="imagePreview" id="imagePreview"
										 src=<?php echo "../import/photos/" . $details_boutique[0]['chemin_image1']; ?>>
								</div>

								<div class="property-thumb-imgs">
									<div class="row thumb-carous slick-initialized slick-slider">
										<div class="slick-list draggable">
											<div id="petites_photos" class="slick-track">
												<div class="col-lg-4 col-md-4 col-sm-4 col-4 thumb-img slick-slide slick-current slick-active"
													 data-slick-index="0" aria-hidden="false"
													 tabindex="0">
													<div class="property-img">
														<img data-fullsrc=<?php echo "../import/photos/" . $details_boutique[0]['chemin_image1']; ?>
															 src=<?php echo "../import/photos/" . $details_boutique[0]['chemin_image1']; ?>
															 alt="" title="">
													</div><!--property-img end-->
												</div>
											<?php if($details_boutique[0]['chemin_image2']!=''){ ?>
												<div class="col-lg-4 col-md-4 col-sm-4 col-4 thumb-img slick-slide slick-active"
													 data-slick-index="1" aria-hidden="false"
													 tabindex="0">
													<div class="property-img">
														<img data-fullsrc=<?php echo "../import/photos/" . $details_boutique[0]['chemin_image2']; ?>
															 src=<?php echo "../import/photos/" . $details_boutique[0]['chemin_image2']; ?>
															 alt="" title="">
													</div><!--property-img end-->
												</div>
											<?php } if($details_boutique[0]['chemin_image3']!=''){ ?>
												<div class="col-lg-4 col-md-4 col-sm-4 col-4 thumb-img slick-slide slick-active"
													 data-slick-index="1" aria-hidden="false"
													 tabindex="0">
													<div class="property-img">
														<img data-fullsrc=<?php echo "../import/photos/" . $details_boutique[0]['chemin_image3']; ?>
															 src=<?php echo "../import/photos/" . $details_boutique[0]['chemin_image3']; ?>
															 alt="" title="">
													</div><!--property-img end-->
												</div>
											<?php } ?>
											</div>
										</div>

									</div>
								</div><!--property-thumb-imgs end-->
							</div><!--property-imgs end-->
							<?php }?>
							<div class="descp-text">
								<h3>
									Description </h3>
								<p><?php echo $details_boutique[0]['description'];?></p>
							</div><!--descp-text end-->
							<div class="details-info">
								<h3>Détails</h3>
								<ul>
									<?php
									$champs_ignores = array('id_boutique_ephemere', 'contact', 'contact_ville', 'nom_pi', 'type_pi', 'geom', 'date_modif', 'id', 'chemin_image1', 'chemin_image2', 'chemin_image3', 'description', 'note');
									foreach($details_boutique[0] AS $nom_champ => $champ){
										if($champ != '' && !in_array($nom_champ, $champs_ignores)){
											echo '<li><h4>'. ucfirst(str_replace(array('_','pi'), ' ', $nom_champ)) .' : </h4> <span>'. ucfirst($champ) . '</span></li>';
										}
									} ?>
								</ul>
							</div><!--details-info end-->
						</div><!--property-pg-left end-->
					</div>
				</div>
			</div><!--property-single-page-content end-->
		</div>
</section>

<script src="../detail.js"></script>

<?php
include('footer.html');
?>