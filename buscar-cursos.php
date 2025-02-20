#!/usr/bin/env php
<?php
require 'vendor/autoload.php';
require 'src/buscador.php';


use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorDeCurso\Buscador;

$client = new Client(['base_uri'=>'https://www.alura.com.br/']);

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar(url:'/cursos-online-programacao/php');

foreach ($cursos as $curso){
    echo exibirMensagem($curso);
};