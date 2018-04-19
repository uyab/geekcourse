<?php

namespace App\Providers;

use App\Repositories\CacheRepository;
use App\Repositories\CourseRepository;
use App\Repositories\CourseRepositoryInterface;
use App\Repositories\DummyRepository;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('hello', function ($expression) {
            return "<?php echo 'Hello '.$expression; ?>";
        });

        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
