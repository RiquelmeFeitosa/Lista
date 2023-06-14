<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintetica</title>
</head>
<body>
    <h1>Lista Sintetica das Unidades federativas do Brasil</h1>

    <table>
        <thead>
            <tr>
                <th>Bandeiras</th>
                <th>Unidade Federativa</th>
                <th>Abreviação</th>
                <th>Sede de Governo</th>
                <th>Área(km&#8322;)</th>
                <th>População(2014)</th>
                <th>Densidade(2005)</th>
                <th>PIB(2015)</th>
                <th>(&#37;Total)(2015)</th>
                <th>PIB per capita(R&#36;)(2015)</th>
                <th>IDH(2010)</th>
                <th>Alfabetização(2016)</th>
                <th>Mortalidade Infantil(2016)</th>
                <th>Expectativa de Vida(2016)</th>
            </tr>
        </thead>
    </table>

    <?php
    
    $lista = array(
        'AC' => array(
            'bandeira' => '<img width="50" src="https://pt.wikipedia.org/wiki/Ficheiro:Bandeira_do_Acre.svg" alt="AC">',
            'unidade' => 'Acre',
            'abreviacao' => 'AC',
            'sede' => 'Rio Branco',
            'area' => number_format(164122.2),
            'populacao' => 795145,
            'densidade' => 4.30,
            'pib' => 13622000,
            'total' => 0.2,
            'percapita' => 16953.46,
            'idh' => 0.663,
            'afabetizacao' => 86.9,
            'mortkids' => 17,
            'expectativa' => 73.9 . 'anos'
            )
    )
    ?>
</body>
</html>