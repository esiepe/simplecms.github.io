document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            if (name === '' || email === '') {
                alert('Please fill out all fields');
            } else {
                alert('Form submitted successfully');
                form.reset();
            }
        });
    }
});
