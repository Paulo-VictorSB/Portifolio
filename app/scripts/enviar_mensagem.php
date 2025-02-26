<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/config.php';

use App\Config\Database;
$database = new Database(MYSQL_CONFIG);

$input = json_decode(file_get_contents('php://input'), true);

$nome = $input['nome'] ?? '';
$email = $input['email'] ?? '';
$mensagem = $input['mensagem'] ?? '';
$resp = [];

$nomeValido = strlen($nome) > 5 && strlen($nome) < 100;
$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
$mensagemValida = strlen($mensagem) <= 1500;

if ($nomeValido && $emailValido && $mensagemValida) {
    http_response_code(200);
    $resp['status'] = 200;
    $resp['resposta'] = 'Mensagem enviada com sucesso.';

    $params = [
        ':nome' => $nome,
        ':email' => $email,
        ':mensagem' => $mensagem
    ];

    $adicionar_banco = $database->execute_non_query('INSERT INTO mensagem (nome, email, mensagem) VALUES (:nome, :email, :mensagem)', $params);
    
} else {
    http_response_code(400);
    $resp['status'] = 400;
    $resp['resposta'] = 'Erro ao enviar mensagem, revise seus dados e tente novamente.';

    if (!$nomeValido) $resp['erro']['nome'] = 'O nome deve ter entre 6 e 100 caracteres.';
    if (!$emailValido) $resp['erro']['email'] = 'E-mail inválido.';
    if (!$mensagemValida) $resp['erro']['mensagem'] = 'A mensagem não pode ultrapassar 1500 caracteres.';
}

header('Content-Type: application/json');
echo json_encode($resp);
