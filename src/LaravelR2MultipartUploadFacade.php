<?php

namespace Kerkness\LaravelR2MultipartUpload;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kerkness\LaravelR2MultipartUpload\Skeleton\SkeletonClass
 */
class LaravelR2MultipartUploadFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-r2-multipart-upload';
    }
}
