<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ Aula 1</title>
</head>

<body>
    <?php
        // 2. Crie um código em PHP que definido um array $arr de n números inteiros,
        //determinar a soma dos números pares. 
        $arrQuestao2 = array(1,2,3,4,5,6);
        $somaPares = 0;
        foreach($arrQuestao2 as $itemNumero){
            if($itemNumero % 2 === 0) $somaPares += $itemNumero;
        }
        echo "Questão 2 - Soma total dos pares: $somaPares </br>";
        
        // 3. Crie um código em PHP que dados dois números inteiros $x e $y positivos,
        //retornar o  máximo divisor comum entre eles usando o algoritmo de Euclides.
        $aux;
        $num1 = $_POST["numero1"] ?? " - ";
        $num2 = $_POST["numero2"] ?? " - ";
        //Deixa o num1 sempre com maior valor
        if($num2 > $num1){
            $num2 += $num1;
            $num1 = $num2 - $num1;
            $num2 -= $num1;
        }
        while($num2 != 0){
            $aux = $num2;
            $num2 = $num1 % $num2;
            $num1 = $aux;
        }
        echo "Questão 3 - MDC: $num1 <br>";
    ?>
    <form action="#" method="post">
        <input type="text" name="numero1" placeholder="Um nr para calcular mdc">
        <input type="text" name="numero2" placeholder="Outro nr para calcular mdc">
        <button type="submit">Calcular</button>
    </form>
    <?php
        //4. Crie um código em PHP que dado um array $arr contendo um número na base binária,
        //transformá-lo para a base decimal. 
        $arrQuestao4 = array(0,0,1,0);
        $potencia = count($arrQuestao4) - 1;
        $numeroCovertido = 0;
        foreach ($arrQuestao4 as $itemArray) {
            $numeroCovertido += $itemArray * pow(2, $potencia--);
        }
        echo "Questão 4 - Binário para decimal: $numeroCovertido<br>";

        //5. Crie um código em PHP que dado um array $arr ordenar seus elementos
        //em ordem  decrescente.
        $arrQuestao5 = array(35,70,1,9,6,25,12);
        rsort($arrQuestao5);
        echo "Questão 5 - Array ordenado decrescente: ";
        foreach($arrQuestao5 as $arrItensOrdenadosDesc) {
            echo "$arrItensOrdenadosDesc ";
        }
    ?>
</body>

</html>