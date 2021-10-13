<?php

namespace Nameuser\NameModules\Http\Controllers;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NameUserController extends Controller
{
    /**
     * @OA\get(
     *       path="/api/v1/...",
     *      tags={"ManageCites"},
     *     description="\...",
     *     operationId="signup",
     *     @OA\parameter(name="token" ,in="query", required=true,@OA\Schema(type="string")),
     *     @OA\parameter(name="id_states" ,in="query", required=true,@OA\Schema(type="int")),
     *  @OA\RequestBody(
     *     required=true,
     *     description="if singUp true ",
     *     @OA\JsonContent(
     *       @OA\Property(property="message", type="string", format="string", example="  ...  "),
     *    ),
     * ),
     *     @OA\Response(response=200, description="Success", @OA\JsonContent()),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     *     @OA\Response(response=409, description="Conflict"),
     *     @OA\Response(response=422, description="Unprocessable Entity"),
     *  )
     *
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NameUser  $nameUser
     * @return \Illuminate\Http\Response
     */
    public function show(NameUser $nameUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NameUser  $nameUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NameUser $nameUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NameUser  $nameUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(NameUser $nameUser)
    {
        //
    }
}
