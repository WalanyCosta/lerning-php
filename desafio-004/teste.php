<?php 
    function getDataOfTheAPIBCB(){
        $dateStart = date("m-d-Y", strtotime("-7 days"));
        $dateEnd = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dateStart.'\'&@dataFinalCotacao=\''.$dateEnd.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $data = json_decode(file_get_contents($url), true);

        return $data['value'][0]['cotacaoCompra'];
    }

    function getCurrentInFormatBR($number){
        $default = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        return numfmt_format_currency($default, $number, "BRL");
    }
?>