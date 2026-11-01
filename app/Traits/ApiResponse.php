<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponse
{
    protected function successResponse(mixed $data, string $message = null, int $code = Response::HTTP_OK): JsonResponse

    {
        return response()->json([
            'status' => 'Success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function errorResponse(string $message = null, int $code = Response::HTTP_BAD_REQUEST, $errors = null): JsonResponse
    {
        return response()->json([
            'status' => 'Error',
            'message' => $message ?? 'An error occurred',
            'errors' => $errors
        ], $code);
    }
}
