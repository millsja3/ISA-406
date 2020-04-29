<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param \Exception $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        // Handle the CAS Authentication exception which occurs if unable to connect with CAS
        if ($exception instanceof \CAS_AuthenticationException) {
            Session::flash('casautherror', Lang::get('global.casautherror'));
            return redirect('/apperror');
        }

        // Global 500 error
        if (!config('app.debug')) {
            foreach ($this->dontReport as $passException) {
                if ($exception instanceof $passException) {
                    return parent::render($request, $exception);
                }
            }
            if (!($exception instanceof ValidationException) && !($exception instanceof AuthorizationException) && !($exception instanceof NotFoundHttpException)) {
                Log::error($exception);
                return response()->view('errors.500', [], 500);
            }
        }

        return parent::render($request, $exception);
    }
}
