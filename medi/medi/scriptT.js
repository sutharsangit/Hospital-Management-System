const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

document.getElementById('signInBtn').addEventListener('click', function() {
    // Define the file path
    var filePath = 'file:///C:/wamp64/www/docme/index.html';
    
    // Open the file in a new tab/window
    window.open(filePath,'_parent');
});