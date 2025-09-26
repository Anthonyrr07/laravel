<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class UsuarioPolicy
{
    
    public function viewAny(User $user): bool
    {
        //
    }

    
    public function view(User $user, Usuario $usuario): bool
    {
        //
    }

    
    public function create(User $user): bool
    {
        //
    }

    
    public function update(User $user, Usuario $usuario): bool
    {
        //
    }

    
    public function delete(User $user, Usuario $usuario): bool
    {
        //
    }

    
    public function restore(User $user, Usuario $usuario): bool
    {
        //
    }

    
    public function forceDelete(User $user, Usuario $usuario): bool
    {
        //
    }
}
