<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nowa wiadomość kontaktowa</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h2 {
                color: #333333;
            }
            p {
                color: #555555;
                line-height: 1.6;
            }
            .info {
                background-color: #f9f9f9;
                padding: 10px;
                border: 1px solid #eaeaea;
                margin-top: 20px;
                border-radius: 5px;
            }
            .info p {
                margin: 0;
                padding: 5px 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Nowa wiadomość kontaktowa</h2>
            <p>Otrzymano nową wiadomość od:</p>

            <div class="info">
                <p><strong>Imię:</strong> {{ $data["first_name"] }}</p>
                <p><strong>Nazwisko:</strong> {{ $data["last_name"] }}</p>
                <p><strong>Email:</strong> {{ $data["email"] }}</p>
                <p><strong>Telefon:</strong> {{ $data["phone"] }}</p>
            </div>

            <p><strong>Wiadomość:</strong></p>
            <p>{{ $data["message"] }}</p>

            <p style="margin-top: 30px; color: #888888">
                Ta wiadomość została wysłana za pośrednictwem formularza
                kontaktowego na Twojej stronie.
            </p>
        </div>
    </body>
</html>
