<?php

namespace App\Http\Traits;

trait ApiResponseTrait
{
    public function ApiResponce($data, $message, $status = 200, $success = true)
    {
        $responseData = [
            'data' => $data,
            'message' => $message,
            'status' => $status,
            'success' => $success,
        ];
        return response()->json($responseData, $status);
    }
}
