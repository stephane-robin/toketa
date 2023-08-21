<h2>Quizz</h2>

<p>Testez vos connaissances sur les probabilités avec les questions suivantes :</p>

<?php
$nbrePoints = 0;

if(isset($_POST['validerFractions'])){
  
  for ($i=1; $i<16; $i++){
    if(isset($_POST['q'.$i])){
      if($_POST['q'.$i] == True){
        $nbrePoints += 1;
      }
    }
    else{
      $_POST['q'.$i] = False;
    }
  }

  // results
  $pourcentage = round(100 * $nbrePoints / 10);
  echo "<p style='margin-left:3%; color:green;'>".$pourcentage." % de réponses justes.</p>"; 

  if ($pourcentage < 30){
    echo "<p>Vous devriez bien relire le cours avant de ré-essayer le quizz. &#128163;</p>";
  }
  else if ($pourcentage >= 30 and $pourcentage < 60){
    echo "<p>Continuez vos efforts et essayez d'obtenir un meilleur score... &#127916;</p>";
  }
  else if ($pourcentage >= 60 and $pourcentage < 80){
    echo "<p>Bien joué... Vous pouvez encore améliorer votre score. &#127937;</p>";
  }
  else {
    echo "<p>Félicitations &#127881;</p>";
  }
}
?>

<!-----------------
     QUESTIONS 
------------------->

<form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="" method="post">
<p>Une urne contient des boules indiscernables au toucher : 6 blanches, 3 rouges et 8 vertes. On tire au hasard une boule sans regarder puis on remet cette boule dans l'urne.</p>

<!-- Question 1 -->
<label for="q1"><em>Question 1 :</em> la probabilité d'obtenir une boule blanche est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">\(\frac{1}{6}\)</label><br/>
<input style="margin-top:2%;"type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">\(\frac{3}{6}\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="True">
<label style="margin-left:1%;" for="q1r3">\(\frac{6}{17}\)</label><br/>

<!-- Question 2 -->
<label for="q2" style="margin-top:5%;"><em>Question 2 :</em> la probabilité d'obtenir une verte est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="False">
<label style="margin-left:1%;" for="q2r1">\(\frac{1}{17}\)</label><br/>
<input  style="margin-top:2%;" type="radio" id="q2r2" name="q2" value="True">
<label style="margin-left:1%;" for="q2r2">\(\frac{8}{17}\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">\(\frac{8}{14}\)</label><br/>

<!-- Question 3 -->
<label for="q3" style="margin-top:5%;"><em>Question 3 :</em> la probabilité d'obtenir une boule verte ou une boule rouge est :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="False">
<label style="margin-left:1%;" for="q3r1">\(\frac{6}{17}\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q3r2" name="q3" value="True">
<label style="margin-left:1%;" for="q3r2">\(\frac{11}{17}\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="False">
<label style="margin-left:1%;" for="q3r3">\(\frac{-6}{17}\)</label><br/>

<!-- Question 4 -->
<label for="q4"><em>Question 4 :</em> la probabilité d'obtenir une boule blanche ou une boule verte est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r1" name="q4" value="False">
<label style="margin-left:1%;" for="q4r1">\(\frac{14}{14}\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r2" name="q4" value="True">
<label style="margin-left:1%;" for="q4r2">\(\frac{14}{17}\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q4r3" name="q4" value="False">
<label style="margin-left:1%;" for="q4r3">\(\frac{3}{17}\)</label><br/>

<!-- Question 5 -->
<label for="q5"><em>Question 5 :</em> on a enlevé une boule blanche de l'urne. La probabilité d'obtenir une boule verte est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r1" name="q5" value="False">
<label style="margin-left:1%;" for="q5r1">inchangée</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r2" name="q5" value="True">
<label style="margin-left:1%;" for="q5r2">\(\frac{8}{16}\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q5r3" name="q5" value="False">
<label style="margin-left:1%;" for="q5r3">\(\frac{7}{17}\)</label><br/>

<!-- Question 6 -->
<label for="q6" style="margin-top:2%;"><em>Question 6 :</em> sur un lancer de dé à 6 faces, l'événement complémentaire de "obtenir un nombre impair" est :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q6r1" name="q6" value="False">
<label style="margin-left:1%;" for="q6r1">ne pas obtenir 1</label><br/>
<input style="margin-top:2%;" type="radio" id="q6r2" name="q6" value="False">
<label style="margin-left:1%;" for="q6r2">ne pas obtenir un nombre pair</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q6r3" name="q6" value="True">
<label style="margin-left:1%;" for="q6r3">obtenir un nombre pair</label><br/>

<!-- Question 7 -->
<label for="q7"><em>Question 7 :</em> sur un lancer de dé à 6 faces, la somme des probabilités de toutes les issues vaut :</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r1" name="q7" value="False">
<label style="margin-left:1%;" for="q7r1">6</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r2" name="q7" value="True">
<label style="margin-left:1%;" for="q7r2">1</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q7r3" name="q7" value="False">
<label style="margin-left:1%;" for="q7r3">21</label><br/>

<!-- Question 8 -->
<label for="q8"><em>Question 8 :</em> la probabilité d'un événement contraire :</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r1" name="q8" value="True">
<label style="margin-left:1%;" for="q8r1">à laquelle on ajoute la probabilité de l'événement vaut 1</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r2" name="q8" value="False">
<label style="margin-left:1%;" for="q8r2">est négative</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q8r3" name="q8" value="False">
<label style="margin-left:1%;" for="q8r3">est supérieure à 1</label><br/>

<!-- Question 9 -->
<label for="q9" style="margin-top:5%;"><em>Question 9 :</em> on tire au sort 10 fois consécutivement avec un dé à 6 faces. On obtient trois chiffres 1, deux chiffres 2, deux chiffres 3, un chiffre 4, zéro chiffre 5 et deux chiffres 6. Comme le chiffre 1 sort trois fois sur dix :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q9r1" name="q9" value="True">
<label style="margin-left:1%;" for="q9r1">la fréquence d'apparition du chiffre 1 est \(\frac{3}{10}\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q9r2" name="q9" value="False">
<label style="margin-left:1%;" for="q9r2">la probabilité d'obtenir le chiffre 1 est \(\frac{3}{10}\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q9r3" name="q9" value="False">
<label style="margin-left:1%;" for="q9r3">aucune des deux réponses ci-dessus</label><br/>

<!-- Question 10 -->
<label for="q10"><em>Question 10 :</em> la probabilité d'obtenir un événement est la même que sa fréquence de réalisation lorsque :</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r1" name="q10" value="False">
<label style="margin-left:1%;" for="q10r1">on a de la chance</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r2" name="q10" value="True">
<label style="margin-left:1%;" for="q10r2">le nombre de tirages effectués est très grand</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q10r3" name="q10" value="False">
<label style="margin-left:1%;" for="q10r3">cela n'arrive jamais</label><br/>

<button class='bouton' name="validerFractions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>
