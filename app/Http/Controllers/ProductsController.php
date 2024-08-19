<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductsResource;
use App\Models\Products;
use Illuminate\Http\Request;


/**
 * @OA\Get(
 *     path="/api/products",
 *     summary="Get all products (with filter also)",
 *     tags={"products"},
 *     @OA\Parameter(
 *         description="Parameter with mutliple examples",
 *         in="path",
 *         name="id",
 *         required=false,
 *         @OA\Schema(type="string"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *         @OA\Examples(example="uuid", value="0006faf6-7a61-426c-9034-579f2cfcfa83", summary="An UUID value."),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA/JsonContent(
 *              @OA/Property(property="data", type="object",
 *                  @OA/Property(property="id", type="integer", example=1),
 *                  @OA/Property(property="title", type="string", example="first product name"),
 *                  @OA/Property(property="description", type="string", example="first product description text"),
 *                  @OA/Property(property="phone", type="string", example="9000000"),
 *                  @OA/Property(property="price", type="integer", example=10)
 *              )
 *         )
 *     )
 * ),
 * 
 * @OA\Get(
 *     path="/api/products/{id}",
 *     summary="Get a product by id",
 *     tags={"products"},
 *     @OA\Parameter(
 *         description="Parameter with mutliple examples",
 *         in="path",
 *         name="id",
 *         required=true,
 *         @OA\Schema(type="string"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *         @OA\Examples(example="uuid", value="0006faf6-7a61-426c-9034-579f2cfcfa83", summary="An UUID value."),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *          @OA/JsonContent(
 *              @OA/Property(property="data", type="object",
 *                  @OA/Items(
 *                      @OA/Property(property="id", type="integer", example=1),
 *                      @OA/Property(property="title", type="string", example="first product name"),
 *                      @OA/Property(property="description", type="string", example="first product description text"),
 *                      @OA/Property(property="phone", type="string", example="9000000"),
 *                      @OA/Property(property="price", type="integer", example=10)
 *                  )
 *              )
 *         )
 *     )
 * ),
 * @OA\Post(
 *     path="/api/products",
 *     summary="Create a product",
 *     security={{"bearerAuth": {}}},
 *     tags={"products"},
 *      @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="title",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="description",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="phone",
 *                     oneOf={
 *                     	   @OA\Schema(type="string"),
 *                     	   @OA\Schema(type="integer"),
 *                     }
 *                 ),
 *                 example={"title": "мобильный телефон", "description": "супер телефон", "phone": 12345678}
 *             )
 *         )
 *      ),
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     )
 * ),
 * 
 * @OA\Delete(
 *     path="/api/products/{id}",
 *     summary="Delete a product",
 *     security={{"bearerAuth": {}}},
 *     tags={"products"},
 *     @OA\Parameter(
 *         description="Parameter with mutliple examples",
 *         in="path",
 *         name="id",
 *         required=true,
 *         @OA\Schema(type="string"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *         @OA\Examples(example="uuid", value="0006faf6-7a61-426c-9034-579f2cfcfa83", summary="An UUID value."),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     )
 * ),
 */

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Products::all();
        return Products::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        //
        return new ProductsResource(Products::create($request->validated()));
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return Products::find($id);
        return new ProductsResource(Products::with('comments')->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Products::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Products::destroy($id);
        return response()->noContent();
    }
}
