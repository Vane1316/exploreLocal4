document.addEventListener('DOMContentLoaded', function() {
    const recoverForm = document.getElementById('recover-form');

    recoverForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const email = document.getElementById('email').value.trim();

        if (email === '') {
            alert('Por favor, ingresa tu correo electrónico.');
            return;
        }

        // Aquí puedes agregar lógica adicional, como enviar el formulario o realizar una llamada AJAX.
        alert(`Hemos enviado instrucciones de recuperación de contraseña a ${email}.`);
        recoverForm.reset();
    });
});
