<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="css/config.css">
    <script src="js/calc.js" defer></script>
    <title>Calculos </title>
</head>

<body>
    <div class="programa">
        <div class="menu">
            <h1>"Cálculos"</h1>
        </div>

        <div class="produto">
            <h3>Valor de Venda </h3>
            <input type="" id="vproduto" placeholder="Valor">
            <button onclick="vvenda();apagaForm()">Calcular</button>
        </div>

        <div class="juros">
            <h3 for="">Valor crédito</h3>

            <input type=" " id="valorparc" placeholder="Valor">
            <input type=" " id="nparce" placeholder="Parcelas">
            <button onclick="parcela();apagaForm()">Calcular</button>
        </div>

        <div class="porcentagem">
            <h3 for="">Porcentagem </h3>
            <input type=" " id="vporc" placeholder="Número">
            <input type=" " id="qporc" placeholder="%">
            <button onclick="vporc();apagaForm()">Calcular</button>
        </div>
        <div class="resultado">
            <h3>Resultados : </h3>
            <p id="resultado" class="resultado"> Resultados aqui !!! </p>


        </div>


    </div>

</body>

</html>
