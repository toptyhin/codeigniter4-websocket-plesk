<?php

namespace Toptyhin\CodeigniterWebsocket\Libraries;

use Toptyhin\CodeigniterWebsocket\Libraries\JWT;

/**
 * @package   CodeIgniter WebSocket Library: Validate JWT Token
 * @category  Libraries
 * @author    Taki Elias <taki.elias@gmail.com>
 * @license   http://opensource.org/licenses/MIT > MIT License
 * @link      https://github.com/takielias
 *
 * CodeIgniter WebSocket library. It allows you to make powerful realtime applications by using Ratchet Websocket
 */
class Authorization
{
    public static function validateTimestamp($token)
    {
        $token = self::validateToken($token);
        if ($token != false && (now() - $token->timestamp < (\Toptyhin\CodeigniterWebsocket\Config\Services::CodeigniterWebsocket()->token_timeout * 60))) {
            return $token;
        }
        return false;
    }

    public static function validateToken($token)
    {
        return JWT::decode($token, \Toptyhin\CodeigniterWebsocket\Config\Services::CodeigniterWebsocket()->jwt_key);
    }

    public static function generateToken($data)
    {
        return JWT::encode($data, \Toptyhin\CodeigniterWebsocket\Config\Services::CodeigniterWebsocket()->jwt_key);
    }

}