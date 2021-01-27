<?php

namespace app;

/**
 * Classe que gerencia o envio de mensagens para o Telegram
 */
class ApiController
{

    /**
     * Retorna o ID do chat na qual o robô está inserido
     *
     * @param  string $token
     * @return string
     */
    public static function getChatId(string $token): ?string
    {
        //Montando a URL na qual vamos obter as mensagens enviadas para o nosso robô
        $endpoint = "https://api.telegram.org/bot{$token}/getUpdates";

        //Consultamos a API através do método GET
        $content  = file_get_contents($endpoint);

        //Verifica se o conteúdo é inválido
        if ($content == '' || $content == null)
            return null;

        //Transformamos o JSON em array
        $arr = json_decode($content, true);

        //Verifica se o ID do chat não foi encontrado
        if (!isset($arr['result'][0]['message']['chat']['id']))
            return null;

        //Retorna o ID do chat
        return $arr['result'][0]['message']['chat']['id'];
    }

    /**
     * Envia uma mensagem através do Robô e chat informado.
     *
     * @param  string $mensagem Corpo da mensagem
     * @return bool true se tudo ocorreu bem e false do contrário
     */
    public static function sendMessage(string $mensagem): bool
    {
        try {
            //Instância da classe BotApi, passando o Token que se refere ao nosso robô
            $bot = new \TelegramBot\Api\BotApi(TOKEN);

            //Chamamos o metódo que envia a mensagem para o robô
            $bot->sendMessage(CHAT_ID, $mensagem);

            //Retorna true se tudo ocorreu bem
            return true;
        } catch (\Exception $ex) {
            //Retorna falase em caso de erros
            return false;
        }
    }
}
