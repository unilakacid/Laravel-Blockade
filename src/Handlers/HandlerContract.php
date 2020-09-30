<?php

namespace romanzipp\Blockade\Handlers;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

interface HandlerContract
{
    public function isExcludedForRequest(Request $request): bool;

    public function getFailedResponse(): SymfonyResponse;

    public function attemptAuthentication(Request $request): bool;

    public function requestAttemptsAuthentication(Request $request): bool;

    public function rememberSuccessfulAuthentication(Request $request, Closure $next): SymfonyResponse;

    public function isAuthenticated(Request $request): bool;
}
