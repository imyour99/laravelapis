<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\OpenApi(
 *  @OA\Info(
 *      title="IMC OpenApi Documentation",
 *      version="1.0.0",
 *      description="API documentation for IMC App",
 *      @OA\Contact(
 *          email="ali.shaikh@itfaq.cloud"
 *      )
 *  ),
 *  @OA\PathItem(
 *      path="/"
 *  )
 * )
 * @OAS\SecurityScheme(
 *      securityScheme="bearer_token",
 *      type="http",
 *      scheme="bearer"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
