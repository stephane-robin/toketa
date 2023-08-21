/* SCRIPT FOR TIME MANAGEMENT */

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  //var s = today.getSeconds();
  m = checkTime(m);
  //s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m; //+ ":" + s;
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

function afficherMinutes(temps){
  return Math.floor(temps / 60);
}

function afficherSecondes(temps){
  return temps % 60;
}

function start_timer(n){
  var timeleft = n*10;
  
  var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
      clearInterval(downloadTimer);
      document.getElementById("countdown").innerHTML = "&#9200; Time's up";
      
    }   
    else {
      document.getElementById("countdown").innerHTML = afficherMinutes(timeleft) + " : " + afficherSecondes(timeleft);
      if (n == 18){
        document.getElementById("progressBar3").value = n*10 - timeleft;
      }
      else if (n == 36){
        document.getElementById("progressBar6").value = n*10 - timeleft;
      }
      else {
        document.getElementById("progressBar9").value = n*10 - timeleft;
      }       
    }
    timeleft -= 1;
  }, 1000);
}

function start_session($minutesRestantes){
  var timeleft = $minutesRestantes*6*10;
  
  var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
      clearInterval(downloadTimer);
      document.getElementById("timer_session").innerHTML = "&#9200; Time's up";
      
    }   
    else {
      $decompteTemps = afficherMinutes(timeleft);
      document.getElementById("timer_session").innerHTML = $decompteTemps + " minutes";    
    }
    timeleft -= 1;
  }, 1000);
  return $decompteTemps;
}


/* SCRIPT FOR HIDING A SECTION */

function affichageConditionnel(bouton, id) {
    var div = document.getElementById(id);
    // si le div est masqué, on l'affiche et on change le contenu du bouton
    if(div.style.display=="none") {
        div.style.display = "block";
        bouton.innerHTML = "Cacher la solution";
    // s'il est visible, on le masque et on change le contenu du bouton
    } else {
        div.style.display = "none";
        bouton.innerHTML = "Voir la solution";
    }
}


/* SCRIPT FOR SLIDE SHOW */ 

function showSlides() {
  let slideIndex = 0;

  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}


/* QUESTIONNAIRE UNE SEULE QUESTION */

function questionnaireUnique(question_nmr, options_nmr, commentaire_nmr, submit_nmr){
  const questionElement = document.getElementById('question');
  const optionsForm = document.getElementById('options-form');
  const commentaireElement = document.getElementById('commentaire');
  const submitButton = document.getElementById('submit-btn');

  function displayQuestion() {
      
      questionElement.textContent = questionsData.question;
      optionsForm.innerHTML = '';
      commentaireElement.innerHTML = '';

      questionsData.options.forEach((option, optionIndex) => {
          const input = document.createElement('input');
          input.type = 'radio';
          input.name = 'answer';
          input.value = optionIndex;
          input.id = `option-${optionIndex}`;
          const label = document.createElement('label');
          label.textContent = option;
          label.setAttribute('for', `option-${optionIndex}`);
          const lineBreak = document.createElement('br');
          optionsForm.appendChild(input);
          optionsForm.appendChild(label);
          optionsForm.appendChild(lineBreak);

      });
      submitButton.disabled = false;
  }

  function validateAnswer() {
      const selectedAnswer = optionsForm.querySelector('input[name="answer"]:checked');
      if (selectedAnswer === null) {
          return;
      }

      submitButton.disabled = true;

      const selectedIndex = parseInt(selectedAnswer.value);
      const correctIndex = questionsData.correctIndex;
      const options = optionsForm.querySelectorAll('input[name="answer"]');

      if (selectedIndex === correctIndex) {
          options[selectedIndex].nextElementSibling.classList.add('couleur_reponseCorrecte');
      } 
      else {
          options[selectedIndex].nextElementSibling.classList.add('couleur_reponseIncorrecte');
          options[correctIndex].nextElementSibling.classList.add('couleur_reponseCorrecte');
      }

      commentaireElement.innerHTML = questionsData.commentaire;

      for (let i = 0; i < options.length; i++) {
          options[i].disabled = true;
      }
  }

  submitButton.addEventListener('click', validateAnswer);
  displayQuestion();
}

function testJS(){
  console.log('TEST');
}


