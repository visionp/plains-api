<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResultCover
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /**
         * @var \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse $response
         */
        $response = $next($request);
        if ($response instanceof JsonResponse) {
            $modifiedData = ['data' => $response->getData()];
            $response->setData($modifiedData);
        }

        return $response;
    }
}
