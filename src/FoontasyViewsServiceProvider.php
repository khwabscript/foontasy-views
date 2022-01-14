<?php

use Illuminate\Support\ServiceProvider;

class FoontasyViewsServiceProvider
{
	/**
	 * Bootstrap any package services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    $this->loadViewsFrom(__DIR__.'/../resources/views', 'foontasy');

	    $this->publishes([
	        __DIR__.'/../resources/views' => resource_path('views'),
	    ]);
	}
}