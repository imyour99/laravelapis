<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\GlobalResponseTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use GlobalResponseTrait;

    public function index()
    {
        //
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @OA\Get(
     *      path="/api/v1/user",
     *      operationId="user",
     *      tags={"User"},
     *      summary="Get information regarding the logged in user.",
     *      security={{"bearer_token":{}}},
     *
     *     @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent()
     *    ),
     * )
     */
    public function getUser(Request $request)
    {
        return $this->returnResponse('User details retrieved successfully.', [$request->user()->load('collaboration')], 200);
    }
}
