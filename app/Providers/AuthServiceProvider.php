<?php

namespace App\Providers;

use App\Models\PerfilUser;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Biblioteca;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (){
            try {
                $user = Auth::user();
                $perfilUsuario = PerfilUser::where('userid', $user->id)->where('perfilid', 1)->first();

                if($perfilUsuario){
                    return true;
                }
                return false;
            } catch (\Exception $ex){
                throw $ex;
            }
        });

        Gate::define('aluno', function (){
            try {
                $user = Auth::user();
                $perfilUsuario = PerfilUser::where('userid', $user->id)->where('perfilid', 2)->first();
                if($perfilUsuario){
                    return true;
                }
                return false;
            } catch (\Exception $ex){
                throw $ex;
            }
        });

        Gate::define('professor', function (){
            try {
                $user = Auth::user();
                $perfilUsuario = PerfilUser::where('userid', $user->id)->where('perfilid', 3)->first();
                if($perfilUsuario){
                    return true;
                }
                return false;
            } catch (\Exception $ex){
                throw $ex;
            }
        });

        Gate::define('visitante', function (){
            try {
                $user = Auth::user();
                $perfilUsuario = PerfilUser::where('userid', $user->id)->where('perfilid', 0)->first();
                if($perfilUsuario){
                    return true;
                }
                return false;
            } catch (\Exception $ex){
                throw $ex;
            }
        });
    }
}
