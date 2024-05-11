<?php

namespace App\Traits;

trait GetDetailExceptionMessage
{
    public function getDetailExceptionMessage(\Exception $e): array
    {
        return [
            'line' => $e->getLine(),
            'file' => $e->getFile(),
            'reason' => $e->getMessage(),
        ];
    }
}
