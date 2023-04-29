function lightMode(){
    let radioBTN = document.getElementById("flexSwitchCheckDefault");
    let bar = document.getElementById("bar");
    let about = document.getElementById("about");
    let registerBtn = document.getElementById("register-btn");
    let playbtn = document.getElementById("play-btn");
    let modeLabel = document.getElementById('mode-label');
    if(radioBTN.checked){
        document.body.setAttribute("data-bs-theme","light");
        bar.setAttribute("data-bs-theme","light");
        bar.setAttribute("class", "navbar bg-light");
        about.setAttribute("data-bs-theme","light");
        about.classList.remove("text-white");
        registerBtn.classList.remove("btn-light");
        registerBtn.classList.add("btn-dark");
        playbtn.classList.remove("btn-light");
        playbtn.classList.add("btn-dark");
        modeLabel.innerHTML = 'Light Mode';
    }else{
        document.body.setAttribute("data-bs-theme","dark");
        bar.setAttribute("data-bs-theme","dark");
        bar.setAttribute("class", "navbar bg-dark");
        about.setAttribute("data-bs-theme","dark");
        about.classList.add("text-white");
        registerBtn.classList.remove("btn-dark");
        registerBtn.classList.add("btn-light");
        playbtn.classList.remove("btn-dark");
        playbtn.classList.add("btn-light");
        modeLabel.innerHTML = 'Dark Mode';
    }
}