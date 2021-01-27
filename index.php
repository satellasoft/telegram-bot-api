<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SatellaSoft Telegram Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .max-width {
            max-width: 800px;
            width: 100%;
        }

        body {
            background-color: #111;
        }

        .box {
            margin: 0 auto;
            padding: 10px;
            margin-top: 10%;
            text-align: center;
            background-color: #3d3d3d;
        }

        .box h1 {
            color: #fff;
        }

        textarea {
            width: 100%;
            height: 100px;
        }
    </style>
</head>

<body>

    <div class="max-width box">
        <h1>SatellaSoft Telegram Tutorial</h1>

        <textarea clas="form-control" placeholder="Insira a sua mensagem aqui." id="txtMensagem"></textarea>

        <button type="button" class="bttn btn-success w-100" id="btnEnviar">Enviar</button>
    </div>

    <script src="script.js"></script>
</body>

</html>