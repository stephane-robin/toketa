function questionnaireUnique(nmr){
    const questionElement = document.getElementById('question-' + nmr);
    const optionsForm = document.getElementById('options_form-' + nmr);
    const commentaireElement = document.getElementById('commentaire-' + nmr);
    const submitButton = document.getElementById('submit_btn-' + nmr);

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