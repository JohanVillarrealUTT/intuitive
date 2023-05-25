<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }

        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        ul {
            margin-bottom: 10px;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 5px;
        }

        a {
            color: #0066cc;
        }

        .footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #dddddd;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Correo de Contacto</h1>
        <p>Estimado(a) {{ $contact['nombre'] }},</p>
        <p>Gracias por contactarnos. Hemos recibido su mensaje y nos pondremos en contacto con usted lo antes posible.</p>
        <p>Detalles del mensaje:</p>
        <ul>
            <li>Nombre: {{ $contact['nombre'] }}</li>
            <li>Teléfono: {{ $contact['telefono'] }}</li>
            <li>Correo electrónico: {{ $contact['correo'] }}</li>
            <li>Tiempo de experiencia en área de calidad: {{ $contact['experiencia'] }}</li>
            <li>Puestos en áreas de calidad: {{ $contact['puestos'] }}</li>
            <li>Nivel de inglés: {{ $contact['ingles'] }}</li>
        </ul>
        <p><a href="https://app.smartsheet.com/b/publish?EQBCT=34a045a8aa6d402fa0f25c87e99235f3">Entra al siguiente enlace</a></p>
        <p>Si tiene alguna pregunta adicional, no dude en contactarnos.</p>
        <div class="footer">
            <p>Atentamente,</p>
            <p>Tu empresa</p>
        </div>
    </div>
</body>
</html>
