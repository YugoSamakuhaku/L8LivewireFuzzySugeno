<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Spatie\Permission\Exceptions\UnauthorizedException;

trait AuthorizesRoleOrPermission
{
    use LivewireAlert;

    public function authorizeRoleOrPermission($roleOrPermission, $guard = null): void
    {
        if (Auth::guard($guard)->guest()) {
            throw UnauthorizedException::notLoggedIn();
        }

        $rolesOrPermissions = is_array($roleOrPermission)
            ? $roleOrPermission
            : explode('|', $roleOrPermission);

        if ( ! Auth::guard($guard)->user()->hasAnyRole($rolesOrPermissions) && ! Auth::guard($guard)->user()->hasAnyPermission($rolesOrPermissions)) {
            throw UnauthorizedException::forRolesOrPermissions($rolesOrPermissions);
        }
    }
}
