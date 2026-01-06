<?php
use Throwable;
use Illuminate\Http\Request;

//public function render($request, Throwable $e)
{
    if ($request->expectsJson()) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
        ], method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 500);
    }

    return parent::render($request, $e);
}

