<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\Facades\Gate;
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
    public function boot()
    {
        $this->registerPolicies();
        $this->registerProductGates();
    }

    public function registerProductGates(){

        Gate::define('edit-post', function($user, Post $post){
            return $post->user_id == $user->id;
        });

        Gate::define('delete-post', function($user, Post $post){
            return $post->user_id == $user->id;
        });

    }
}
