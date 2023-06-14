<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AnneTay - Lista Sintética de UFs </title>
</head>

<body>
<?php
  $syntheticlist = array(
    "AC" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg",
      "Unidade Federativa" => "Acre",
      "Abreviação" => "AC",
      "Sede do Governo" => "Rio Branco",
      "Área (km²)" => 164122.2,
      "População (2014)" => 795145,
      "Densidade (2005)" => 4.30,
      "PIB (2015)" => 13622000,
      "(% total) (2015)" => 0.2,
      "PIB per capita (R$) (2015)" => 16953.46,
      "IDH (2010)" => 0.663,
      "Alfabetização (2016)" => "86.9%",
      "Mortalidade Infatil (2016)" => "17.0%",
      "Expectativa de Vida (2016)" => "73.9 anos"
    ),
    "AL" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg",
      "Unidade Federativa" => "Alagoas",
      "Abreviação" => "AL",
      "Sede do Governo" => "Maceió",
      "Área (km²)" => 27767.7,
      "População (2014)" => 3327551,
      "Densidade (2005)" => 108.61,
      "PIB (2015)" => 46364000,
      "(% total) (2015)" => 0.8,
      "PIB per capita (R$) (2015)" => 13877.53,
      "IDH (2010)" => 0.631,
      "Alfabetização (2016)" => "80.6%",
      "Mortalidade Infatil (2016)" => "19.5%",
      "Expectativa de Vida (2016)" => "71.6 anos"
    ),
    "AP" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg",
      "Unidade Federativa" => "Amapá",
      "Abreviação" => "AP",
      "Sede do Governo" => "Macapá",
      "Área (km²)" => 142814.6,
      "População (2014)" => 756500,
      "Densidade (2005)" => 4.16,
      "PIB (2015)" => 13861000,
      "(% total) (2015)" => 0.2,
      "PIB per capita (R$) (2015)" => 18079.54,
      "IDH (2010)" => 0.708,
      "Alfabetização (2016)" => "95%",
      "Mortalidade Infatil (2016)" => "23.2%",
      "Expectativa de Vida (2016)" => "73,9 anos"
    ),
    "AM" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg",
      "Unidade Federativa" => "Amazonas",
      "Abreviação" => "AM",
      "Sede do Governo" => "Manaus",
      "Área (km²)" => 1570745.7,
      "População (2014)" => 3893763,
      "Densidade (2005)" => 2.05,
      "PIB (2015)" => 86560000,
      "(% total) (2015)" => 1.4,
      "PIB per capita (R$) (2015)" => 21978.95,
      "IDH (2010)" => 0.674,
      "Alfabetização (2016)" => "93.1%",
      "Mortalidade Infatil (2016)" => "18.2%",
      "Expectativa de Vida (2016)" => "71,9 anos"
    ),
    "BA" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg",
      "Unidade Federativa" => "Bahia",
      "Abreviação" => "BA",
      "Sede do Governo" => "Salvador",
      "Área (km²)" => 564692.7,
      "População (2014)" => 15150143,
      "Densidade (2005)" => 24.46,
      "PIB (2015)" => 245025000,
      "(% total) (2015)" => 4.1,
      "PIB per capita (R$) (2015)" => 16115.89,
      "IDH (2010)" => 0.660,
      "Alfabetização (2016)" => "87%",
      "Mortalidade Infatil (2016)" => "17,3%",
      "Expectativa de Vida (2016)" => "73,5 anos"
    ),
    "CE" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg",
      "Unidade Federativa" => "Ceará",
      "Abreviação" => "CE",
      "Sede do Governo" => "Fortaleza",
      "Área (km²)" => 148825.6,
      "População (2014)" => 8867448,
      "Densidade (2005)" => 54.40,
      "PIB (2015)" => 130621000,
      "(% total) (2015)" => 2.2,
      "PIB per capita (R$) (2015)" => 14669.14,
      "IDH (2010)" => 0.682,
      "Alfabetização (2016)" => "84.8%",
      "Mortalidade Infantil (2016)" => "14.4‰",
      "Expectativa de Vida (2016)" => "73.8 anos"
    ),
    "DF" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg",
      "Unidade Federativa" => "Distrito Federal",
      "Abreviação" => "DF",
      "Sede do Governo" => "Brasília",
      "Área (km²)" => 5822.1,
      "População (2014)" => 2867869,
      "Densidade (2005)" => 400.73,
      "PIB (2015)" => 215613000,
      "(% total) (2015)" => 3.6,
      "PIB per capita (R$) (2015)" => 73971.05,
      "IDH (2010)" => 0.824,
      "Alfabetização (2016)" => "97.4%",
      "Mortalidade Infantil (2016)" => "10.5‰",
      "Expectativa de Vida (2016)" => "78.1 anos"
    ),
    "ES" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg",
      "Unidade Federativa" => "Espírito Santo",
      "Abreviação" => "ES",
      "Sede do Governo" => "Vitória",
      "Área (km²)" => 46077.5,
      "População (2014)" => 3894899,
      "Densidade (2005)" => 73.97,
      "PIB (2015)" => 120363000,
      "(% total) (2015)" => 2.0,
      "PIB per capita (R$) (2015)" => 30627.45,
      "IDH (2010)" => 0.740,
      "Alfabetização (2016)" => "93.8%",
      "Mortalidade Infantil (2016)" => "8.8‰",
      "Expectativa de Vida (2016)" => "78.2 anos"
    ),
    "GO" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg",
      "Unidade Federativa" => "Goiás",
      "Abreviação" => "GO",
      "Sede do Governo" => "Goiânia",
      "Área (km²)" => 340086.7,
      "População (2014)" => 6551322,
      "Densidade (2005)" => 16.52,
      "PIB (2015)" => 173632000,
      "(% total) (2015)" => 2.9,
      "PIB per capita (R$) (2015)" => 26265.32,
      "IDH (2010)" => 0.735,
      "Alfabetização (2016)" => "93.5%",
      "Mortalidade Infantil (2016)" => "14.9‰",
      "Expectativa de Vida (2016)" => "74.2 anos"
    ),
    "MA" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg",
      "Unidade Federativa" => "Maranhão",
      "Abreviação" => "MA",
      "Sede do Governo" => "São Luís",
      "Área (km²)" => 331983.3,
      "População (2014)" => 6861924,
      "Densidade (2005)" => 18.38,
      "PIB (2015)" => 78475000,
      "(% total) (2015)" => 1.3,
      "PIB per capita (R$) (2015)" => 11366.23,
      "IDH (2010)" => 0.639,
      "Alfabetização (2016)" => "83.3%",
      "Mortalidade Infantil (2016)" => "21.3‰",
      "Expectativa de Vida (2016)" => "70.6 anos"
    ),
    "MT" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg",
      "Unidade Federativa" => "Mato Grosso",
      "Abreviação" => "MT",
      "Sede do Governo" => "Cuiabá",
      "Área (km²)" => 903357.9,
      "População (2014)" => 3236578,
      "Densidade (2005)" => 3.10,
      "PIB (2015)" => 107418000,
      "(% total) (2015)" => 1.8,
      "PIB per capita (R$) (2015)" => 32894.96,
      "IDH (2010)" => 0.725,
      "Alfabetização (2016)" => "93.5%",
      "Mortalidade Infantil (2016)" => "16.9‰",
      "Expectativa de Vida (2016)" => "74.2 anos"
    ),
    "MS" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg",
      "Unidade Federativa" => "Mato Grosso do Sul",
      "Abreviação" => "MS",
      "Sede do Governo" => "Campo Grande",
      "Área (km²)" => 357125.0,
      "População (2014)" => 2630098,
      "Densidade (2005)" => 6.34,
      "PIB (2015)" => 83082000,
      "(% total) (2015)" => 1.4,
      "PIB per capita (R$) (2015)" => 31337.22,
      "IDH (2010)" => 0.765,
      "Alfabetização (2016)" => "93.4%",
      "Mortalidade Infantil (2016)" => "14.9‰",
      "Expectativa de Vida (2016)" => "75.1 anos"
    ),
    "MG" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg",
      "Unidade Federativa" => "Minas Gerais",
      "Abreviação" => "MG",
      "Sede do Governo" => "Belo Horizonte",
      "Área (km²)" => 586522.1,
      "População (2014)" => 21168791,
      "Densidade (2005)" => 36.06,
      "PIB (2015)" => 471299000,
      "(% total) (2015)" => 7.9,
      "PIB per capita (R$) (2015)" => 22322.63,
      "IDH (2010)" => 0.731,
      "Alfabetização (2016)" => "91.4%",
      "Mortalidade Infantil (2016)" => "12.3‰",
      "Expectativa de Vida (2016)" => "76.6 anos"
    ),
    "PA" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg",
      "Unidade Federativa" => "Pará",
      "Abreviação" => "PA",
      "Sede do Governo" => "Belém",
      "Área (km²)" => 1247954.6,
      "População (2014)" => 8272724,
      "Densidade (2005)" => 6.53,
      "PIB (2015)" => 125971000,
      "(% total) (2015)" => 2.1,
      "PIB per capita (R$) (2015)" => 14502.98,
      "IDH (2010)" => 0.639,
      "Alfabetização (2016)" => "88.4%",
      "Mortalidade Infantil (2016)" => "20.4‰",
      "Expectativa de Vida (2016)" => "71.7 anos"
    ),
    "PB" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg",
      "Unidade Federativa" => "Paraíba",
      "Abreviação" => "PB",
      "Sede do Governo" => "João Pessoa",
      "Área (km²)" => 56585.0,
      "População (2014)" => 3996496,
      "Densidade (2005)" => 68.83,
      "PIB (2015)" => 57177000,
      "(% total) (2015)" => 1.0,
      "PIB per capita (R$) (2015)" => 14449.10,
      "IDH (2010)" => 0.683,
      "Alfabetização (2016)" => "84.4%",
      "Mortalidade Infantil (2016)" => "15.8‰",
      "Expectativa de Vida (2016)" => "74.1 anos"
    ),
    "PR" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg",
      "Unidade Federativa" => "Paraná",
      "Abreviação" => "PR",
      "Sede do Governo" => "Curitiba",
      "Área (km²)" => 199307.9,
      "População (2014)" => 10997462,
      "Densidade (2005)" => 53.75,
      "PIB (2015)" => 368991000,
      "(% total) (2015)" => 6.2,
      "PIB per capita (R$) (2015)" => 33262.89,
      "IDH (2010)" => 0.749,
      "Alfabetização (2016)" => "96.3%",
      "Mortalidade Infantil (2016)" => "9.7‰",
      "Expectativa de Vida (2016)" => "77.5 anos"
    ),
    "PE" => array(
      "Bandeira" =>  "https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg",
      "Unidade Federativa" =>  "Pernambuco",
      "Abreviação" =>  "PE",
      "Sede do Governo" =>  "Recife",
      "Área (km²)" =>  98311.6,
      "População (2014)" =>  9496294,
      "Densidade (2005)" =>  96.49,
      "PIB (2015)" =>  181850000,
      "(% total) (2015)" =>  3.1,
      "PIB per capita (R$) (2015)" =>  19367.45,
      "IDH (2010)" =>  0.694,
      "Alfabetização (2016)" =>  "90.7%",
      "Mortalidade Infantil (2016)" =>  "14.2‰",
      "Expectativa de Vida (2016)" =>  "73.9 anos"
    ),
    "PI" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg",
      "Unidade Federativa" => "Piauí",
      "Abreviação" => "PI",
      "Sede do Governo" => "Teresina",
      "Área (km²)" => 251577.7,
      "População (2014)" => 3264531,
      "Densidade (2005)" => 12.82,
      "PIB (2015)" => 46428100,
      "(% total) (2015)" => 0.8,
      "PIB per capita (R$) (2015)" => 14117.61,
      "IDH (2010)" => 0.639,
      "Alfabetização (2016)" => "86.7%",
      "Mortalidade Infantil (2016)" => "18.3‰",
      "Expectativa de Vida (2016)" => "70.8 anos"
    ),
    "RJ" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg",
      "Unidade Federativa" => "Rio de Janeiro",
      "Abreviação" => "RJ",
      "Sede do Governo" => "Rio de Janeiro",
      "Área (km²)" => 43780.2,
      "População (2014)" => 16718956,
      "Densidade (2005)" => 365.42,
      "PIB (2015)" => 671119000,
      "(% total) (2015)" => 11.2,
      "PIB per capita (R$) (2015)" => 40111.45,
      "IDH (2010)" => 0.761,
      "Alfabetização (2016)" => "93.8%",
      "Mortalidade Infantil (2016)" => "10.8‰",
      "Expectativa de Vida (2016)" => "76.7 anos"
    ),
    "RN" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg",
      "Unidade Federativa" => "Rio Grande do Norte",
      "Abreviação" => "RN",
      "Sede do Governo" => "Natal",
      "Área (km²)" => 52811.1,
      "População (2014)" => 3506853,
      "Densidade (2005)" => 66.34,
      "PIB (2015)" => 53883700,
      "(% total) (2015)" => 0.9,
      "PIB per capita (R$) (2015)" => 15305.40,
      "IDH (2010)" => 0.684,
      "Alfabetização (2016)" => "92.4%",
      "Mortalidade Infantil (2016)" => "13.3‰",
      "Expectativa de Vida (2016)" => "75.1 anos"
    ),
    "RS" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg",
      "Unidade Federativa" => "Rio Grande do Sul",
      "Abreviação" => "RS",
      "Sede do Governo" => "Porto Alegre",
      "Área (km²)" => 281730.2,
      "População (2014)" => 11329605,
      "Densidade (2005)" => 40.16,
      "PIB (2015)" => 374452000,
      "(% total) (2015)" => 6.3,
      "PIB per capita (R$) (2015)" => 33842.74,
      "IDH (2010)" => 0.746,
      "Alfabetização (2016)" => "96.5%",
      "Mortalidade Infantil (2016)" => "10.9‰",
      "Expectativa de Vida (2016)" => "77.8 anos"
    ),
    "RO" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg",
      "Unidade Federativa" => "Rondônia",
      "Abreviação" => "RO",
      "Sede do Governo" => "Porto Velho",
      "Área (km²)" => 237590.7,
      "População (2014)" => 1796460,
      "Densidade (2005)" => 7.57,
      "PIB (2015)" => 42952600,
      "(% total) (2015)" => 0.7,
      "PIB per capita (R$) (2015)" => 24702.80,
      "IDH (2010)" => 0.719,
      "Alfabetização (2016)" => "93.4%",
      "Mortalidade Infantil (2016)" => "17.4‰",
      "Expectativa de Vida (2016)" => "72.9 anos"
    ),
    "RR" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg",
      "Unidade Federativa" => "Roraima",
      "Abreviação" => "RR",
      "Sede do Governo" => "Boa Vista",
      "Área (km²)" => 224300.5,
      "População (2014)" => 652713,
      "Densidade (2005)" => 2.85,
      "PIB (2015)" => 12391300,
      "(% total) (2015)" => 0.2,
      "PIB per capita (R$) (2015)" => 19666.47,
      "IDH (2010)" => 0.725,
      "Alfabetização (2016)" => "96.1%",
      "Mortalidade Infantil (2016)" => "19.6‰",
      "Expectativa de Vida (2016)" => "72.4 anos"
    ),
    "SC" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg",
      "Unidade Federativa" => "Santa Catarina",
      "Abreviação" => "SC",
      "Sede do Governo" => "Florianópolis",
      "Área (km²)" => 95736.2,
      "População (2014)" => 7252502,
      "Densidade (2005)" => 76.00,
      "PIB (2015)" => 254503000,
      "(% total) (2015)" => 4.3,
      "PIB per capita (R$) (2015)" => 35124.11,
      "IDH (2010)" => 0.774,
      "Alfabetização (2016)" => "97.4%",
      "Mortalidade Infantil (2016)" => "9.2‰",
      "Expectativa de Vida (2016)" => "79.1 anos"
    ),
    "SP" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg",
      "Unidade Federativa" => "São Paulo",
      "Abreviação" => "SP",
      "Sede do Governo" => "São Paulo",
      "Área (km²)" => 248222.8,
      "População (2014)" => 45919049,
      "Densidade (2005)" => 184.66,
      "PIB (2015)" => 2169910000,
      "(% total) (2015)" => 36.5,
      "PIB per capita (R$) (2015)" => 46860.48,
      "IDH (2010)" => 0.783,
      "Alfabetização (2016)" => "95.4%",
      "Mortalidade Infantil (2016)" => "10.8‰",
      "Expectativa de Vida (2016)" => "77.4 anos"
    ),
    "SE" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg",
      "Unidade Federativa" => "Sergipe",
      "Abreviação" => "SE",
      "Sede do Governo" => "Aracaju",
      "Área (km²)" => 21915.1,
      "População (2014)" => 2278308,
      "Densidade (2005)" => 96.88,
      "PIB (2015)" => 36763200,
      "(% total) (2015)" => 0.6,
      "PIB per capita (R$) (2015)" => 16212.82,
      "IDH (2010)" => 0.665,
      "Alfabetização (2016)" => "92.4%",
      "Mortalidade Infantil (2016)" => "15.6‰",
      "Expectativa de Vida (2016)" => "72.7 anos"
    ),
    "TO" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg",
      "Unidade Federativa" => "Tocantins",
      "Abreviação" => "TO",
      "Sede do Governo" => "Palmas",
      "Área (km²)" => 277720.5,
      "População (2014)" => 1590248,
      "Densidade (2005)" => 5.66,
      "PIB (2015)" => 26637400,
      "(% total) (2015)" => 0.4,
      "PIB per capita (R$) (2015)" => 16701.50,
      "IDH (2010)" => 0.699,
      "Alfabetização (2016)" => "93.4%",
      "Mortalidade Infantil (2016)" => "19.5‰",
      "Expectativa de Vida (2016)" => "73.9 anos"
    ),
  );
  ?>
  <h1> <font face="Verdana"> Lista Sintética de todos os Estados brasileiros </font> </h1>
  
   <table>
        <thead>
        <?php
      foreach ($syntheticlist as $keylist => $valuelist) {
        echo "<tr>";
        foreach ($valuelist as $key => $value) {
          echo "<th> $key </th>";
        }
        
        echo "</tr>";
        break;
      }
      ?>
        </thead>

        <tbody>
      <?php
      foreach ($syntheticlist as $keylist => $valuelist) {
        echo "<tr>";
        foreach ($valuelist as $key => $value) {
          echo $key === "Bandeira" ?
            "<td> <img src=\"$value\" alt=\"\" height=\"48px\" width=\"58px\"> </td>"
            :
            "<td>$value</td>";
        }
        echo "</tr>";
      }
      ?>
        </tbody>
    </table>
</body>
</html>