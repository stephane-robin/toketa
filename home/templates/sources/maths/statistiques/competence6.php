
<h3>Vocabulaire</h3>

<embed src='../../documents/vocabulaire_proba_4eme.pdf' width=95% height=40% type='application/pdf'/>

<h3>La loi des grands nombres</h3>

<p>La loi des grands nombres modélise la fréquence d'apparition d'un événement pour construire les lois de probabilité que nous utilisons.</p>

<p>Il est possible de lancer un dé plusieurs fois et de compter le nombre de fois que chaque chiffre entre 1 et 6 ressort. Cela est trop fastidieux lorsqu'il faut le faire 100 fois, voire 1000 fois, ou plus encore. On a dans ce cas recours à un programme qui effectue ce travail répétitif à notre place.</p>

<h4>Testez par vous-mêmes</h4>

<p>Pour effectuer plusieurs tirages au sort d'un nombre à partir d'un dé, et relever le nombre de fois que chacun des nombres ressort, il vous suffit de Valider vos choix.</p>

<form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" name='tirage_de' action="" method="post">

<div class="bloc_ligne">
<div>
<p>Nombre de faces du dé :</p>
<input style="margin-top:2%;" type="radio" id="de4" name="nbre_faces" value=4>
<label for="de4">4 faces</label><br/>
<input type="radio" id="de6" name="nbre_faces" value=6>
<label for="de6">6 faces</label><br/>
<input type="radio" id="de8" name="nbre_faces" value=8>
<label for="de8">8 faces</label><br/>
<input type="radio" id="de12" name="nbre_faces" value=12>
<label for="de12">12 faces</label><br/>
<input type="radio" id="de20" name="nbre_faces" value=20>
<label for="de20">20 faces</label>
</div>

<div style='margin-left:10%'>
<p>Nombre de tirages du dé :</p>
<input style="margin-top:2%;" type="radio" id="t10" name="nbre_tirages" value=10>
<label for="t10">10 tirages</label><br/>
<input type="radio" id="t100" name="nbre_tirages" value=100>
<label for="t100">100 tirages</label><br/>
<input type="radio" id="t1000" name="nbre_tirages" value=1000>
<label for="t1000">1 000 tirages</label><br/>
<input type="radio" id="t10000" name="nbre_tirages" value=10000>
<label for="t10000">10 000 tirages</label><br/>
<input type="radio" id="t100000" name="nbre_tirages" value=100000>
<label for="t100000">100 000 tirages</label>
</div>
</div>
<button class='bouton' name="validerFractions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

</form>

<?php
if(isset($_POST['nbre_faces']) and isset($_POST['nbre_tirages'])){
	$nbre_faces = $_POST['nbre_faces'];
	$nbre_tirages = $_POST['nbre_tirages'];
	$cpt = array();

	for ($j=1; $j<$nbre_faces+1; $j++){
		$cpt[$j] = 0;
	}

	for ($i=1; $i<$nbre_tirages+1; $i++){
		$nbre_tire = random_int(1, $nbre_faces);

		for ($j=1; $j<$nbre_faces+1; $j++){
			if ($nbre_tire == $j){
			$cpt[$j] += 1;
			}
		}
	}

	for ($j=1; $j<$nbre_faces+1; $j++){ 
		echo "<p><strong>Pourcentage de tirages du ".$j." : </strong>".(100 * ($cpt[$j] / $nbre_tirages))." %</p>";
	}
}


?>

<h3>Etrange</h3>

<p>Voici un résultat surprenant, publié par T. Laurin sur YouTube <a href='https://youtu.be/1U-B1-aO6nM' target='_blank'>Lancer de deux dés, résultat étonnant</a>.</p>

<p>Pour effectuer les tests avec plusieurs dés, vous pouvez par exemple visiter le site <a href='https://www.edumedia-sciences.com/fr/media/266-probabilites-avec-un-ou-deux-des' target='_blank'>EduMedia</a>.</p>

