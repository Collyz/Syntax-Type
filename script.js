
/**
 * Gets the respective elements and changes their theme based on the click from the radio button
 */
function lightMode(){
    let radioBTN = document.getElementById("flexSwitchCheckDefault");
    let bar = document.getElementById("bar");
    let divs = document.querySelectorAll(".divs"); 
    let buttons = document.querySelectorAll('.btn');
    let modeLabel = document.getElementById('mode-label');
    if(radioBTN.checked){
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
    }else{
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
}

/**
 * Shows/Hides the password
 */
function passwordToggle1() {
    let pass = document.getElementById("password");
    let icon = document.getElementById('eye');
    if (pass.type == 'password') {
        pass.type = 'text';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye-fill');
    } else {
        pass.type = 'password';
        icon.classList.remove('bi-eye-fill');
        icon.classList.add('bi-eye-slash');
    }

}

function passwordToggle2(){
    let pass2 = document.getElementById("password2");
    let pass3 = document.getElementById("password3");
    let icon2 = document.getElementById('eye2');
    let icon3 = document.getElementById('eye3');
    if (pass2.type == 'password' || pass3.type == 'password'){
        pass2.type = 'text';
        pass3.type = 'text';
        icon2.classList.remove('bi-eye-slash');
        icon3.classList.remove('bi-eye-slash');
        icon2.classList.add('bi-eye-fill');
        icon3.classList.add('bi-eye-fill');
    }else{
        pass2.type='password';
        pass3.type='password';
        icon2.classList.remove('bi-eye-fill');
        icon2.classList.add('bi-eye-slash');
        icon3.classList.remove('bi-eye-fill');
        icon3.classList.add('bi-eye-slash');
    }
}