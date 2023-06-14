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
        <tbody>
            <?php
            $lista = array(
                'AC' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre">',
                    'unidade' => 'Acre',
                    'abreviacao' => 'AC',
                    'sede' => 'Rio Branco',
                    'area' => number_format(164122.2),
                    'populacao' => number_format(795145),
                    'densidade' => number_format(4.30),
                    'pib' => number_format(13622000),
                    'total' => number_format(0.2),
                    'percapita' => number_format(16953.46),
                    'idh' => number_format(0.663),
                    'afabetizacao' => number_format(86.9) . '&#8240;',
                    'mortkids' => number_format(17) . '&#8240;',
                    'expectativa' => number_format(73.9) . 'anos'
                ),
                'AL' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira do Alagoas">',
                    'unidade' => 'Alagoas',
                    'abreviacao' => 'AL',
                    'sede' => 'Maceió',
                    'area' => number_format(27767.7),
                    'populacao' => number_format(3327551),
                    'densidade' => number_format(108.61),
                    'pib' => number_format(46364000),
                    'total' => number_format(0.8),
                    'percapita' => number_format(13877.53),
                    'idh' => number_format(0.631),
                    'alfabetizacao' => number_format(80.6) . '&#8240;',
                    'mortkids' => number_format(19.5) . '&#8240;',
                    'expectativa' => number_format(71.6, 1) . 'anos'
                ),
                'AP' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Amapá">',
                    'unidade' => 'Amapá',
                    'abreviacao' => 'AP',
                    'sede' => 'Macapá',
                    'area' => number_format(142814.6),
                    'populacao' => number_format(756500),
                    'densidade' => number_format(4.16),
                    'pib' => number_format(13861000),
                    'total' => number_format(0.2),
                    'percapita' => number_format(18079.54),
                    'idh' => number_format(0.708),
                    'alfabetizacao' => number_format(95) . '%',
                    'mortkids' => number_format(23.2) . '&#8240;',
                    'expectativa' => number_format(73.9) . 'anos'
                ),
                'AM' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas">',
                    'unidade' => 'Amazonas',
                    'abreviacao' => 'AM',
                    'sede' => 'Manaus',
                    'area' => number_format(1570745.7),
                    'populacao' => number_format(3893763),
                    'densidade' => number_format(2.05),
                    'pib' => number_format(86560000),
                    'total' => number_format(1.4),
                    'percapita' => number_format(21978.95),
                    'idh' => number_format(0.674),
                    'alfabetizacao' => number_format(93.1) . '&#8240;',
                    'mortkids' => number_format(18.2) . '&#8240;',
                    'expectativa' => number_format(71.9) . 'anos'
                ),
                'BA' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia">',
                    'unidade' => 'Bahia',
                    'abreviacao' => 'BA',
                    'sede' => 'Salvador',
                    'area' => number_format(564692.7),
                    'populacao' => number_format(15150143),
                    'densidade' => number_format(24.46),
                    'pib' => number_format(245025000),
                    'total' => number_format(4.1),
                    'percapita' => number_format(16115.89),
                    'idh' => number_format(0.660),
                    'alfabetizacao' => number_format(87) . '&#8240;',
                    'mortkids' => number_format(17.3) . '&#8240;',
                    'expectativa' => number_format(73.5) . 'anos'
                ),
                'CE' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg" alt="Bandeira do Ceará">',
                    'unidade' => 'Ceará',
                    'abreviacao' => 'CE',
                    'sede' => 'Fortaleza',
                    'area' => number_format(148825.6),
                    'populacao' => number_format(8867448),
                    'densidade' => number_format(54.40),
                    'pib' => number_format(130621000),
                    'total' => number_format(2.2),
                    'percapita' => number_format(14669.14),
                    'idh' => number_format(0.682),
                    'alfabetizacao' => number_format(84.8) . '&#8240;',
                    'mortkids' => number_format(14.4) . '&#8240;',
                    'expectativa' => number_format(73.8) . 'anos'
                ),
                'DF' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Distrito Federal">',
                    'unidade' => 'Distrito Federal',
                    'abreviacao' => 'DF',
                    'sede' => 'Brasília',
                    'area' => number_format(5822.1),
                    'populacao' => number_format(2867869),
                    'densidade' => number_format(400.73),
                    'pib' => number_format(215613000),
                    'total' => number_format(3.6),
                    'percapita' => number_format(73971.05),
                    'idh' => number_format(0.824),
                    'alfabetizacao' => number_format(97.4) . '&#8240;',
                    'mortkids' => number_format(10.5) . '&#8240;',
                    'expectativa' => number_format(78.1) . 'anos'
                ),
                'ES' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Espírito Santos">',
                    'unidade' => 'Espírito Santos',
                    'abreviacao' => 'ES',
                    'sede' => 'Vitória',
                    'area' => number_format(46077.5),
                    'populacao' => number_format(3894899),
                    'densidade' => number_format(73.97),
                    'pib' => number_format(120363000),
                    'total' => number_format(2),
                    'percapita' => number_format(30627.45),
                    'idh' => number_format(0.740),
                    'alfabetizacao' => number_format(93.8) . '&#8240;',
                    'mortkids' => number_format(8.8) . '&#8240;',
                    'expectativa' => number_format(78.2) . 'anos'
                ),
                'GO' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg" alt="Bandeira do Goiás">',
                    'unidade' => 'Goiás',
                    'abreviacao' => 'GO',
                    'sede' => 'Goiânia',
                    'area' => number_format(340086.7),
                    'populacao' => number_format(6551322),
                    'densidade' => number_format(16.52),
                    'pib' => number_format(173632000),
                    'total' => number_format(2.9),
                    'percapita' => number_format(26265.32),
                    'idh' => number_format(0.735),
                    'alfabetizacao' => number_format(93.5) . '&#8240;',
                    'mortkids' => number_format(14.9) . '&#8240;',
                    'expectativa' => number_format(74.2) . 'anos'
                ),
                'MA' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg" alt="Bandeira do Maranhão">',
                    'unidade' => 'Maranhão',
                    'abreviacao' => 'MA',
                    'sede' => 'São Luís',
                    'area' => number_format(331983.3),
                    'populacao' => number_format(6861924),
                    'densidade' => number_format(18.38),
                    'pib' => number_format(78475000),
                    'total' => number_format(1.3),
                    'percapita' => number_format(11366.23),
                    'idh' => number_format(0.639),
                    'alfabetizacao' => number_format(83.3) . '&#8240;',
                    'mortkids' => number_format(21.3) . '&#8240;',
                    'expectativa' => number_format(70.6) . 'anos'
                ),
                'MT' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso">',
                    'unidade' => 'Mato Grosso',
                    'abreviacao' => 'MT',
                    'sede' => 'Cuiabá',
                    'area' => number_format(903357.9),
                    'populacao' => number_format(3236578),
                    'densidade' => number_format(3.10),
                    'pib' => number_format(107418000),
                    'total' => number_format(1.8),
                    'percapita' => number_format(32894.96),
                    'idh' => number_format(0.725, 3, ','),
                    'mortkids' => number_format(16.9) . '&#8240;',
                    'expectativa' => number_format(74.2) . 'anos'
                ),
                'MS' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul">',
                    'unidade' => 'Mato Grosso do Sul',
                    'abreviacao' => 'MS',
                    'sede' => 'Campo Grande',
                    'area' => number_format(357125.0),
                    'populacao' => number_format(2630098),
                    'densidade' => number_format(6.34),
                    'pib' => number_format(83082000),
                    'total' => number_format(1.4),
                    'percapita' => number_format(31337.22),
                    'idh' => number_format(0.729),
                    'alfabetizacao' => number_format(93.7) . '&#8240;',
                    'mortkids' => number_format(14.0) . '&#8240;',
                    'expectativa' => number_format(75.5) . 'anos'
                ),
                'MG' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais">',
                    'unidade' => 'Minas Gerais',
                    'abreviacao' => 'MG',
                    'sede' => 'Belo Horizonte',
                    'area' => number_format(586528.3),
                    'populacao' => number_format(20777672),
                    'densidade' => number_format(32.79),
                    'pib' => number_format(519326000),
                    'total' => number_format(8.7),
                    'percapita' => number_format(24884.94),
                    'idh' => number_format(0.731),
                    'alfabetizacao' => number_format(93.8) . '&#8240;',
                    'mortkids' => number_format(10.9) . '&#8240;',
                    'expectativa' => number_format(77.2) . 'anos'
                ),
                'PA' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg" alt="Bandeira do Pará">',
                    'unidade' => 'Pará',
                    'abreviacao' => 'PA',
                    'sede' => 'Belém',
                    'area' => number_format(1247689.5),
                    'populacao' => number_format(8101180),
                    'densidade' => number_format(5.58),
                    'pib' => number_format(130883000),
                    'total' => number_format(2.2),
                    'percapita' => number_format(16009.98),
                    'idh' => number_format(0.646),
                    'alfabetizacao' => number_format(90.7) . '&#8240;',
                    'mortkids' => number_format(16.6) . '&#8240;',
                    'expectativa' => number_format(72.1) . 'anos'
                ),
                'PB' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg" alt="Bandeira da Paraíba">',
                    'unidade' => 'Paraíba',
                    'abreviacao' => 'PB',
                    'sede' => 'João Pessoa',
                    'area' => number_format(56439.8),
                    'populacao' => number_format(3950359),
                    'densidade' => number_format(63.71),
                    'pib' => number_format(56140000),
                    'total' => number_format(0.9),
                    'percapita' => number_format(14133.32),
                    'idh' => number_format(0.658),
                    'alfabetizacao' => number_format(83.7) . '&#8240;',
                    'mortkids' => number_format(16.1) . '&#8240;',
                    'expectativa' => number_format(73.2) . 'anos'
                ),
                'PR' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg" alt="Bandeira do Paraná">',
                    'unidade' => 'Paraná',
                    'abreviacao' => 'PR',
                    'sede' => 'Curitiba',
                    'area' => number_format(199314.9),
                    'populacao' => number_format(11112062),
                    'densidade' => number_format(51.48),
                    'pib' => number_format(376960000),
                    'total' => number_format(6.3),
                    'percapita' => number_format(33768.62),
                    'idh' => number_format(0.749),
                    'alfabetizacao' => number_format(95.5) . '&#8240;',
                    'mortkids' => number_format(9.3) . '&#8240;',
                    'expectativa' => number_format(77.1) . 'anos'
                ),
                'PE' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco">',
                    'unidade' => 'Pernambuco',
                    'abreviacao' => 'PE',
                    'sede' => 'Recife',
                    'area' => number_format(98311.6),
                    'populacao' => number_format(9297861),
                    'densidade' => number_format(85.58),
                    'pib' => number_format(156955000),
                    'total' => number_format(2.6),
                    'percapita' => number_format(16795.34),
                    'idh' => number_format(0.673),
                    'alfabetizacao' => number_format(87.2) . '&#8240;',
                    'mortkids' => number_format(12.7) . '&#8240;',
                    'expectativa' => number_format(73.9) . 'anos'
                ),
                'PI' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg" alt="Bandeira do Piauí">',
                    'unidade' => 'Piauí',
                    'abreviacao' => 'PI',
                    'sede' => 'Teserina',
                    'area' => number_format(251529.2),
                    'populacao' => number_format(3198185),
                    'densidade' => number_format(11.95),
                    'pib' => number_format(39148000),
                    'total' => number_format(0.7),
                    'percapita' => number_format(12218.51),
                    'idh' => number_format(0.64),
                    'alfabetizacao' => number_format(82.8) . '&#8240;',
                    'mortkids' => number_format(19.1) . '&#8240;',
                    'expectativa' => number_format(71.1) . 'anos'
                ),
                'RJ' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro">',
                    'unidade' => 'Rio de Janeiro',
                    'abreviacao' => 'RJ',
                    'sede' => 'Rio de Janeiro',
                    'area' => number_format(43696.1),
                    'populacao' => number_format(16497395),
                    'densidade' => number_format(352.05),
                    'pib' => number_format(659137000),
                    'total' => number_format(11),
                    'percapita' => number_format(39826.95),
                    'idh' => number_format(0.761),
                    'alfabetizacao' => number_format(97.3) . '&#8240;',
                    'mortkids' => number_format(11.5) . '&#8240;',
                    'expectativa' => number_format(76.2) . 'anos'
                ),
                'RN' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira do Rio Grande do Norte">',
                    'unidade' => 'Rio Grande do Norte',
                    'abreviacao' => 'RN',
                    'sede' => 'Natal',
                    'area' => number_format(52796.8),
                    'populacao' => number_format(3419550),
                    'densidade' => number_format(56.88),
                    'pib' => number_format(57250000),
                    'total' => number_format(1),
                    'percapita' => number_format(16631.86),
                    'idh' => number_format(0.684),
                    'alfabetizacao' => number_format(85.3) . '&#8240;',
                    'mortkids' => number_format(14.7) . '&#8240;',
                    'expectativa' => number_format(75.7) . 'anos'
                ),
                'RS' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira do Rio Grande do Sul">',
                    'unidade' => 'Rio Grande do Sul',
                    'abreviacao' => 'RS',
                    'sede' => 'Porto Alegre',
                    'area' => number_format(281748.5),
                    'populacao' => number_format(11228091),
                    'densidade' => number_format(38.49),
                    'pib' => number_format(381985000),
                    'total' => number_format(6.4),
                    'percapita' => number_format(33960.36),
                    'idh' => number_format(0.746),
                    'mortkids' => number_format(9.6) . '&#8240;',
                    'expectativa' => number_format(77.8) . 'anos'
                ),
                'RO' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg" alt="Bandeira de Rondônia">',
                    'unidade' => 'Rondônia',
                    'abreviacao' => 'RO',
                    'sede' => 'Porto Velho',
                    'area' => number_format(237576.2),
                    'populacao' => number_format(1755015),
                    'densidade' => number_format(6.46),
                    'pib' => number_format(36563000),
                    'total' => number_format(0.6),
                    'percapita' => number_format(20677.95),
                    'idh' => number_format(0.690, 3, ','),
                    'alfabetizacao' => number_format(93.3) . '&#8240;',
                    'mortkids' => number_format(20.0) . '&#8240;',
                    'expectativa' => number_format(71.3) . 'anos'
                ),
                'RR' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima">',
                    'unidade' => 'Roraima',
                    'abreviacao' => 'RR',
                    'sede' => 'Boa Vista',
                    'area' => number_format(224299.0),
                    'populacao' => number_format(500826),
                    'densidade' => number_format(1.74),
                    'pib' => number_format(10354000),
                    'total' => number_format(0.2),
                    'percapita' => number_format(20476.71),
                    'idh' => number_format(0.707),
                    'alfabetizacao' => number_format(93.4) . '&#8240;',
                    'mortkids' => number_format(17.2) . '&#8240;',
                    'expectativa' => number_format(71.5) . 'anos'
                ),
                'SC' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="Bandeira de Santa Catarina">',
                    'unidad' => 'Santa Catarina',
                    'abreviacao' => 'SC',
                    'sede' => 'Florianópolis',
                    'area' => number_format(95346.2),
                    'populacao' => number_format(6734568),
                    'densidade' => number_format(61.53),
                    'pib' => number_format(249073000),
                    'total' => number_format(4.2),
                    'percapita' => number_format(36525.28),
                    'idh' => number_format(0.77),
                    'alfabetizacao' => number_format(97.2) . '&#8240;',
                    'mortkids' => number_format(9.2) . '&#8240;',
                    'expectativa' => number_format(79.1) . 'anos'
                ),
                'SP' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg" alt="Bandeira de São Paulo">',
                    'unidade' => 'São Paulo',
                    'abreviacao' => 'SP',
                    'sede' => 'São Paulo',
                    'area' => number_format(248209.4),
                    'populacao' => number_format(44169350),
                    'densidade' => number_format(162.93),
                    'pib' => number_format(1939890000),
                    'total' => number_format(32.4),
                    'percapita' => number_format(43694.68),
                    'idh' => number_format(0.783),
                    'alfabetizacao' => number_format(97.2) . '&#8240;',
                    'mortkids' => number_format(9.9) . '&#8240;',
                    'expectativa' => number_format(78.1) . 'anos'
                ),
                'SE' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" alt="Bandeira de Sergipe">',
                    'unidade' => 'Sergipe',
                    'abreviacao' => 'SE',
                    'sede' => 'Aracaju',
                    'area' => number_format(21910.3),
                    'populacao' => number_format(2227294),
                    'densidade' => number_format(89.81),
                    'pib' => number_format(38554000),
                    'total' => number_format(0.6),
                    'percapita' => number_format(17189.28),
                    'idh' => number_format(0.665),
                    'alfabetizacao' => number_format(85.3) . '&#8240;',
                    'mortkids' => number_format(16.2) . '&#8240;',
                    'expectativa' => number_format(72.7) . 'anos'
                ),
                'TO' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg" alt="Bandeira do Tocantins">',
                    'unidade' => 'Tocantins',
                    'abreviacao' => 'TO',
                    'sede' => 'Palmas',
                    'area' => number_format(277620.9),
                    'populacao' => number_format(1502759),
                    'densidade' => number_format(4.70),
                    'pib' => number_format(28930000),
                    'total' => number_format(0.5),
                    'percapita' => number_format(19094.16),
                    'idh' => number_format(0.699),
                    'alfabetizacao' => number_format(89.6) . '&#8240;',
                    'mortkids' => number_format(15.8) . '&#8240;',
                    'expectativa' => number_format(73.4) . 'anos'
                )
            );

            foreach ($lista as $chave => $valor) {
                echo "<tr><td>{$lista[$chave]['bandeira']}</td>";
                echo "<td>{$lista[$chave]['unidade']}</td>";
                echo "<td>{$lista[$chave]['abreviacao']}</td>";
                echo "<td>{$lista[$chave]['sede']}</td>";
                echo "<td>{$lista[$chave]['area']}</td>";
                echo "<td>{$lista[$chave]['populacao']}</td>";
                echo "<td>{$lista[$chave]['densidade']}</td>";
                echo "<td>{$lista[$chave]['pib']}</td>";
                echo "<td>{$lista[$chave]['total']}</td>";
                echo "<td>{$lista[$chave]['percapita']}</td>";
                echo "<td>{$lista[$chave]['idh']}</td>";
                echo "<td>{$lista[$chave]['alfabetizacao']}</td>";
                echo "<td>{$lista[$chave]['mortkids']}</td>";
                echo "<td>{$lista[$chave]['expectativa']}</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>