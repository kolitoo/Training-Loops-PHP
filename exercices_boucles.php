<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
		<!-- GoogleFonts : Roboto / Playfair Display -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
		
		<style>
			h1, h2, h3, h4, h5, h6 {
				font-family: 'Playfair Display', serif;
				background-color: #007BFF;
				padding: 20px;
				color: white;
			}
			body, a, p {
				font-family: 'Roboto', sans-serif;
			}
		</style>

		<title>Boucles</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 sur une même ligne</h2>
					<hr>
					<?php 
					
						$i = 0;
						while($i < 10) { 
							echo $i . ' '; 
							$i++; 
						}
						
						echo '<hr>';
						
						for($i = 0; $i < 10; $i++) {
							echo $i . ' ';
						}
					
					?>
					
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne</h2>
					<hr>
					<?php 
						$i = 0; 
						while($i < 100) { 
							echo $i . ' '; 
							$i++; 
						}
						
						echo '<hr>';
						
						for($i = 0; $i < 100; $i++) {
							echo $i . ' ';
						}
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne avec le  chiffre 50 en rouge</h2>
					<hr>
					<?php 
						$i = 0; 
						while($i < 100) { 
							if($i == 50) {
								echo '<span style="color: red; font-size: 21px; font-style: bold;">' . $i . '</span> '; 
							} else {
								echo $i . ' '; 
							}
							
							$i++; 
						}
						
						echo '<hr>';
						
						for($i = 0; $i < 100; $i++) {
							if($i == 50) {
								echo '<span style="color: red; font-size: 21px; font-style: bold;">' . $i . '</span> '; 
							} else {
								echo $i . ' '; 
							}
						}
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne avec les dizaines en rouge</h2>
					<hr>
					<?php 
						$i = 0; 
						while($i < 100) { 
							if($i % 10 == 0) {
								echo '<span style="color: red; font-size: 21px; font-style: bold;">' . $i . '</span> '; 
							} else {
								echo $i . ' ';
							}
							
							$i++; 
						}
						
						echo '<hr>';
						
						for($i = 0; $i < 100; $i++) {
							if($i % 10 == 0) {
								echo '<span style="color: white; font-size: 21px; background-color: red; padding: 3px">' . $i . '</span> '; 
							} else {
								echo $i . ' '; 
							}
						}
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne avec un retour à la ligne à chaque dizaine sauf pour 0</h2>
					<hr>
					<?php 
						$i = 0; 
						while($i < 100) { 
							if($i % 10 == 0 && $i !== 0) {
								echo '<br>' . $i . ' '; 
							} else {
								echo $i . ' ';
							}
							
							$i++; 
						}
						
						echo '<hr>';
						
						for($i = 0; $i < 100; $i++) {
							if($i % 10 == 0 && $i !== 0) {
								echo '<br>' . $i . ' '; 
							} else {
								echo $i . ' '; 
							}
						}
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 dans une liste ul li</h2>
					<hr>
					<?php 
						echo '<ul>';
						$i = 0; 
						while($i < 10) { 
							echo '<li>' . $i . '</li> '; 
							$i++; 
						}
						echo '</ul>';
						echo '<hr>';
						
						// for 
						echo '<ul>';
						for($i = 0; $i < 10; $i++) {
							echo '<li>' . $i . '</li> ';
						}
						echo '</ul>';
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 dans une liste ul li avec chaque valeur dans un background-color différent</h2>
					<hr>
					<?php 
						$color = 200000;
						echo '<ul style="padding: 0; margin: 0;">';
						$i = 0; 
						while($i < 10) { 
							echo '<li style="background-color: #' . $color . '; color: white; padding: 10px;">' . $i . '</li> '; 
							$i++; 
							$color += 12345;
						}
						echo '</ul>';
						echo '<hr>';
						
						echo '<ul style="padding: 0; margin: 0;">';
						for($i = 0; $i < 10; $i++) {
							$color = rand(100000, 999999);
							echo '<li style="background-color: #' . $color . '; color: white; padding: 10px;">' . $i . '</li> '; 				
						}
						echo '</ul>';
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 dans un tableau html</h2>
					<hr>
					<?php 
					
						echo '<table class="table table-bordered"><tr>';
						$i = 0; 
						while($i < 10) { 
							echo '<td>' . $i . '</td> '; 	
							$i++;
						}
						echo '</tr></table>';
						echo '<hr>';
						
						echo '<table class="table table-bordered"><tr>';
						for($i = 0; $i < 10; $i++) {
							echo '<td>' . $i . '</td> ';
						}
						echo '</tr></table>';
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Pareil mais sur 10 lignes : <?php echo htmlspecialchars('<tr>'); ?> affichage de 0 à 99 (une ou deux boucles)</h2>
					<hr>
					<?php 
						echo '<table class="table table-bordered"><tr>';
						$i = 0; 
						while($i < 100) { 
							if($i % 10 == 0 && $i !== 0) {
								echo '</tr><tr>';
							}
							echo '<td>' . $i . '</td> '; 
							$i++; 
						}
						echo '</tr></table>';
						echo '<hr>';
						
						echo '<table class="table table-bordered">';
						for($y = 0; $y < 10; $y++) {
							echo '<tr>';
							for($i = 0; $i < 10; $i++) {
								echo '<td>' . ($y * 10 + $i) . '</td> ';
							}
							echo '</tr>';

						}
						echo '</tr></table>';
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Pareil avec les couleurs différentes dans les colonnes et/ou cellules</h2>
					<hr>
					<?php 
						echo '<table class="table table-bordered"><tr>';
						$i = 0; 
						while($i < 100) { 
							if($i % 10 == 0 && $i !== 0) {
								echo '</tr><tr>';
							}
							$color = rand(100000, 999999);
							echo '<td style="background-color: #' .  $color . '; color: white;">' . $i . '</td> '; 
							$i++; 
						}
						echo '</tr></table>';
						echo '<hr>';
						echo '<table class="table table-bordered">';
						for($y = 0; $y < 10; $y++) {
							echo '<tr>';
							for($i = 0; $i < 10; $i++) {
								if(($y * 10 + $i) % 10 == 0) {
									echo '<td class="bg-white">' . ($y * 10 + $i) . '</td> '; 
								} else if(($y * 10 + $i) % 10 == 1) {
									echo '<td class="bg-light">' . ($y * 10 + $i) . '</td> '; 
								} else if(($y * 10 + $i) % 10 == 2) {
									echo '<td class="bg-secondary text-white">' . ($y * 10 + $i) . '</td> '; 
								} else if(($y * 10 + $i) % 10 == 3) {
									echo '<td class="bg-dark text-white">' . ($y * 10 + $i) . '</td> '; 
								} else if(($y * 10 + $i) % 10 == 4) {
									echo '<td class="bg-danger text-white">' . ($y * 10 + $i) . '</td> ';	
								} else if(($y * 10 + $i) % 10 == 5) {
									echo '<td class="bg-primary text-white">' . ($y * 10 + $i) . '</td> ';	
								} else if(($y * 10 + $i) % 10 == 6) {
									echo '<td class="bg-warning text-white">' . ($y * 10 + $i) . '</td> ';	
								} else if(($y * 10 + $i) % 10 == 7) {
									echo '<td class="bg-success text-white">' . ($y * 10 + $i) . '</td> ';	
								} else if(($y * 10 + $i) % 10 == 8) {
									echo '<td class="bg-info text-white">' . ($y * 10 + $i) . '</td> ';	
								} else if(($y * 10 + $i) % 10 == 9) {
									echo '<td style="background-color: fuchsia; color: white;">' . ($y * 10 + $i) . '</td> ';	
								}
							}
							echo '</tr>';

						}
						echo '</tr></table>';
						
						echo '<hr>';
						
						$tab_color = ['bg-white', 'bg-light', 'bg-secondary text-white', "bg-dark text-white", "bg-danger text-white", "bg-primary text-white", "bg-warning text-white", "bg-success text-white", "bg-info text-white", "bg-dark text-white"];
						
						echo '<table class="table table-bordered">';
						for($y = 0; $y < 10; $y++) {
							echo '<tr>';
							for($i = 0; $i < 10; $i++) {
								echo '<td class="' . $tab_color[(($y * 10 + $i) % 10)] . '">' . ($y * 10 + $i) . '</td> '; 
							}
							echo '</tr>';

						}
						echo '</tr></table>';
					
					?>
				</div>
				<div class="col-12 mt-5 p-5 border"></div>
				<div class="col-12 mt-5 p-5 border"></div>
				<div class="col-12 mt-5 p-5 border"></div>
				<div class="col-12 mt-5 p-5 border"></div>
				<div class="col-12 mt-5 p-5 border"></div>
				<div class="col-12 mt-5 p-5 border"></div>
				<div class="col-12 mt-5 p-5 border"></div>
				<div class="col-12 mt-5 p-5 border"></div>
			</div>
		</div>
	

		<!-- jQuery and Bootstrap Bundle -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>