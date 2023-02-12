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
        '/admin/manage/topic/create',
        '/admin/manage/topic/edit',
        '/admin/manage/topic/del',
        
        '/admin/manage/event/create',
        '/admin/manage/event/edit',
        '/admin/manage/event/del',
        
        '/admin/manage/gallery/create',
        '/admin/manage/gallery/edit',
        '/admin/manage/gallery/del',
    ];
}
