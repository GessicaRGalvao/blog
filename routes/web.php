<?php

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

Route::get('/index', function () {
    return 'Página Inicial';
});

Route::get('/admin', function () {
    return 'Página de Administração';
});

Route::get('/usuarios', function () {
    return '
	<table border="1" cellpadding="10">
		<tr>
			<td>1</td>
			<td>João</td>

		</tr>
		<tr>
			<td>2</td>
			<td>Maria</td>
		</tr>

		<tr>
			<td>3</td>
			<td>Pedro</td>
		</tr>

		<tr>
			<td>4</td>
			<td>João</td>
		</tr>
	</table>';
});

//•	Crie uma rota que leia 5 parâmetros, e tire a média dos valores
Route::get('media/{id_num},{id_numero},{id_nume},{id_numer},{id_numeroo}', function($id_num, $id_numero, $id_nume, $id_numer,$id_numeroo){
	$media = $id_num + $id_numero + $id_nume + $id_numer + $id_numeroo/5;
 		return "Media:$media";
});

//Crie uma view que receba uma lista de usuários ( Thiago, Henrique, Pedro e João ), em uma tabela HTML 
Route::get('/lista', function(){
  return view("lista");
});

//Crie uma rota que recebe 3 nomes, e exibe em uma VIEW 
Route::get('nome/{id_nome},{id_nomecompleto},{name}', function($id_nome,$id_nomecompleto,$name){
 return view("nome")->with('id_nome',$id_nome)->with('id_nomecompleto',$id_nomecompleto)->with('name',$name);
 });

//Crie uma rota que exibe a soma de 2 números em uma VIEW
Route::get('numero/{num},{numero}', function($num, $numero){
	$soma = $num+$numero;
 return "Soma: $soma";
});

//Crie uma rota que leia 2 nomes, e mostre se os nomes são iguais
Route::get('comparacao/{nome_um},{nome_dois}', function($nome_um, $nome_dois){
	if($nome_um !== $nome_dois) {
		echo "Nomes diferentes: $nome_um, $nome_dois";
	}
});

//crie uma view que define um template, e crie outra view que estenda este template, e adicione conteúdo em uma @section 
Route::get('/principal', function(){
  return view("principal");
});

Route::get('/pagina', function(){
  return view("pagina");
});


//Sugerir uma nova rota que ainda para um View, que nenhum aluno tenha enviado no fórum ainda
Route::get('/viewqualquer', function(){
  return view("viewqualquer");
});

//Crie um view com o documento básico do html 
Route::get('/sintaxe', function () {
    return view('sintaxe');
});










;
