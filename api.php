<?php

$mensagem = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_STRING);

if ($mensagem) {
    //Requisita o arquivo de autoload do composer
    require_once('vendor/autoload.php');

    //echo \app\ApiController::getChatId(TOKEN);

    //Chama o método que envia a mensagem
    if (!\app\ApiController::sendMessage($mensagem)) {
        jsonResponse('Não foi possível enviar, houve um erro interno.', -1, 500);
    }

    jsonResponse('Mensagem enviada.', 1);

} else {
    jsonResponse('Mensagem não encontrada.', -10, 404);
}

/**
 * Imprime um JSON na tela
 *
 * @param  string $mensagem Mensagem a ser enviada
 * @param  int $httpCode Código de resposta HTTP
 * @return void
 */
function jsonResponse(string $mensagem, int $result, int $httpCode = 200)
{
    //Código HTTP retornado no cabeçalho de resposta da página
    http_response_code($httpCode);

    //Informa que o conteúdo da página é um JSON
    header('Content-type: application/json');

    //Exibe uma mensagem em json formatada
    echo json_encode([
        'msg'    => $mensagem,
        'result' => $result
    ]);
}
