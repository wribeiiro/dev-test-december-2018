<?php

/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/
/*

Postmon é uma API para consultar CEP e encomendas de maneira fácil.
Implemente uma função que recebe CEP e retorna todos os dados reltivos ao endereço correspondente.

Exemplo:

getAddressByCep('13566400') retorna:
{
	"bairro": "Vila Marina",
	"cidade": "São Carlos",
	"logradouro": "Rua Francisco Maricondi",
	"estado_info": {
	"area_km2": "248.221,996",
	"codigo_ibge": "35",
		"nome": "São Paulo"
	},
	"cep": "13566400",
	"cidade_info": {
		"area_km2": "1136,907",
		"codigo_ibge": "3548906"
	},
	"estado": "SP"
}

Documentação:
https://postmon.com.br/

*/

class CEP
{
    public static function getAddressByCep($cep)
    {	
		$cep = preg_replace('/\D/', '', $cep);
		$ch  = curl_init("https://api.postmon.com.br/v1/cep/{$cep}");
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		
		$response = curl_exec($ch);

		return $response; 
    }
}

header('Content-Type: application/json');
echo (CEP::getAddressByCep('89300-670'));