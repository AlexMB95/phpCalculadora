<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Calculadora PHP
        </title>
        <style type="text/css">
        
        .calc{
            width: 40%;
            background-color: grey;
            padding: 20px;
            border-radius: 5px;
            margin: auto;
            box-shadow: 2px 2px 2px 1px rgba(0,0,0,0.2);
        }
    </style>
    </head>
    <body class="calc">
        <div>
        <form method="post" action="app/test.php">
            <h1>Calculadora kaweii</h1>

            <label>Número 1</label>

            <input type ="text" size="5" name="num1" required>
            <br><br>

            <label>Número 2</label>

            <input type="text" size="5" name="num2" required>
            <br><br>

            Seleccione la operacion matemática
            <select name="opciones">
                <option>Suma</option>

                <option>Resta</option>

                <option>Multiplicación</option>

                <option>División</option>

            </select>
            <br><br>

            <input type="submit" name="calcular" value="Calcular">
        </form>
    </div> 
    </body>
</html>