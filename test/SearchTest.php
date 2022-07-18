<?php

use PHPUnit\Framework\TestCase;
use Genisson\ProjetoCepDigital\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search();
        $resultado = $resultado->getAddressFromZipcode($input);
        $this->assertEquals($esperado, $resultado);
        //print_r($resultado);
        exit;
    }

    public function dadosTeste()
    {
        return [
            "Endereço Praça da Sé" => [
                "01001-000",[
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]

            ],
            "Endereço Benedito Barbosa Silveira" => [
                "cep" => "23893-785",
                "logradouro" => "Rua Benedito Barbosa Silveira",
                "complemento" => "",
                "bairro" => "São Miguel",
                "localidade" => "Seropédica",
                "uf" => "RJ",
                "ibge" => "3305554",
                "gia" => "",
                "ddd" => "21",
                "siafi" => "0786"
            ]
        ];
    }
}
