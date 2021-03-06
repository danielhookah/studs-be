<?php
declare(strict_types=1);

namespace App\Application\ResponseEmitter;

use Psr\Http\Message\ResponseInterface;
use Slim\ResponseEmitter as SlimResponseEmitter;

class ResponseEmitter extends SlimResponseEmitter
{
    /**
     * {@inheritdoc}
     */
    public function emit(ResponseInterface $response): void
    {
        $response = $response
            ->withHeader('Content-Type', 'application/json;charset=UTF-8')
            ->withHeader('Access-Control-Allow-Credentials', 'true')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, X-CSRF-Token')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
            ->withHeader('Access-Control-Expose-Headers', 'X-AUTH-Token, X-CSRF-Token')
            ->withHeader('Pragma', 'no-cache')
            ->withHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->withAddedHeader('Cache-Control', 'post-check=0, pre-check=0');

//        header("Content-Type: text/html; charset=UTF-8");
//        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
//        header('Access-Control-Allow-Headers: Content-Type, Origin, X-CSRF-Token, X-AUTH-Token');
//        header('Access-Control-Expose-Headers: X-AUTH-Token, X-CSRF-Token');
//        header('Access-Control-Allow-Credentials: true');

        if (ob_get_contents()) {
            ob_clean();
        }

        parent::emit($response);
    }
}
