<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
        <title>Painel</title>
    </head>

    <style>
        body {
            background-color: #111827;
        }
        .painel {
            margin: 0 auto;
            margin-top: 10%;
            border-radius: 5px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .menu{
            padding: 10px;
            display: flex;
            gap: 20px;
            justify-content: space-between;
            margin-top: 40px;
        }
        .pm-item{
            background-color: #111827;
            padding: 20px;
            border-radius: 5px;
        }
        .pm-item:hover{
            background-color: #E71D36;
            cursor: pointer;
        }
        .bg-bb-primary {
            background-color: #111827;
        }
        .bg-bb-secondary {
            background-color: #1f2937;
            width: 500px;
            padding: 50px;
        }
        * {
            color: #f1f1f1;
        }
    </style>

    <body>
        <div class="d-flex bg-bb-secondary painel">
            <div class="row">
                <h2>ATHENA</h2>
            </div>
            <div class="col-12 menu">
                <a href="{{ route('ficha.createfc') }}" class="pm-item">Ficha Cadastral</a>

                <a href="" class="pm-item">Ficha Funcional</a>
            </div>
        </div>
    </body>
</html>
