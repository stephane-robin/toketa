<h2>Quizz</h2>

<p>Testez vos connaissances en Python avec les questions suivantes :</p>

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

<!-- Question 1 -->
<label for="q1"><em>Question 1 :</em> qu'affiche le code suivant :</label>
<pre><code class="language-python">age = input("Quel est ton âge ? ")
age = age + 1
print(age)</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">"Quel est ton âge ?", puis il affiche un an de plus que l'âge saisi</label><br/>
<input style="margin-top:2%;"type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">"Quel est ton âge ?", puis l'âge saisi</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="True">
<label style="margin-left:1%;" for="q1r3">"Quel est ton âge ?", puis "TypeError: can only concatenate str (not "int") to str"</label><br/>

<!-- Question 2 -->
<label for="q2" style="margin-top:5%;"><em>Question 2 :</em> qu'affiche le code suivant :</label>
<pre><code class="language-python">x = 12
y = x + 3
y = x
print(x)</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="False">
<label style="margin-left:1%;" for="q2r1">15</label><br/>
<input  style="margin-top:2%;" type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">TypeError: can only concatenate str (not "int") to str</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="True">
<label style="margin-left:1%;" for="q2r3">12</label><br/>

<!-- Question 3 -->
<label for="q3" style="margin-top:5%;"><em>Question 3 :</em> qu'affiche le message suivant :</label>
<pre><code class="language-python">x = 12
y = "bonjour" + 3
print(y)</code></pre><br/> 
<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="False">
<label style="margin-left:1%;" for="q3r1">bonjourbonjourbonjour</label><br/>
<input style="margin-top:2%;" type="radio" id="q3r2" name="q3" value="True">
<label style="margin-left:1%;" for="q3r2">TypeError: can only concatenate str (not "int") to str</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="False">
<label style="margin-left:1%;" for="q3r3">bonjour3</label><br/>

<!-- Question 4 -->
<label for="q4"><em>Question 4 :</em> la boucle suivante va se répéter :</label>
<pre><code class="language-python">for i in range(0, 11):
    print(i)</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q4r1" name="q4" value="False">
<label style="margin-left:1%;" for="q4r1">10 fois</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r2" name="q4" value="True">
<label style="margin-left:1%;" for="q4r2">11 fois</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q4r3" name="q4" value="False">
<label style="margin-left:1%;" for="q4r3">TypeError : index out of range</label><br/>

<!-- Question 5 -->
<label for="q5"><em>Question 5 :</em> la boucle suivante :</label>
<pre><code class="language-python">for i in range(0, 11):
    print(i)</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q5r1" name="q5" value="False">
<label style="margin-left:1%;" for="q5r1">commence pour i=1</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r2" name="q5" value="True">
<label style="margin-left:1%;" for="q5r2">commence pour i=0</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q5r3" name="q5" value="False">
<label style="margin-left:1%;" for="q5r3">se finit pour i=11</label><br/>

<!-- Question 6 -->
<label for="q6" style="margin-top:2%;"><em>Question 6 :</em> la boucle suivante va se répéter :</label>
<pre><code class="language-python">i = 15
while (i&lt10):
    print(i)
    i = i + 1</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q6r1" name="q6" value="True">
<label style="margin-left:1%;" for="q6r1">indéfiniment</label><br/>
<input style="margin-top:2%;" type="radio" id="q6r2" name="q6" value="False">
<label style="margin-left:1%;" for="q6r2">10 fois</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q6r3" name="q6" value="False">
<label style="margin-left:1%;" for="q6r3">11 fois</label><br/>

<!-- Question 7 -->
<label for="q7"><em>Question 7 :</em> la liste suivante va rajouter l'élément 'Monday' :</label>
<pre><code class="language-python">liste = ['Tuesday', 'Wednesday', 'Thursday']
liste.append('Monday')</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q7r1" name="q7" value="True">
<label style="margin-left:1%;" for="q7r1">en fin de liste</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r2" name="q7" value="False">
<label style="margin-left:1%;" for="q7r2">en début de liste</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q7r3" name="q7" value="False">
<label style="margin-left:1%;" for="q7r3">engendrer un message d'erreurs</label><br/>

<!-- Question 8 -->
<label for="q8"><em>Question 8 :</em> le code suivant va afficher :</label>
<pre><code class="language-python">chaine = 'bonjour'
print(chaine.capitalize)</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q8r1" name="q8" value="True">
<label style="margin-left:1%;" for="q8r1">&ltbuilt-in method capitalize of str object at 0x1073b0110&gt</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r2" name="q8" value="False">
<label style="margin-left:1%;" for="q8r2">Bonjour</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q8r3" name="q8" value="False">
<label style="margin-left:1%;" for="q8r3">BONJOUR</label><br/>

<!-- Question 9 -->
<label for="q9" style="margin-top:5%;"><em>Question 9 :</em> le code suivant va afficher :</label>
<pre><code class="language-python">liste = ['tuesday', 'wednesday', 'thursday']
print(liste.capitalize())</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q9r1" name="q9" value="False">
<label style="margin-left:1%;" for="q9r1">['Tuesday', 'Wednesday', 'Thursday']</label><br/>
<input style="margin-top:2%;" type="radio" id="q9r2" name="q9" value="False">
<label style="margin-left:1%;" for="q9r2">['TUESDAY', 'WEDNESDAY', 'THURSDAY']</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q9r3" name="q9" value="True">
<label style="margin-left:1%;" for="q9r3">AttributeError: 'list' object has no attribute 'capitalize'</label><br/>

<!-- Question 10 -->
<label for="q10"><em>Question 10 :</em> le code suivant va afficher :</label>
<pre><code class="language-python">x = 10
y = 11
x = y
y = 12
print(x)</code></pre><br/>
<input style="margin-top:2%;" type="radio" id="q10r1" name="q10" value="True">
<label style="margin-left:1%;" for="q10r1">11</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r2" name="q10" value="False">
<label style="margin-left:1%;" for="q10r2">12</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q10r3" name="q10" value="False">
<label style="margin-left:1%;" for="q10r3">&ltbuilt-in method capitalize of str object at 0x1073b0110&gt</label><br/>

<button class='bouton' name="validerFractions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>
