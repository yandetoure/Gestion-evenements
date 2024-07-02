<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Assurez-vous que Auth est correctement importé
use App\Models\User; // Assurez-vous d'importer le modèle User
use Spatie\Permission\Models\Role;

class UserRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('user')) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}
