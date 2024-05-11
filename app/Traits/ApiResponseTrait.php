<?php

namespace App\Traits;


use Illuminate\Http\Client\Response;
use \Illuminate\Http\JsonResponse;


trait ApiResponseTrait
{

    public function apiResponse(string $message, array $data = [], int $code = 200, bool $success = true)
    {
        return response()->json([
            'success'   => $success,
            'message'   => $message,
            'data'      => $data
        ], $code);
    }


}
