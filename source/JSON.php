<?php

namespace Negotel\Response;

/**
 * Classe Response
 *
 * Esta classe fornece métodos para gerar respostas JSON comuns com diferentes códigos de status HTTP.
 *
 */

class JSON
{
    /**
     * @var int O código de status HTTP da resposta.
     */
    private static int $status = 200;

    /**
     * @var array Os dados da resposta em formato de array associativo.
     */
    private static array $data = [];

    /**
     * Define o código de status HTTP da resposta.
     *
     * @param int $status O código de status HTTP.
     */
    public static function setStatus(int $status)
    {
        self::$status = $status;
    }

    /**
     * Define os dados da resposta.
     *
     * @param array $data Os dados a serem incluídos na resposta.
     */
    public static function setData(array $data)
    {
        self::$data = $data;
    }

    /**
     * Envia a resposta HTTP em formato JSON com o código de status e os dados definidos.
     */
    public static function send()
    {
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code(self::$status);
        echo json_encode(self::$data);
    }

    /**
     * Cria uma resposta HTTP 200 OK com os dados fornecidos em formato JSON.
     *
     * @param array $data Os dados a serem incluídos na resposta (opcional).
     */
    public static function ok(array $data = [])
    {
        self::setStatus(200);
        self::setData($data);
        self::send();
    }

    /**
     * Cria uma resposta HTTP 201 Created com os dados fornecidos em formato JSON.
     *
     * @param array $data Os dados a serem incluídos na resposta (opcional).
     */
    public static function created(array $data = [])
    {
        self::setStatus(201);
        self::setData($data);
        self::send();
    }

    /**
     * Cria uma resposta HTTP 204 No Content.
     */
    public static function noContent()
    {
        self::setStatus(204);
        self::send();
    }

    /**
     * Cria uma resposta HTTP 400 Bad Request com uma mensagem de erro personalizada.
     *
     * @param string $message A mensagem de erro (opcional).
     */
    public static function badRequest(string $message = "Bad Request")
    {
        self::setStatus(400);
        self::setData(['message' => $message]);
        self::send();
    }

    /**
     * Cria uma resposta HTTP 401 Unauthorized.
     */
    public static function notAuthorized()
    {
        self::setStatus(401);
        self::setData(['message' => 'Not Authorized']);
        self::send();
    }

    /**
     * Cria uma resposta HTTP 403 Forbidden.
     */
    public static function forbidden()
    {
        self::setStatus(403);
        self::setData(['message' => 'Forbidden']);
        self::send();
    }

    /**
     * Cria uma resposta HTTP 404 Not Found com uma mensagem de erro personalizada.
     *
     * @param string $message A mensagem de erro (opcional).
     */
    public static function notFound(string $message = "Not Found")
    {
        self::setStatus(404);
        self::setData(['message' => $message]);
        self::send();
    }

    /**
     * Cria uma resposta HTTP 500 Internal Server Error com uma mensagem de erro personalizada.
     *
     * @param string $message A mensagem de erro (opcional).
     */
    public static function internalServerError(string $message = "Internal Server Error")
    {
        self::setStatus(500);
        self::setData(['message' => $message]);
        self::send();
    }
}
