    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php-Badwords</title>
        <style>
            form {
                display: flex;
            }
        </style>
    </head>

    <body>
        <form action="results.php" method="GET">
            <input type="text" name="badword" placeholder="parola chiave">
            <textarea name="paragraph" placeholder="paragrafo"></textarea>
            <button type="submit" value="invia"> invia testo</button>
        </form>
    </body>

    </html>