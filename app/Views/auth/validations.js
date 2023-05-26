$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault(); // Evita que se envíe el formulario automáticamente

        // Obtén los valores de los campos de entrada
        var usuario = $('#usuario').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val(); // Corrige el ID del campo

        // Realiza las validaciones
        var errors = [];

        if (usuario.trim() === '') {
            errors.push('El nombre de usuario es obligatorio');
        }

        if (email.trim() === '') {
            errors.push('El correo electrónico es obligatorio');
        } else if (!isValidEmail(email)) {
            errors.push('El correo electrónico no es válido');
        }

        if (password.trim() === '') {
            errors.push('La contraseña es obligatoria');
        } else if (password.length < 6) {
            errors.push('La contraseña debe tener al menos 6 caracteres');
        }

        if (confirmPassword.trim() === '') {
            errors.push('Debes repetir nuevamente tu contraseña');
        } else if (password !== confirmPassword) {
            errors.push('Las contraseñas no coinciden');
        }

        // Muestra los mensajes de error o envía el formulario
        if (errors.length > 0) {
            // Mostrar los mensajes de error
            var errorMessage = '<ul>';
            errors.forEach(function(error) {
                errorMessage += '<li>' + error + '</li>';
            });
            errorMessage += '</ul>';

            $('#errorMessages').html(errorMessage);
        } else {
            // Envía el formulario al servidor
            this.submit();
        }
    });

    // Función para validar el formato del correo electrónico
    function isValidEmail(email) {
        // Utiliza una expresión regular para validar el formato del correo electrónico
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
