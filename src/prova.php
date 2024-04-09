<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Pop-up con PHP</title>
    <style>
        /* Estilos para el pop-up */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #cccccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }
    </style>
</head>
<body>
    <!-- Botón para mostrar el pop-up -->
    <button onclick="mostrarPopup()">Mostrar Pop-up</button>

    <!-- Pop-up -->
    <div id="miPopup" class="popup">
        <h2>¡Este es un Pop-up con PHP!</h2>
        <p>¡Hola! Este es un ejemplo básico de un pop-up utilizando PHP.</p>
        <button onclick="cerrarPopup()">Cerrar</button>
    </div>

    <script>
        // Función para mostrar el pop-up
        function mostrarPopup() {
            document.getElementById('miPopup').style.display = 'block';
        }

        // Función para cerrar el pop-up
        function cerrarPopup() {
            document.getElementById('miPopup').style.display = 'none';
        }
    </script>
</body>
</html>
