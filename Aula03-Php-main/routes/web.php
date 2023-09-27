<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', function() {

    $dados = array(
        "Carlos Eduardo",
        "Maria Cláudia",
        "João Pedro",
        "Christian Oliveira",
        "Arthur Utida",
        "Felipe Jianni"
    );

    $total = count($dados);

    $alunos = "<ul>";

    if($total <= count($dados)) {
        $cont = 0;
        foreach($dados as $nome) {
            $cont++;  
            $alunos .= "<li>$cont - $nome</li>";
            $cont--;  
            $cont++;
            if($cont >= $total) break;
        }
    }
    else {
        $alunos = $alunos."<li>Tamanho Máximo = ".count($dados)."</li>";
    }

    $alunos .= "</ul>";

    return $alunos;
});

Route::get('/alunos/limite/{total}', function($total) {

    $dados = array(
        "Carlos Eduardo",
        "Maria Cláudia",
        "João Pedro",
        "Christian Oliveira",
        "Arthur Utida",
        "Felipe Jianni"
    );

    $alunos = "<ul>";

    if($total <= count($dados)) {
        $cont = 0;
        foreach($dados as $nome) {
            $cont++;  
            $alunos .= "<li>$cont - $nome</li>";
            $cont--;
            $cont++;
            if($cont >= $total) break;
        }
    }
    else {
        $alunos = $alunos."<li>Tamanho Máximo = ".count($dados)."</li>";
    }

    $alunos .= "</ul>";

    return $alunos;
});

Route::get('/alunos/matricula/{numero}', function($numero) {

    $dados = array(
        1 => "Carlos Eduardo",
        2 => "Maria Cláudia",
        3 => "João Pedro",
        4 => "Christian Oliveira",
        5 => "Arthur Utida",
        6 => "Felipe Jianni"
    );

    if(count($dados) >= $numero) {
        return "<li>$numero - $dados[$numero]</li>";
    }

    return "NÂO ENCONTRADO!!";
});

Route::get('/alunos/nome/{nome}', function($nome) {

    $dados = array(
        1 => "Carlos Eduardo",
        2 => "Maria Cláudia",
        3 => "João Pedro",
        4 => "Christian Oliveira",
        5 => "Arthur Utida",
        6 => "Felipe Jianni"
    );

    if(array_search($nome, $dados)) {
        $numero = array_search($nome, $dados);
        return "<li>$numero - $nome</li>";
    } 

    return "NÂO ENCONTRADO!!";
});

Route::get('/nota', function() {

    $dados = array(
        array("matricula" => 1, "aluno" => "Maria Cláudia", "nota" => 2),
        array("matricula" => 2, "aluno" => "João Pedro", "nota" => 6),
        array("matricula" => 3, "aluno" => "Carlos Eduardo", "nota" => 9),
        array("matricula" => 4, "aluno" => "Christian Oliveira", "nota" => 10),
        array("matricula" => 5, "aluno" => "Arthur Utida", "nota" => 10),
        array("matricula" => 6, "aluno" => "Felipe Jianni", "nota" => 10),
    );


    foreach($dados as $item) {
        echo $item['matricula']." ".$item['aluno']." ".$item['nota']."<br>";
    }
    
});

Route::get('/nota/limite/{total}', function($total) {

    $dados = array(
        array("matricula" => 1, "aluno" => "Maria Cláudia", "nota" => 2),
        array("matricula" => 2, "aluno" => "João Pedro", "nota" => 6),
        array("matricula" => 3, "aluno" => "Carlos Eduardo", "nota" => 9),
        array("matricula" => 4, "aluno" => "Christian Oliveira", "nota" => 10),
        array("matricula" => 5, "aluno" => "Arthur Utida", "nota" => 10),
        array("matricula" => 6, "aluno" => "Felipe Jianni", "nota" => 10),
    );

    $alunos = "<ul>";

    if($total <= count($dados)) {
        $cont = 0;
        foreach($dados as $item) {
            echo $item['matricula']." ".$item['aluno']." ".$item['nota']."<br>";
            $cont++;
            if($cont >= $total) break;
        }
    }
    else {
        $alunos = $alunos."<li>Tamanho Máximo = ".count($dados)."</li>";
    }

    $alunos .= "</ul>";

    return $alunos;
});

