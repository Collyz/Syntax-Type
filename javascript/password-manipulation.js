/**
 * Wait for the document to load first
 */
document.addEventListener('DOMContentLoaded', function() {
    const username1 = document.getElementById('username1');
    const username2 = document.getElementById('username2');
    const password1 = document.getElementById('password1');
    const password2 = document.getElementById('password2');
    const password3 = document.getElementById('password3');

    const fields = [username1, username2, password1, password2, password3];
    
    fields.forEach(field => {
        field.addEventListener('input', function(event){
        if(field.validity.patternMismatch){
            if(field.id === 'username1' || field.id === 'username2') {
                field.setCustomValidity('Must be between 5 and 35 characters and must only contain letters');
            } else if(field.id === 'password1' || field.id === 'password2' || field.id === 'password3') {
                field.setCustomValidity('Must be between 5 and 35 charactes and must only contain letters and number, no special characters');
            }
            }else{
                field.setCustomValidity('');
            }
        });
    });
    const form = document.getElementById('form2');
    form.addEventListener('submit', function(event) {
        if (password2.value !== password3.value) {
            event.preventDefault();
            alert('The passwords do not match');
        }
    });

});

/**
 * Shows/Hides the password
 */
function passwordToggle1() {
    let pass = document.getElementById("password1");
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