<?php

namespace codewithren\contactform;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

use codewithren\contactform\Http\Livewire\ContactForm;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    //
    $this->publishes([
        __DIR__.'/../config/config.php' => config_path('contactform.php'),
    ], 'contactform-config');
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'contactform');
    $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    Livewire::component('contact-form', ContactForm::class);

    
    }
}
