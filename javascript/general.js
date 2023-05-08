/**
 * Gets the respective elements and changes their theme based on the click from the radio button
 */
function mode(){
    let radioBTN = document.getElementById("flexSwitchCheckDefault");
    let bar = document.getElementById("bar");
    let divs = document.querySelectorAll(".divs"); 
    let buttons = document.querySelectorAll('.btn');
    let modeLabel = document.getElementById('mode-label');
    if(radioBTN.checked){
        lightMode(bar, divs, buttons, modeLabel);
    }else{
        darkMode(bar, divs, buttons, modeLabel);
    }
}

function lightMode(bar, divs, buttons, modeLabel){
    document.body.setAttribute("data-bs-theme","light");
    bar.setAttribute("data-bs-theme","light");
    bar.setAttribute("class", "navbar bg-light");
    for(let i = 0; i < divs.length; i++){
        divs[i].setAttribute("data-bs-theme","light");
        divs[i].classList.remove("text-white");
    }
    for(let i = 0; i < buttons.length; i++){
        buttons[i].classList.remove("btn-dark");
        buttons[i].classList.add('btn-light');
    }
    modeLabel.innerHTML = 'Light Mode';
}

function darkMode(bar, divs, buttons, modeLabel){
    document.body.setAttribute("data-bs-theme","dark");
    bar.setAttribute("data-bs-theme","dark");
    bar.setAttribute("class", "navbar bg-dark");
    for(let i = 0; i < divs.length; i++){
        divs[i].setAttribute("data-bs-theme","dark");
        divs[i].classList.add("text-white");
    }
    for(let i = 0; i < buttons.length; i++){
        buttons[i].classList.remove("btn-light");
        buttons[i].classList.add('btn-dark');
    }
    modeLabel.innerHTML = 'Dark Mode';
}

