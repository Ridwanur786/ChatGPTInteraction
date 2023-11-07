<?php

namespace Ridwan\ChatGPTIntegration;

use Illuminate\Support\ServiceProvider;

class ChatGPTServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ChatGPTClient::class, function ($app) {
            return new ChatGPTClient(config('services.chatgpt.api_key'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
