<?php 
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

public function render($request, Throwable $exception)
{
 if ($request->wantsJson()) {
 if ($exception instanceof ValidationException) {
 return response()->json([
 'status' => 'error',
 'message' => 'Validation failed',
 'errors' => $exception->errors()
 ], 422);
 }

 if ($exception instanceof ModelNotFoundException) {
 return response()->json([
 'status' => 'error',
 'message' => 'Resource not found'
 ], 404);
 }
 }

 return parent::render($request, $exception);
}

?>