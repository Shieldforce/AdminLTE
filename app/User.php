<?php

namespace App;

use App\Models\System\Permissions\Permissions;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
     *
     * Funções de Relacionamentos
     *
     *
     */
    public function role()
    {
        return $this->hasOne(\App\Models\System\Roles\Roles::class, 'id', 'role_id');
    }
    /*
     *
     * Funções Auxiliares
     *
     *
     */
    public function hasPermission(Permissions $permission)
    {
        return $this->hasAnyRoles($permission->roles);
    }
    public function hasAnyRoles($roles)
    {
        foreach ( $roles as $role )
        {
            if($role['name'] == $this->role->name)
            {
                return true;
            }
        }
        return false;
    }
}
