<?php

namespace App\Providers;

use App\Models\MasterInggridient;
use App\Models\MasterProduct;
use App\Models\Supplier;
use App\Models\User;
use App\Observers\MasterInggridientObserver;
use App\Observers\MasterProductObserver;
use App\Observers\RoleObserver;
use App\Observers\SupplierObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Spatie\Permission\Models\Role;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Supplier::observe(SupplierObserver::class);
        Role::observe(RoleObserver::class);
        MasterInggridient::observe(MasterInggridientObserver::class);
        MasterProduct::observe(MasterProductObserver::class);
    }
}
