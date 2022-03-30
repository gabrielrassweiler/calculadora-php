<?php

include './src/operacoes.php';

session_start();
$classResult = new operacoes();

if (isset($_POST['operadores'])) {
    $classResult->carregaOperadores();
}

if (isset($_POST['limpar'])) {
    $classResult->limpaInformacoes();
}

if (isset($_POST['resultado'])) {
    $classResult->carregaResultado();
}

if (isset($_POST['valores'])) {
    $classResult->carregaValores();
}

?>

<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <style>
        body {
            text-align: center;
            position: absolute;
            width:100%;
            background-color: #f2f2f2;
        }

        .form {
            display: inline-block;
            position: relative;
            margin-top: 200px;
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            border-radius: 6px;
        }
        .input {
            width: 70px;
            height: 60px;
            margin: 3px;
            cursor: pointer;
        }
        .input:active {
            background-color: #cbcbcb;
            border: 1px solid black;
        }

        .table {
            margin: 10px;
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
        }

        .visor {
            border: 1px solid black;
            height: 20px;
            text-align:right;
            padding: 15px;
            width: 98%;
            margin-left: 3px;
            border-radius: 3px;
            margin-bottom: 5px;
            font-size: 18px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .paragrafo {
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            margin: 10px;
            text-shadow: 1px 1px gray;
        }
    </style>
    <form method="POST" class="form">
        <table class="table">
            <tr>
                <td><p class="paragrafo">Calculadora</p></td>
            </tr>
            <tr>
                <td>
                    <input type="text" disabled class="visor" value="<?php echo $_SESSION['visor']; ?>"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="input" type="submit" value="7" name="valores">
                    <input class="input" type="submit" value="8" name="valores">
                    <input class="input" type="submit" value="9" name="valores">
                    <input class="input" type="submit" value="+" name="operadores">
                </td>
            </tr>
                <td>
                    <input class="input" type="submit" value="4" name="valores">
                    <input class="input" type="submit" value="5" name="valores">
                    <input class="input" type="submit" value="6" name="valores">
                    <input class="input" type="submit" value="-" name="operadores">
                </td>
            </tr>
            <tr>
                <td>
                    <input class="input" type="submit" value="1" name="valores">
                    <input class="input" type="submit" value="2" name="valores">
                    <input class="input" type="submit" value="3" name="valores">
                    <input class="input" type="submit" value="*" name="operadores">
                </td>
            </tr>
                <td>
                    <input class="input" type="submit" value="0" name="valores">
                    <input class="input" type="submit" value="C" name="limpar">
                    <input class="input" type="submit" value="/" name="operadores">
                    <input class="input" type="submit" value="=" name="resultado">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>