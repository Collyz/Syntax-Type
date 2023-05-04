const options = document.querySelectorAll('.lang');

const javaWords = [
    'byte',
    'short',
    'char',
    'String',
    'boolean',
    'null',
    'System.out.println();',
    'public',
    'static',
    'void',
    'main',
    'while()',
    'if()',
    'else',
    'Math.max();',
    'Math.min()',
    'Math.floor();',
    'Math.sqrt();',
    'Math.abs();',
    'Math.random();',
    'Math.ceil();',
    'Math.log();',
    'System.out.printf();',
    'System.out.print();',
    'System.out',
    'System.in',
    'int',
    'double',
    'float',
    'long',
    'Math.pow();',
    'Scanner.next();',
    'System.err.println();',
    'SplittableRandom();',
    'BigInteger();',
    'new',
    'SplittableRandom();',
    'args.length;',
    'ClassNotFoundException',
    'ArrayList<>()'
];

const python_words = [
    'str()',
    'int()',
    'float()',
    'type()',
    'global',
    'bool()',
    'True',
    'False',
    'list.sort()',
    'list.copy()',
    'list.insert()',
    'list.clear()',
    'tuple.count()',
    'tuple.index()',
    'set.difference()',
    'set.discard()',
    'dict.get()',
    'dict.keys()',
    'dict.popitem()',
    'dict.update()',
    'dict.values()',
    'import',
    'matplotlib',
    'os.remove()',
    'os.path.exists()',
    'f.write()',
    'f.close()',
    'f.read()',
    'numpy',
    'pandas',
    'input()',
    'print()',
    'open()',
    'range()',
    'elif',
    'random.randint(a,b)',
    'timeit()',
    'math.floor()',
    're.search()',
    'min()',
    'max()'
];


const cWords = [
    'main()',
    'int',
    'double',
    'char',
    'string',
    'bool',
    'const',
    'cout',
    'cin',
    'fstream();',
    'vector<>',
    'set<>',
    'struct{}',
    'int*',
    'double*',
    'char*',
    'string*',
    'bool*',
    'void',
    'delete',
    'mutable',
    'true',
    'false',
    'volatile',
    'register',
    'private',
    'goto',
    'inline',
    'explicit',
    'extern',
    'break',
    'static',
    'new',
    'floor();',
    'rand();',
    'pow();',
    'abs();',
    'log();',
    'log10();',
    'fmod();',
    'exp();'
];


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
    }
}

function javaText(){
    let text = '';
    for(let i = 0; i < 20; i++){
        text += javaWords[getRandomInt(40)] + " ";
    }
    return text;
}

function pythonText(){
    let text = '';
    for(let i = 0; i < 20; i++){
        text += python_words[getRandomInt(40)] + " ";
    }
    return text;
}

function cText(){
    let text = '';
    for(let i = 0; i < 20; i++){
        text += cWords[getRandomInt(40)] + " ";
    }
    return text;
}

// function generateLeaderBoardPrompt(){}

let startTime;
function timer(){
    startTime = document.getElementById('timer').value;
    let countdownTimer = setInterval(() => {
        timeLeft--;
        document.getElementById("timer").textContent = timeLeft;
        if (timeLeft <= 0) {
          clearInterval(countdownTimer);
        }
      }, 1000);
}

function getTimerTime(){
    return Math.floor((new Date() - startTime)/1000);
}

/**
 * Gives a random integer between 0 (inclusive)
 * and max (exclusive)
 * @returns 
 */
function getRandomInt(max){
    return Math.floor(Math.random() * max);
}

//Event listener for use input
const inputElement = document.getElementById('userInput');
inputElement.addEventListener('input', () =>{
    let text = document.getElementById('typefield');
    const arrayOfSyntax = text.querySelectorAll('span');
    const arrayValue = inputElement.value.split('');
    let correct = true;
    arrayOfSyntax.forEach((characterSpan, index) => {
        const character = arrayValue[index];
        if(character == null){
            characterSpan.classList.remove('correct');
            characterSpan.classList.remove('incorrect');
            correct = false;
        }else if(character === characterSpan.innerText){
            characterSpan.classList.add('correct');
            characterSpan.classList.remove('incorrect');
        } else{
            characterSpan.classList.remove('correct');
            characterSpan.classList.add('incorrect');
            correct = false;
        }
        if(correct){}
    });
});