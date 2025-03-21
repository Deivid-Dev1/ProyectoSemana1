document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); 

   
    let nombre = document.querySelector('input[name="nombre"]').value.trim();
    let apellido = document.querySelector('input[name="apellido"]').value.trim();
    let nacimiento = document.querySelector('input[name="nacimiento"]').value;
    let correo = document.querySelector('input[name="correo"]').value.trim();
    let telefono = document.querySelector('input[name="telefono"]').value.trim();
    let imagen = document.querySelector('input[name="imagen"]').files[0];

 
    if (nombre === '') {
        alert('Por favor, ingresa tu nombre.');
        return;
    }

    if (apellido === '') {
        alert('Por favor, ingresa tu apellido.');
        return;
    }

    if (nacimiento === '') {
        alert('Por favor, ingresa tu fecha de nacimiento.');
        return;
    }

    if (correo === '' || !correo.includes('@')) {
        alert('Por favor, ingresa un correo electrónico válido.');
        return;
    }

    if (telefono === '' || isNaN(telefono)) {
        alert('Por favor, ingresa un número de teléfono válido.');
        return;
    }
    if (!imagen) {
        alert('Por favor, selecciona una imagen.');
        return;
    }

    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!allowedTypes.includes(imagen.type)) {
        alert('Solo se permiten archivos de tipo JPEG, PNG o GIF.');
        return;
    }

    
    this.submit();
});