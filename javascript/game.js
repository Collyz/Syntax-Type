const options = document.querySelectorAll('.lang');

//Retrieve Java syntax words from JSON
let javaWords = [];
fetch('javascript/syntax-words/java-syntax.json')
  .then(response => response.json())
  .then(data => {
    javaWords = data.javaWords; //Store the syntax
  }).catch(error => console.error(error));

//Retrieve Python syntax words from JSON
let pythonWords = [];
fetch('javascript/syntax-words/python-syntax.json')
  .then(response => response.json())
  .then(data => {
    pythonWords = data.pythonWords; //Store the syntax
  }).catch(error => console.error(error));

//Retrieve C++ syntax words from JSON
let cWords = [];
fetch('javascript/syntax-words/c++-syntax.json')
  .then(response => response.json())
  .then(data => {
    cWords = data.cWords; //Store the syntax
  }).catch(error => console.error(error));


let selectedTime = document.getElementById('timer').textContent;
function generatePrompt(){
    let text = document.getElementById('typefield');
    text.innerHTML = '';
    for(let i = 0; i < options.length; i++){
        if(options[i].type === 'radio'){
            if(options[i].checked && options[i].id == 'java'){
                javaText().split('').forEach(character =>{
                    let characterSpan = document.createElement('span');
                    characterSpan.innerText = character;
                    text.appendChild(characterSpan);
                });
            }
            if(options[i].checked && options[i].id == 'python'){
                pythonText().split('').forEach(character =>{
                    let characterSpan = document.createElement('span');
                    characterSpan.innerText = character;
                    text.appendChild(characterSpan);
                });
            }
            if(options[i].checked && options[i].id == 'c++'){
                cText().split('').forEach(character =>{
                    let characterSpan = document.createElement('span');
                    characterSpan.innerText = character;
                    text.appendChild(characterSpan);
                });
            }
        }
        document.getElementById('score').innerText = '';
    }
}

/**
 * Enables the user to type into the text field
 */
function makeUserInputAvailable(){
    inputElement.disabled = false;
    inputElement.value = '';
    document.getElementById('timer').innerText = selectedTime;
    clearInterval(countdownTimer);
}

/**
 * Accesses the array of java text and turns 20 random words from it
 * @returns A random string of java syntax
 */
function javaText(){
    let text = '';
    for(let i = 0; i < 20; i++){
        text += javaWords[getRandomInt(javaWords.length)] + " ";
    }
    makeUserInputAvailable();
    return text;
}

/**
 * Accesses the array of python text and turns 20 random words from it
 * @returns A random string of python syntax
 */
function pythonText(){
    let text = '';
    for(let i = 0; i < 20; i++){
        text += pythonWords[getRandomInt(pythonWords.length)] + " ";
    }
    makeUserInputAvailable();
    return text;
}

/**
 * Accesses the array of C++ text and turns 20 random words from it
 * @returns A random string of C++ syntax
 */
function cText(){
    let text = '';
    for(let i = 0; i < 20; i++){
        text += cWords[getRandomInt(cWords.length)] + " ";
    }
    makeUserInputAvailable();
    return text;
}

// TODO  
//function generateLeaderBoardPrompt(){}

let startTime;
let hasCalled = false;
let countdownTimer;
function timer(){
    if(!hasCalled){
        hasCalled = true;
        startTime = document.getElementById('timer').textContent;
        countdownTimer = setInterval(() => {
            startTime--;
            document.getElementById("timer").innerText = startTime;
            if (startTime <= 0) {
              clearInterval(countdownTimer);
            }
          }, 1000);
    }
}

/**
 * Stops the timer and resetst the hasCalled boolean so the timer can start again if needed
 */
function stopTimer(){
    clearInterval(countdownTimer);
    hasCalled = false;
}

//Time settings
let times = document.querySelectorAll('.time');
let timerLabel = document.getElementById('timer');
times.forEach(t => {
t.addEventListener('click', () => {
    timerLabel.textContent = `${t.textContent}`;
    selectedTime = document.getElementById('timer').textContent;
    });
});

/**
 * Gives a random integer between 0 (inclusive)
 * and max (exclusive)
 * @returns 
 */
function getRandomInt(max){
    return Math.floor(Math.random() * max);
}

// Set the average word length (in characters)
const AVG_WORD_LENGTH = 5;

// Get the start time
let startTime2 = new Date();

// Event listener for user input
const inputElement = document.getElementById('userInput');
let currentIndex = 0;
let correctChars = 0;
let incorrectChars = 0;

inputElement.addEventListener('input', () => {
    let text = document.getElementById('typefield');
    const arrayOfSyntax = text.querySelectorAll('span');
    const arrayValue = inputElement.value.split('');
    let correct = true;
    let correctCount = 0;
    arrayOfSyntax.forEach((characterSpan, index) => {
        const character = arrayValue[index];
        if (character == null) {
            characterSpan.classList.remove('correct');
            characterSpan.classList.remove('incorrect');
            correct = false;
        } else if (character === characterSpan.innerText) {
            characterSpan.classList.add('correct');
            characterSpan.classList.remove('incorrect');
            correctChars++;
            correctCount++;
        } else {
            characterSpan.classList.remove('correct');
            characterSpan.classList.add('incorrect');
            correct = false;
            incorrectChars++;
        }
        if(correctCount+1 == arrayOfSyntax.length){
            correct = true;
        }
    });
    if (correct || (document.getElementById('timer').textContent == '0')) {
        let scoreDisplay = document.getElementById('score');
        
        //Stop the timer
        stopTimer();

        //Disable user inputs
        inputElement.disabled = true;
        
        //Calculate accuracy
        let accuracy = (correctChars / (correctChars + incorrectChars)) * 100;
        let accuracyRounded = accuracy.toFixed(2);
        
        // Calculate words per minute
        let elapsedTime = (new Date() - startTime2) / 1000 / 60; // in minutes
        let wordsTyped = inputElement.value.length / AVG_WORD_LENGTH;
        let wpm = Math.round(wordsTyped / elapsedTime);

        // Display wpm and accuracy
        scoreDisplay.innerHTML = `Words Per Minute: ${wpm}<br>Accuracy: ${accuracyRounded}%`;
    }
});
