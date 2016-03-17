<?php namespace HotelsProviders\Expedia;

use Illuminate\Foundation\AliasLoader;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        // Register the package namespace
        // $this->package('torann/laravel-asana');
        $this->package('hotels-providers/expedia');

        


		// Auto create app alias with boot method.
		// AliasLoader::getInstance()->a÷lias('Asana', 'Torann\LaravelAsana\Facade');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['hotels-providers'] = $this->app->share(function($app)
		{
            $config = $app->config->get('expedia::config', array());

			return new Asana($config);
		});
	}

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}
