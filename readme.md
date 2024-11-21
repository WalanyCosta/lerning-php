# Learning PHP

## Fundamentos basicos

O codigo php fica entre: 

```php

	# sintaxe para escrever codigo php
	<?php 


	?>

	# sintaxe para exibir informação

	<?= echo 'Olá mundo!!!' ?> 
```

obs. Quando estás a trabalhar num arquivo ponto php não é necessario fechar a tag "?>".

### Comandos basicos

**echo**- usado para exibir informação ou imprimir informação na tela.
**print** - usado para exibir informação ou imprimir informação na tela.


**include** - comando usado para importar arquivos.

```php

# arquivo index.php

include './teste.php';

echo $name;

# arquivo teste.php

$name = 'any_name';
```

**require** - comando usado para importar arquivos assim como include, mas com a diferença que require quando acontece um erro ao importar na executar o arquivo que importar ou bloqueia o arquivo que importa ao contrario do include.

```php

# arquivo index.php

require './teste.php';

echo $name;

# arquivo teste.php

$name = 'any_name';
```

**include_once** - comando usado para importar arquivos apenas uma unica vez não importa se include para o mesmo arquivo é chamado duas vezes.

```php

# arquivo index.php

include_once './teste.php';
include_once './teste.php';

echo $name;

# arquivo teste.php

$name = 'any_name';
```

**require_once** - comando usado para importar arquivos apenas uma unica vez não importa se require para o mesmo arquivo é chamado duas vezes e também possue aquela mesma particularidade que tem o require.

```php

# arquivo index.php

require_once './teste.php';
require_once './teste.php';

echo $name;

# arquivo teste.php

$name = 'any_name';
```

exemplo de require com arquivo html

```php

# arquivo index.php

require_once './teste.php';
require_once './teste.php';

<html>
 <head><head>
 <body>
 	<h2>Olá, <?php echo $name;?><h2>
 <body>
<html>

echo $name;

# arquivo teste.php

$name = 'any_name';
```

**gettype** - comando ou função usado para saber o tipo de um valor ou variavel.

### Variaveis

São espaço reservados na memoria do computador ou pode ser também uma representação de um valor. E no php os valores podem ser do tipo:

- string - No php são valores que ficam entre aspas simples('') ou dupla("") e nela podem conter todo tipo de caracteres seja numerico, simbolos, alfabetico, etc.

exemplo.:

```php
	// string
	echo gettype('dsdadadad') // string
	var_dump('dsdladaldald') // string
```

- numbers (integer, float ou double)

exemplo.:
```php
	// number integer
	echo gettype(12); // integer

	//
	echo gettype(12.5); // double / float
```
- booleans - 

exemplo.:
```php
	// true
	echo gettype(true); // boolean

	// false
	echo gettype(false); // boolean
```
- arrays - os arrays são estruturas ou variaveis que conseguem guardar mais de um valores. E os arrays no php funciona do mesmo jeito que funciona em javascript o pode receber dados de tipos de diferentes ou do mesmo tipo.

exemplo.:
```php
	// true
	echo gettype(['daldadlal', 12]); // array
```
- objects - instancias de uma classe

exemplos.:

```php
class Person{

}

echo gettype(new Person); // object

```
- null

exemplos.:
```php

echo gettype(null); // null

```

E para criar variavel em php é por meio do simbolo de $ ou const só que no const é para criar variaveis constantes que quando é passado valor já nao se ater durante o tempo de execução. E para criar variavel em php também tem regras como em muitas linguagem de programação como: 

- Não se criar sem a palavra reserva sem o simbolo $ e palavra const
- Depois do simbolo $ ou const não se pode comerçar como numero ou outros simbolos. Apenas letras e ou underline.

Exemplo.:

```php

	$nome = "Valério Costa";
	$_response = ['any_name', 3];

```

Padrão para escrita de variavel pode-ser:

- cameCase
- snakeCase

exemplos.:

```php

// cameCase
$firstName = 'Bartolomeu';

//snakeCase
$last_name = 'Lemos';

```

> **Nota.:** php é uma linguaguem case-censetive o que quere dizer que diferência variaveis, função, classe que são escrita de forma maiscula e minuscula.

#### Ponto de referencia (&)

No php dá pra criar os famosos pontos de referências que consiste em tornar as variaveis interligadas e isso querer de dizer que terá o mesmo valor que a outra tem, não importa se o valor for alterado ou não alterado em cada variavel as duas irão refletir esse mesmo valor

exemplos.:

```php

$name = 'Alexandre';
$myname = &$name;

$name = 'joão';

echo $name; // joão
echo $myname; // joão
```

#### Constantes com define e const


exemplos.:

```php

define('NAME', 'Alexandre');

echo NAME;

```

exemplos.:

```php

const NAME = 'Alexandre';

echo NAME;

```

Obs.: No php também tem as famosas constantes já predefinidas. No exemplo abaixo serão apresentado a constante chamados de funções magicas. Essas mesmas funções magicas serão sempre javar com "__nome_constante__"

```php

function teste(){
	echo __FUNCTION__;
	echo __METHOD__;
}

teste();
```


exemplos de contantes do sistema:

```php

echo DIRECTORY_SEPARATOR;
```

exemplos de como saber se uma constantes foi definida:

```php

define('NAME', 'Alexandre');

if(defined('NAME')){
	echo 'Foi definido';
}
```

Para buscar todas as constantes do php é por meio da função get_defined_constants:

exemplos.:

```php
$cons = get_defined_constants(true);

var_dump($cons);
```

DIR - constantes que indica o directorio principal.

exemplos.:

```php

echo __DIR__;

```

### Operadores

#### Operadores aritmeticos

O php tem os seguintes operadores aritmeticos:

- soma (+)
- substração (-)
- multiplicação (*)
- divisão (/)
- resto (%)
- exponenciação "(**)"

Exemplos de operação são:
```php
$number1 = 10;
$number2 = 20;

// soma 30
echo $number1 + $number2;

// substração = -10
echo $number1 - $number2;

// multiplicação = 200
echo $number1 * $number2;

// divisao = 0.5
echo $number1 / $number2;

// Resto = 10
echo $number1 % $number2;

// potência = 100
echo $number1 ** 2;

```

##### Ordem de procedência

Como na matemática as operações grandes para serem completas deve-se seguir uma regra, aqui na computação também é mesma coisa e segue a mesma regra da matemática.

- () : usado para alterar a ordem normal
- ** : primeiro
- * | / | % : aqui se os três aparecer numa mesma operação será executado primeiro que está na esqueda.
- + | - | : aqui se os dois também acontecerá o que foi feito na regra de cima.


```php

// resultado = 15
echo 1 + 5 * 3;

// resultado = 18
echo (1+5) * 3;
```
#### Operadores de atribuição

No php assim como no javascript o operador de atribuição é representado pelo simbolo de igual (=).

Exemplo.: 

```php

	$name = 'Renato';
	$nickname = $name;
	echo $name;
	echo $nickname; 
```

Exemplo.: 

```php

	$name = 'Renato';
	$name .= 'Miguel';

	// Renato Miguel
	echo $name; 
```

Exemplo.: 

```php

	$number = 10;
	$number += 20;

	// 30
	echo $number; 
```

Exemplo.: 

```php

	$number = 10;
	$number -= 20;

	// -10
	echo $number; 
```

> Obs.:Esse metódo pode forma de combinar operador ou sinais só pode ser feito com operadores aritmeticos e operadores de concatenação.

#### Operadores de descremento/incremento

Exemplo de pre-incremento: 

```php
$number = 10;

// resultado 11
echo ++$number;
```

Exemplo de pos-incremento:

```php

$number = 10;

//resultado = 10, porque ela só vai dar 11 quando chamar outra vez
echo $number++;

//resultado = 11
echo $number;
```

Exemplo de pre-descremento:
```php

$number = 10;

//resultado = 9
echo --$number;
```

Exemplo de pre-incremento:
```php
$number = 10;

//resultado = 10
echo $number--;

//resultado = 9
echo $number;
```

#### Operação de Comparação

São operadores que permite comparar ou analizar valores afim de saber se satisfazem a sentença. Ela retorna sempre valores booleano afim de se determinar se satisfazem ou não a codição.

Exemplos:

```php
// <,>, <=, =>, != ou !==, == ou ===

// 1 
echo 30 < 50;

//true
var_dump(30 < 50);
//false
var_dump(30 > 50);
//true
var_dump(30 <= 50);
//false
var_dump(30 >= 50);
//false
var_dump(30 != '30');
//true
var_dump(30 !== '30');
//true
var_dump(30 == '30');
//false
var_dump(30 === '30');
```

#### Operação logicos

São operadores que se encarrega de fazer comparar de valores boolianos. Por isso que eles são utilizado em muito casos para unir condições feitas com operadores de comparação.

Exemplos:

```php
// &&(and), ||(or), !

$canAccess = true;
$isOlder = false;

// false
var_dump($canAccess && $isOlder);

// true
var_dump($canAccess || $isOlder);

// true
var_dump($canAccess && !$isOlder);
```

##### Valores truty e falsy

São valores que não são booleanos mais se comportam como booleano.

E os valores falsy são:

- null .... null
- 0 ..... integer
- 0.0 ..... float
- "0" ..... string
- "" ..... empty string
- array() ..... empty array

E os valores truty é tudo resto



Exemplos.:
```php

$name = 'Alexandre';

var_dump(!!$name);

$name = '';

var_dump(!!$name);
var_dump(!!null)
```

### Estruturas codicionais

#### Operadores ternario

Exemplos.:

```php

$resultado = true;

$exibir = $resultado ? 'é verdadeiro' : 'não é verdadeiro';

echo $exibir;
```

#### Condicional if

Exemplos.:

```php

$isAdmin = true;

if($isAdmin){
	echo 'Welcome to facebook';
}
```

```php

$isAdmin = true;

if($isAdmin){
	echo 'acesso negado!';
	return;
}

echo 'Bem-vindo ao facebook';
```


#### Condicional if else

Exemplos.:

```php

$isAdmin = false;

if($isAdmin){
	echo 'Bem-vindo ao facebook!';
}else{
	echo 'Acesso negado!';
}
```


#### Condicional switch

Exemplos.:

```php

$week = 0;

switch ($week) {
	case 0:
		echo 'Domingo';
		break;
	case 1:
		echo 'Segunda-feira';
		break;
	case 2:
		echo 'Terça-feira';
		break;
	case 3:
		echo 'Quarta-feira';
		break;
	case 4:
		echo 'Quinta-feira';
		break;
	case 5:
		echo 'Sexta-feira';
		break;
	case 6:
		echo 'Sabado';
		break;
	default:
		echo 'Esse dia de semana não existe'
		break;
}
```
### Funções

### Funções numericas

is_numeric - verifica se uma variável é um número ou uma string numérica.

```php

$number1 = 34;
$number2 = 44;

if(is_numeric($number1) && is_numeric($number2)){
	echo 'é numerico';
}else{
	echo 'não é numerico';
}
```

ceil - usado para arredondar um valor numerico para cima.

Exemplo.:
```php

echo ceil(34.12);
```
floor - usado para arredondar um valor numerico para baixo.

Exemplo.:
```php

echo floor(34.12);
```

![Link da documentação para as funções matemáticas](https://www.php.net/manual/pt_BR/ref.math.php)

#### Funções de string

strlen - retorna o tamanho da string.

Exemplo.: 
```php

$name = 'kdaldaldladladlal';

echo strlen($name);
``` 

substr - corta a string no tamanho que queres.

Exemplo.: 
```php

$name = 'kdaldaldladladlal';

echo substr($name, 0, 6);
``` 

str_contains - verifica se dentro de uma string contem uma determinada informação.

Exemplo.: 
```php

$name = 'Teste de matématica é prá amanhã';

// resultado = 1
echo str_contains($name, 'teste');
``` 

![Link da documentação onde estão todas as funções da string](https://www.php.net/manual/pt_BR/ref.strings.php)

### Estruturas codicionais

### Arrays


Exemplos.:

```php

// $names = ['Maria', 'Helena', 'joão'];
$names = array('Maria', 'Helena', 'joão');

print_r($names);
var_dump($names);
var_dump($names[1]);

//adicionando valor
$names[3] = 3;

```

Aqui no php dá para criar array como index não numerico ou index especifico.

Exemplos.:

```php

$person = ['name' => 'Alexandre', 'age' => 38];

var_dump($person['name']);
```

#### Array Multidimensionais

Exemplos.:

```php

$person = [
	'name' => 'Alexandre', 'age' => 38, 
	'documents' => [
		'cpf' => '23322445', 
		'rg' => '33558282472', 
		'array' => ['dssdla', 'lsdadk']
	]
];

var_dump($person);

var_dump($person['documents']);

var_dump($person['documents']['cpf']);
var_dump($person['documents']['array']);
var_dump($person['documents']['array'][0]);
```


#### Funções do array

count - permite saber a quantidade de elementos que estão dentro do array. Ele começa a contar a parte de 1.

Exemplos.:

```php

// $names = ['Maria', 'Helena', 'joão'];
$names = array('Maria', 'Helena', 'joão');

$length = count($names);

print_r($length);

$names[$length] = 'Gustavo';
```

array_push - função de array que permite adicionar elemento no array.

Exemplos.:
```php

// $names = ['Maria', 'Helena', 'joão'];
$names = array('Maria', 'Helena', 'joão');

array_push($names, 'teste');

var_dump($names);
```

array_unshift - função de array que permite adicionar elemento no array na primeira posição.

Exemplos.:
```php

// $names = ['Maria', 'Helena', 'joão'];
$names = array('Maria', 'Helena', 'joão');

array_unshift($names, 'teste');

var_dump($names);
```

![Link para Funções para array](https://www.php.net/manual/pt_BR/ref.array.php)

### Conversão de dados

As formas de conversão de tipo de dados são:

- (string)
- (boolean)
- (float)
- (integer)
- (double)
- (object)
- (array)
- intVal
- doubleVal
- strVal
- boolVal

Exemplos convertendo string para boolean :

```php

$name = 'Alexandre';

$change = (boolean) $name;

// true
var_dump($change);
```
Exemplos convertendo number para boolean:

```php

$number = 12;

$change = (boolean) $number;

// true
var_dump($change);
```

Exemplos convertendo string para:

```php

$number = 12;

$change = (boolean) $number;

// true
var_dump($change);
```
> Obs.: Visto que todos valores em php são considerado trully e falsy.

Exemplos convertendo string para:

```php

$number = 12;

$change = (string) $number;

// true
var_dump($change);
```

Exemplos convertendo string para:

```php

$number = 12.54;

$change = (string) $number;

// true
var_dump($change);
```

Exemplos convertendo string para:

```php

$number = 12.54;

$change = (integer) $number;

// true
var_dump($change);
```
Exemplos convertendo string para:

```php

$array = ['Alexandre', 'Maria', 'Felipa'];

$change = (object) $array;

// true
var_dump($change);
```
Exemplos convertendo string para:

```php

$array = ['name'=> 'Alexandre', 'age' => 30];

$change = (object) $array;

//
var_dump($change->name);
```

Exemplos convertendo object para array:

```php

class Person{
	private $name;

	public function teste(){
		return 'teste';
	}
}

$person = new Person;

$change = (array) $person;

//
var_dump($change);
```

Exemplos convertendo object para array:

```php

$person = 'Victoria';

$change = boolVal($person);

//
var_dump($change);
```


Exemplos convertendo string para:

```php

$number = 12.54;

$change = intval($number);

// true
var_dump($change);
```

### Estrutura de repetição


#### Loop for

Exemplos.:

```php

$names = ['Alexandre', 'Maria', 'joão'];

for ($i=0; $i < count($names); $i++) { 
	echo $names[$i];
}

```

#### Loop While

Exemplos.:

```php

$names = ['Alexandre', 'Maria', 'joão'];

$i = 0;

while ($i < count($names)) {
	echo $names[$i];
}

```

#### Loop DoWhile

Exemplos.:

```php

$names = ['Alexandre', 'Maria', 'João'];

$i = 0;
do{
	echo $names[$i];
	$i++;
}while ($i > count($names));

```

#### Loop foreach

Exemplos.:

```php

$names = ['Alexandre', 'Maria', 'João'];

foreach ($names as $key => $name) {
	echo $name;
}

```

Exemplos.:

```php

$names = ['Alexandre', 'Maria', 'João'];

foreach ($names as $name) {
	echo $name;
}

```

#### Continue, Break

Exemplo de Continue .:

```php

$names = ['Alexandre', 'Maria', 'João'];

for ($i=0; $i < count($names) ; $i++) { 
	if($i === 1){
		continue;
	}

	echo $names[$i];
}

```

Obs.: O continue não funciona no while e no do while. Ela só funciona na no for e no foreach.

Exemplo de break .:

```php

$names = ['Alexandre', 'Maria', 'João', 'teste'];

for ($i=0; $i < count($names) ; $i++) { 
	if($i === 2){
		break;
	}

	echo $names[$i];
}

```

### Funções

Exemplos.:

```php

function connection(){
	$pdo = new PDO('mysql:host=localhost;dbname=books', 'root', '');
	return $pdo;
}

function getData(){
	$connection = connection();
	$query = $connection->query('select * from users');
	$query-> execute();
	return $query->fetchAll();
}

var_dump(getData());
```

#### Parametro em Funções

Exemplos.:

```php

function connection(){
	$pdo = new PDO('mysql:host=localhost;dbname=books', 'root', '');
	return $pdo;
}

function getData($table){
	$connection = connection();
	$query = $connection->query("select * from $table");
	$query-> execute();
	return $query->fetchAll();
}

var_dump(getData("users"));
var_dump(getData("comments"));

```

#### Funções Anonima ou função sem nome

```php

$person = function(){
	return 'teste';
};

var_dump($person());

```

Nota.: As funções anonimas pertence a classe closure isso faz delas os metodos magicos "_invoke" que permite com sejam chamada como uma função.

Exemplos.:

```php

class Person{
	public function __invoke(){
		return 'teste';
	}
}

$person = new Person;

echo $person();
```

Passando para numa função anonima.

Exemplo.:

```php

$person = function($name){
	return $name;
};

var_dump($person('Alexandre'));

```

Exemplos de funções que chamam outras funções:

```php

function teste(){
	$person = function(){
		return 'teste';
	};

	return $person;
}

var_dump(teste()());

```

Exemplos de funções que chamam outras funções passando para parametro:

```php

function teste($name){
	$person = function () use ($name){
		return $name;
	};

	return $person;
}

var_dump(teste('Alexandre')());

```

#### callbacks

Funções passadas como parâmetro para outras funções.

```php

function teste($name){
	return $name;
}

function teste2($callback){
	return $callback('Alexandre');
}

echo teste2('teste');

```

Exemplo verificando callback:

```php

function teste($name){
	return $name;
}

function teste2($callback){
	if(is_callable($callback)){
		return $callback('Alexandre');
	}
}

$user = 'Joao';

echo teste2($user);

```

Exemplo usando call_user_func que serve para passar callback e parametro do callback.:

```php

function teste($name){
	return 'Olá meu nome é' . $name;
}

echo call_user_func('teste', 'Paula');

```

Exemplo usando call_user_func quando se quer usar uma função de uma classe..:

```php

class User{
	public function teste($name, $age){
		return 'Olá meu nome é ' . $name . ' e minha idade é de ' . $age;
	}
}

$user = new User;

echo call_user_func([$user, 'teste'], 'Alexandre', 38);

```

Exemplo usando call_user_func quando se quer usar uma função de uma classe..:

```php

class User{
	public static function teste($name, $age){
		return 'Olá meu nome é ' . $name . ' e minha idade é de ' . $age;
	}
}

echo call_user_func(['User', 'teste'], 'Alexandre', 38);

```

Exemplo de call_user_func para chamar funções callbacks.:

```php

function teste($name){
	return 'teste' . $name;
}

function teste2($callback){
	return call_user_func($callback, 'Alexandre');
}

echo teste2('teste');

```

Exemplo de callback com o metodo "__invoke__".:

```php

class Person{
	public function __invoke(){
		return 'teste2';
	}
}

$person = new Person;

function teste ($callback){
	return $callback();
}

echo teste($person);

```

Exemplos de call_user_func_array:

```php

$user = function(){
	return 'teste';
};

function teste($callback){
	return $callback();
}

echo teste($user);

```

```php

$user = function($name){
	return 'teste' . $name;
};

function teste($callback, $name){
	return call_user_func($callback, $name);
}

echo teste($user, 'Alexandre');

```

### Verificando atributo ou variavel

isset - usando para verificar se uma variavel ou array existe ou não. Mas é usado no cenario onde se analiza se um valor é truty ou falsy retornando true e false;

Exemplos.:

```php

$name = 'Alexandre';
$sobrenome = null;
$person = ['name'=> 'Alexandre', 'age' => 39];


// resultado = 1
echo isset($name);

// resultado = 
echo isset($email);

// resultado = 
echo isset($sobrenome);

// resultado = 1
echo isset($person['name']);

// resultado = 
echo isset($person['address']);

```

### Escopo global e local

Para usar um atributo que foi definido no escopo global para usar no escopo local é necessário usar palavra "global";

Exemplo.:

```php

$name = 'Alexandre';

function person(){
	global $name;
	echo $name;
}

person();

```

Exemplo.:

```php

$name = 'Alexandre';

function person(){
	echo $GLOBALS['name'];
}

person();

```

### As Superglobal

Recurso que pode ser usando parte do codigo em php. As superglobais são:

- ![$_COOKIE]() -  valor no navegadores, mas tem uma data de expiração.
- ![$_SESSION]()
- ![$_ENV]() - usando para pegar as variaveis de ambientes.
- ![$_FILES]() - usando para pegar um arquivo enviado para o formulario.
- ![$_GET]() - usando para pegar os parametros passado pela url.
- ![$_POST]() - usado para pegar o valor do header ou do body.
- ![$_REQUEST]() - Tem a função do POST e GET. 
- ![$_SERVER]() - tem a função de todas outra e permite também pegar uri.


#### SuperGlobal COOKIE

Exemplo de como criar um cookie: 

```php

setcookie('name', 'Alexandre', time() + 2 * 24 * 60 * 60);

setcookie('curso', 'php', strtotime('+5days'));

```

Exemplo de recuperação de informação no cookie.:

```php

$cookie = $_COOKIE['teste'];

if(isset($cookie)){
	echo $cookie;
}else{
	echo 'COOKIE não existe';
}

```

Exemplo de como excluir cookie.:

```php

setcookie('curso', 'php', strtotime('-5days'));

setcookie('name', 'faldladk', strtotime('-5days'));

```

#### SuperGlobal SESSION

Exemplo de como criar session.:

```php

session_start();

$_SESSION['name'] = 'Alvaro';

```

Exemplo de como recuperar informação na session.:

```php

session_start();

echo session_id();

echo $_SESSION['name'];

```

Exemplo.:

```php

//index.php

session_start();

require './teste.php';

$_SESSION['name'] = 'Alvaro';

//teste.php

echo isset($_SESSION['name']) ? "Sessão existe ".$_SESSION['name'] : 'Sessão não existe';
```

Existe duas formas de eliminar __session__ que são:

- Fechando o navegador, automaticamente a sessão é excluida.
- A outra é usando a funçao unset.

Exemplo.:

```php

unset($_SESSION['name']);

```
- Session.destroy também outra forma de eliminar sessão, mas só que ela elimina toda a sessão.

Exemplo.:

```php

session_destroy();

foreach ($_SESSION as $key => $value) {
	echo $key;
}

```
#### SuperGlobal ENV

Exemplos.:

```php

echo $_ENV['USER'];
```

Nota.: para poder usar variavel de ambiente é necessario ter o composer e a lib dotenvphp.

#### SuperGlobal Server

Tem a capacidade de acessar variaveis de ambiente do servidor tanto aquelas definidas por nós no arquivo .env. Mas para uma melhor organização é melhor se usar ela para acessar variaveis no servidor.

Exemplo.:

```php

//pega a uri do servidor ou directorio principal
var_dump($_SERVER['DOCUMENT_ROOT']);

```
#### SuperGlobal GET

Exemplos.:

```php

// busca todo os queryparam que é passada na url.
echo $_GET;

// busca todo os queryparam que é passada na url.
echo $_GET['id'];

```
#### SuperGlobal POST

Exemplos.:

```php

// busca todo os queryparam que é passada na url.
echo $_POST;

// busca todo os queryparam que é passada na url.
echo $_POST['id'];

```

#### SuperGlobal POST

Exemplos.:

```php

// busca todo os queryparam que é passada na url.
echo $_REQUEST;

// busca todo os queryparam que é passada na url.
echo $_REQUEST['id'];

```

#### SuperGlobal FILES

```php
//index.php

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso de php</title>
</head>
<body>

	<form action="teste.php" method="post" enctype="multipart/form-data">
		<input type="file" name="img">
		<button type="submit">Cadastrar</button>
	</form>
</body>
</html>

//teste.php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	var_dump($_FILES);
}

```

Nota.: Não da pra usar superglobal files com metodo get, mas só com metodo post apenas. Isso para enviar arquivo.

### Sanitize filters

Usado para filtrar os dados mandados para proteger contra injeção de independencia que é um tipo de ataque.

Exemplo.:

```php
//index.php

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso de php</title>
</head>
<body>

	<form action="teste.php" method="post">
		<input type="text" name="name">
		<input type="e-mail" name="email">
		<button type="submit">Cadastrar</button>
	</form>
</body>
</html>

//teste.php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	var_dump($name, $email);
}

```

![Sanitize filters](https://www.php.net/manual/en/filter.filters.sanitize.php)

### Validate filters

Usando para fazer validações sobre os dados enviado.

Exemplo.:

```php
//index.php

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso de php</title>
</head>
<body>

	<form action="teste.php" method="post">
		<input type="text" name="name">
		<input type="e-mail" name="email">
		<button type="submit">Cadastrar</button>
	</form>
</body>
</html>

//teste.php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 'Email válido';
	}else{
		echo 'Email não válido';
	}

	//var_dump($name, $email);
}

```

Exemplo com GET.:

```php

//index.php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso de php</title>
</head>
<body>

	<form action="teste.php" method="get">
		<input type="text" name="s">
		<button type="submit">Cadastrar</button>
	</form>
</body>
</html>

//teste.php

if($_SERVER['REQUEST_METHOD'] === 'GET'){
	$search = filter_input(INPUT_GET, 's', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	var_dump($search);
}


```

Nota.: Que o __filter_input__ usado quando se quer validar ou filtrar que estão sendo enviado pelo formulário. E o __filter_var__ quando se vai usar uma variavel que está próxima.

![Validate filters](https://www.php.net/manual/en/filter.filters.validate.php)

## Orientado a objectos

### Classes

Exemplo de como criar uma class:

```php

class Produto{
	public $descripcao;
	public $preco;

	public function getDetalhes()
	{
		
	}
}

$p = new Produto;

var_dump($p);

```

Exemplo de como atribuir valor para um atributo:

```php

class Produto{
	public $descripcao;
	public $preco;

	public function getDetalhes()
	{
		
	}
}

$p = new Produto;

$p-> descripcao = 'Livro';
$p ->preco =50;


var_dump($p);

```

Exemplo de como funciona um metodo numa class:

```php

class Produto{
	public $descripcao;
	public $preco;

	public function getDetalhes()
	{
		return "O produto {$this->descripcao} custa {$this->preco} reais";
	}
}

$p = new Produto;

$p-> descripcao = 'Livro';
$p ->preco =50;

```

#### Modificadores de acesso

Num php temos os seguintes modificadores de acesso que são:

- private
- public
- protected

#### Get e Setter

Exemplo de get e setter: 

```php

class Produto{
	private $descripcao;
	private $preco;

	public function getDetalhes()
	{
		return "O produto {$this->descripcao} custa {$this->preco} reais";
	}

	public function setDescripcao($valor){
		$this->descripcao = $valor;
	}

	public function  setPreco($valor){
		$this->preco = $valor;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function getDescripcao(){
		return $this->descripcao;
	}
}

$p = new Produto;

$p->setDescripcao('faldaldal');
$p->setPreco(30);

echo $p->getDetalhes();

```

#### Construtores e desconstrutores

Exemplo de construtor:

```php

class Produto{
	private $descripcao;
	private $preco;

	public function __construct($descripcao, $preco){
		$this->descripcao = $descripcao;
		$this->preco = $preco;
	}

	public function getDetalhes()
	{
		return "O produto {$this->descripcao} custa {$this->preco} reais";
	}

	public function setDescripcao($valor){
		$this->descripcao = $valor;
	}

	public function  setPreco($valor){
		$this->preco = $valor;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function getDescripcao(){
		return $this->descripcao;
	}
}

$p = new Produto('Veculoso', 30);

var_dump($p);

```

Exemplo de descontrutor:

```php

class Produto{
	private $descripcao;
	private $preco;

	public function __construct($descripcao, $preco){
		$this->descripcao = $descripcao;
		$this->preco = $preco;
	}

	public function getDetalhes()
	{
		return "O produto {$this->descripcao} custa {$this->preco} reais";
	}

	public function __destruct(){
		echo "Destroying " .__CLASS__. "\n";
	}
}

$p = new Produto('Veculoso', 30);

var_dump($p);

```

#### Associação de classes

Exemplos.:

```php

class Fabricante{
	private $nome;

	public function __construct($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}
}

class Produto{
	private $descripcao;
	private $preco;
	private $fabricante;

	public function __construct($descripcao, $preco, Fabricante $fabricante){
		$this->descripcao = $descripcao;
		$this->preco = $preco;
		$this->fabricante = $fabricante;
	}

	public function getDetalhes()
	{
		return "O produto {$this->descripcao} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
	}
}

$f = new Fabricante('Editora A');
$p = new Produto('Livro', 30, $f);

```

#### Herança

Exemplos.:

```php

abstract Class Conta{
	protected $agencia;
	protected $conta;
	protected $saldo;

	public function __construct($agencia, $conta, $saldo){
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = $saldo;
	}

	public function getDetalhes(){
		return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br />";
	}

	public function depositar($valor){
		$this->saldo += $valor;
	}
}

Class Poupanca extends Conta{
	public function saque($valor){
		if($this->saldo >= $valor):
			$this->saldo -= $valor;
			echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br>";
		else:
			echo "Saque não autorizado | Saldo atual: {$this->saldo}<br>";
		endif;
	}
}



$conta = new Poupanca(100, 2586, 5000);
$conta->depositar(1800);
$conta->saque(1500);
$conta->saque(7000);

echo $conta->getDetalhes();

```

##### Operador de resolução de escopo (::)

Permite acessar uma constante, a uma propriedade estatica, ou a um método estático, e para acessar também classes pai.

Exemplos de como usar o (::) para buscar classe pai na qual uma classe derivada extende dela:

```php

abstract Class Conta{
	protected $agencia;
	protected $conta;
	protected $saldo;

	public function __construct($agencia, $conta, $saldo){
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = $saldo;
	}

	public function getDetalhes(){
		return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br />";
	}

	public function depositar($valor){
		$this->saldo += $valor;
	}
}

Class Corrente extends Conta{
	protected $limite;

	public function __construct($agencia, $conta, $saldo, $limite){
		parent::__construct($agencia, $conta, $saldo);
		$this->limite = $limite;
	}

	public function saque($valor){
		if(($this->saldo + $this->limite) >= $valor):
			$this->saldo -= $valor;
			echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br>";
		else:
			echo "Saque não autorizado | Saldo atual: {$this->saldo} | Limite: {$this->limite}<br>";
		endif;
	}
}

$conta = new Corrente(100, 2586, 5000, 500);
$conta->depositar(1800);
$conta->saque(1500);
$conta->saque(7000);

```

Exemplo para buscar uma constante:

```php

class Mat{
	const PI = 3.14;
}

echo Mat::PI;

```

#### Abstração de classes

Classes definidas como abstratas não podem ser instanciadas, e um metódo definidos como abstratos não podem definir uma implementaçao ou não possue blocos de codes só assinaturas e retorno.

```php

abstract class Animal{
	private $nome;
	private $tamanho;

	public function __construct($nome, $tamanho){
		$this->nome = $nome;
		$this->tamanho = $tamanho;
	}

	public abstract function emitirSom();
}


class Galinha extends Animal{
	private $membros;

	public function __construct($nome, $tamanho, $membros){
		parent::__construct($nome, $tamanho);
		$this->membros = $membros;
	}

	public function emitirSom(){
		echo "bocou! bocou!";
	}
}

// resultado - Erro
$animal = new Animal('anibal', 2.12);
$animal->emitirSom();

// resultado - bocou! bocou!
$galinha = new Galinha('yola', 3.72, 2);
$galinha->emitirSom();

```

#### Palavra-Chave 'static'

Palavra reserva que permite que uma classe, metodo ou variavel seja vista de forma global.

Exemplos.:

```php

class Foo{
	public static $my_static = 'foo';

	public function statisValue(){
		return self::$my_static;
	} 
}


echo Foo::$my_static;

```

#### Interface

Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão implementados.

Exemplos.:

```php

class User{
	private $name;
	private $senha;

	public function __construct($name, $senha){
		$this->name = $name;
		$this->senha = $senha;
	}

	public function getName(){
		return $this->name;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function __toString(){
		return "{$this->name} - {$this->senha}";
	}
}

interface GenericDAO {
	public function insert(User $data);
	public function findById($name): User;
}

class UserDAO implements GenericDAO{
	private $users = array();

	public function insert(User $data){
		array_push($this->users, $data);
	}

	public function findById($name): User{
		foreach ($this->users as $user) {
			if($user->getName() === $name){
				return $user;
			}
		}
	}
}

$userDAO = new UserDAO();
$userDAO->insert(new User('any_name', 'any_senha'));
$user = $userDAO->findById('any_name');

echo $user. "<br>";
echo $user->getName();

```
#### Final

A palavra-chave final evita que classes filhas sobrescrevam um método, propriedade ou constante prefixando a definição com final.

Exemplo.:

```php



```


#### Excessões no php

O PHP possui um modelo de exceções similar ao de outras linguagens de programação. Uma exceção pode ser lançada (throw) e capturada (catch). Código pode ser envolvido por um bloco try para facilitar a captura de exceções potenciais. Cada bloco try precisa ter ao menos um bloco catch ou finally correspondente.

Exemplos.:

```php

function inverse($x) {
    if (!$x) {
        throw new Exception('Divisão por zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

```

##### Estendendo exceções

Uma classe de exceção definida pelo usuário pode ser criada herdando a classe Exception. Os membros e propriedades abaixo mostram o que é acessível a partir da classe filha que deriva da Exception.

Exemplo.:

```php

class AuthenticationException extends Exception{

	public function __construct($msm){
		parent::__construct($msm);
	}
}


class LoginUseCase{
	public function login($email, $password){
		if($email === 'any_email@mail.com'){
			throw new AuthenticationException("Email is not exists!");
		}

		if($password === 'Pass1234'){
			throw new AuthenticationException("Password is not correct");
		}

		return 'Logando com sucesso...';
	}
}



try {
	$login = new LoginUseCase();
	$login->login('other_email@mail.com', 'Pass1234');
} catch (AuthenticationException $error) {
	echo $error;
}

```