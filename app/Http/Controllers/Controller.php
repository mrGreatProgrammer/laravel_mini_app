<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/** 
 * @OA\Info(
 *      title="My DOC API",
 *      version="1.0.0"
 * ),
 * @OA\PathItem(
 *      path="/api/"
 * ),
 * 
 * @OA/Components(
 *      @OA/SecuritySchema(
 *          securitySchema="bearerAuth",
 *          type="http",
 *          shema="bearer"
 *      )
 * )
 * 
 * 
 *  **/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
