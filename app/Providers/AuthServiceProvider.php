<?php

namespace App\Providers;

use App\Models\System\Permissions\Permissions;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        \Carbon\Carbon::setLocale('pt_BR');

        //Instanciando o registro das políticas
        $this->registerPolicies($gate);

        try
        {
            $permissions = Permissions::with('roles')->get();
            foreach ($permissions as $permission)
            {
                $gate->define("$permission->name",function(User $user) use ($permission){//user na permission para usar ela dentro da função
                    return $user->hasPermission($permission);
                });
            }

            $gate->before(function (User $user, $habilidade){
                $array =
                    [
                        'role'=>
                            [
                                'name'=>'Administrador',
                            ],
                    ];
                $role = (object)$array;

                if( $user->hasAnyRoles($role) )
                {
                    return true;
                }
            });
        }
        catch (\Exception $exception)
        {

        }
    }
}
