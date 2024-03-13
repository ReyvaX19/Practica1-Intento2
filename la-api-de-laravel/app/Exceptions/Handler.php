<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    protected function convertValidationExceptionToResponse(ValidationException $e,$request)
    {
        if($e -> response){
            return $e ->response;
        }

        return $this->invalidJson($request,$e);
        
    }

    public function invalidJson($request,ValidationException $e)
    {
        return response()->json([
            'message' => $e->getMessage(),
            'errors' => $e->errors(),
        ], $e->status);
    }

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
