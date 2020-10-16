<?php

namespace App\Providers;

use App\Events\ClientMessageEvent;
use Illuminate\Support\Facades\Event;
use App\Events\RemoveUnusedFilesEvent;
use Illuminate\Auth\Events\Registered;
use App\Listeners\WelcomNewUserListener;
use App\Events\NewUserHasSubscribedEvent;
use App\Listeners\ClientMessageListener;
use App\Listeners\DeleteHireSubmissionFilesListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        NewUserHasSubscribedEvent::class => [
            WelcomNewUserListener::class,
        ],
        RemoveUnusedFilesEvent::class => [
            DeleteHireSubmissionFilesListener::class,
        ],
        ClientMessageEvent::class => [
            ClientMessageListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
