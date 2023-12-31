<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/api/registerAdmin',
        '/api/authenticatedAdmin',
        '/api//admin-destroy',
        '/api/admins',
        '/api//content',
        '/api/updated-content',
        '/api/content-destroy',
        '/api/contents'
    ];
}
