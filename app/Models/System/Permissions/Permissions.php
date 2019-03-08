<?php

namespace App\Models\System\Permissions;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'label',
        'group'
    ];

    /*
     *
     * Relacionamentos
     *
     */
    public function roles()
    {
        return $this->belongsToMany(\App\Models\System\Roles\Roles::class, 'role_permission_pivot', 'permission_id', 'role_id');
    }
}
