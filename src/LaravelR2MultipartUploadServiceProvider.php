<?php

namespace Kerkness\LaravelR2MultipartUpload;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelR2MultipartUploadServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package->name('laravel-r2-multipart-upload')
            ->hasConfigFile()
            ->hasRoute('web');
    }


    public function bootingPackage()
    {
        //
    }


    /**
     * Register the application services.
     */
    // public function register()
    // {
    //     // // Automatically apply the package configuration
    //     // $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-r2-multipart-upload');

    //     // // Register the main class to use with the facade
    //     // $this->app->singleton('laravel-r2-multipart-upload', function () {
    //     //     return new LaravelR2MultipartUpload;
    //     // });
    // }
}
