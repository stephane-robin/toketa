const titreQuiz = document.getElementById('titreQuiz');
const questionElement = document.getElementById('question');
const optionsForm = document.getElementById('options-form');
const commentaireElement = document.getElementById('commentaire');
const nmrQuestionElement = document.getElementById('nmr_question');
const submitButton = document.getElementById('submit-btn');
const nextButton = document.getElementById('next-btn');

let currentQuestionIndex = 0;
let nbrePoints = 0;


function displayQuestion(index) {
    
    nmrQuestionElement.innerHTML = `Question ${index + 1}`;
    const currentQuestion = questionsData[index];
    questionElement.innerHTML = currentQuestion.question;
    optionsForm.innerHTML = '';
    commentaireElement.innerHTML = '';

    currentQuestion.options.forEach((option, optionIndex) => {
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
    nextButton.disabled = true;
}

function validateAnswer() {
    const selectedAnswer = optionsForm.querySelector('input[name="answer"]:checked');
    if (selectedAnswer === null) {
        return;
    }

    submitButton.disabled = true;

    const selectedIndex = parseInt(selectedAnswer.value);
    const correctIndex = questionsData[currentQuestionIndex].correctIndex;
    const options = optionsForm.querySelectorAll('input[name="answer"]');

    if (selectedIndex === correctIndex) {
        options[selectedIndex].nextElementSibling.classList.add('couleur_reponseCorrecte');
        nbrePoints++;
    } else {
        options[selectedIndex].nextElementSibling.classList.add('couleur_reponseIncorrecte');
        options[correctIndex].nextElementSibling.classList.add('couleur_reponseCorrecte');
    }
    commentaireElement.innerHTML = questionsData[currentQuestionIndex].commentaire;

    for (let i = 0; i < options.length; i++) {
        options[i].disabled = true;
    }
    nextButton.disabled = false;
}

function nextQuestion() {
    currentQuestionIndex++;
    if (currentQuestionIndex < questionsData.length) {
        displayQuestion(currentQuestionIndex);
        nextButton.disabled = true;
    } else {
        nmrQuestionElement.innerHTML = "Résultats";
        questionElement.textContent = 'Fin du Quiz. Votre taux de réussite : ' + Math.round(nbrePoints / questionsData.length * 100) + ' %';
        optionsForm.innerHTML = '';
        commentaireElement.innerHTML = '';
        nextButton.disabled = true;
    }
}

titreQuiz.innerHTML = `Quiz - ${titreQcm}`;
submitButton.addEventListener('click', validateAnswer);
nextButton.addEventListener('click', nextQuestion);
displayQuestion(currentQuestionIndex);

