<?php


namespace TheCaliskan\TDK;


use Illuminate\Http\Client\Response;
use Throwable;

class TDKException extends \Exception
{
    public function __construct(Response $response, $code = 0, Throwable $previous = null)
    {
        parent::__construct($response->json()['error'], $code, $previous);
    }
}