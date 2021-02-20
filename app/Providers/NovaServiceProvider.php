<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * @return void
     */
    protected function routes(): void
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * @return void
     */
    protected function gate(): void
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * @return array
     */
    protected function cards(): array
    {
        return [
            new Help,
        ];
    }

    /**
     * @return array
     */
    protected function dashboards(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function tools(): array
    {
        return [];
    }

    /**
     * @return void
     */
    public function register(): void
    {
        //
    }
}
