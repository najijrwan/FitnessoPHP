fetch('header.html')
    .then(response => response.text())
        .then(data => {
            document.getElementById('header').innerHTML = data;
});

(function(){
    emailjs.init("p2l6m-hfvW8aiMcai"); // Replace with your EmailJS Public API Key
})();

document.getElementById('welcomeForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Basic form validation
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    if (password !== confirmPassword) {
        alert('Passwords do not match');
        return;
    }

    const fullName = document.getElementById('fullName').value;
    const email = document.getElementById('email').value;

    const templateParams = {
        full_name: fullName,
        email: email,
    };

    emailjs.send('service_h97o1gb', 'template_wnp4etj', templateParams)
        .then(function(response) {
            alert('Welcome email sent successfully!');
        }, function(error) {
            alert('Failed to send email. Error: ' + JSON.stringify(error));
        });
});

