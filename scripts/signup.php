<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];





//script from https://prodeveloper.com.br/como-enviar-e-receber-json-usando-php-curl/#:~:text=Basta%20utilizar%20a%20fun%C3%A7%C3%A3o%20file_get_contents,seu%20corpo%20capturado%20e%20exibido.
// URL de SUA API
$url = 'http://localhost:8080/users';

// cria um resource cURL
$ch = curl_init($url);

// monte um array que conterá os campos a serem enviados
// Vamos neste tutorial optar por usar um array para montar os campos de post. Este é o campo de form-data.
// Nossa api específica espera um array em formato JSON com uma única chave "text" e seu respectivo conteúdo que será analisado.
$data = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'password' => $password
);

// vamos usar a função json encode para transformar nosso array em uma string Json válida
$corpo = json_encode($data);

// agora vamos anexar o corpo em formato json da sua requisição
curl_setopt($ch, CURLOPT_POSTFIELDS, $corpo);

// defina o conteúdo do envio como json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// ative o recebimento de retorno da requisição
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// executa a requisição POST
$resultado = curl_exec($ch);

// encerra conexão e libera variável
curl_close($ch);

header('Location:../login.php');