<?php

use Illuminate\Support\Facades\Route;
use Kerkness\LaravelR2MultipartUpload\Http\Controllers\R2MultipartController;

Route::post('/s3/multipart', [R2MultipartController::class, 'createMultipartUpload']);

Route::options('/s3/multipart', [R2MultipartController::class, 'createMultipartUploadOptions']);

Route::get('/s3/multipart/{uploadId}', [R2MultipartController::class, 'getUploadedParts']);

Route::get('/s3/multipart/{uploadId}/batch', [R2MultipartController::class, 'prepareUploadParts']);

Route::post('/s3/multipart/{uploadId}/complete', [R2MultipartController::class, 'completeMultipartUpload']);

Route::delete('/s3/multipart/{uploadId}', [R2MultipartController::class, 'abortMultipartUpload']);