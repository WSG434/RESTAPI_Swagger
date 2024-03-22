<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\POST(
 *   path="/api/posts",
 *   summary="Создание",
 *   tags={"Post"},
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *                 @OA\Schema (
 *                     @OA\Property(property="title", type="stirng", example="Some title"),
 *                     @OA\Property(property="likes", type="integer", example="20"),
 *                 )
 *         )
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="stirng", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example="20"),
 *              )
 *          )
 *     )
 * ),
 *
 *
 *
 * @OA\GET(
 *    path="/api/posts",
 *    summary="Просмотр",
 *    tags={"Post"},
 *
 *      @OA\Response(
 *           response=200,
 *           description="OK",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="array",
 *                  @OA\Items(
 *                      @OA\Property(property="id", type="integer", example=1),
 *                      @OA\Property(property="title", type="stirng", example="Some title"),
 *                      @OA\Property(property="likes", type="integer", example="20"),
 *                  )
 *               ),
 *           )
 *      )
 *  ),
 *
 *
 * @OA\GET(
 *     path="/api/posts/{post}",
 *     summary="Единичная запись",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *           response=200,
 *           description="OK",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="object",
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="title", type="stirng", example="Some title"),
 *                   @OA\Property(property="likes", type="integer", example="20"),
 *               )
 *           ),
 *     )
 *   ),
 *
 *
 * @OA\PATCH(
 *      path="/api/posts/{post}",
 *      summary="Обновление",
 *      tags={"Post"},
 *      @OA\Parameter(
 *          description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=1
 *      ),
 *
 *      @OA\RequestBody(
 *          @OA\MediaType(
 *              mediaType="application/json",
 *                  @OA\Schema (
 *                      @OA\Property(property="title", type="stirng", example="Some title for edit"),
 *                      @OA\Property(property="likes", type="integer", example="21"),
 *                  )
 *          )
 *      ),
 *
 *      @OA\Response(
 *            response=200,
 *            description="OK",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="object",
 *                    @OA\Property(property="id", type="integer", example=1),
 *                    @OA\Property(property="title", type="stirng", example="Some title"),
 *                    @OA\Property(property="likes", type="integer", example="20"),
 *                )
 *            ),
 *      )
 *    ),
 *
 *
 * @OA\DELETE(
 *      path="/api/posts/{post}",
 *      summary="Удаление",
 *      tags={"Post"},
 *      @OA\Parameter(
 *          description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=1
 *      ),
 *
 *      @OA\Response(
 *            response=200,
 *            description="OK",
 *            @OA\JsonContent(
 *                @OA\Property(property="message", type="string", example="done"),
 *            ),
 *      )
 *    ),
 *
 */

class PostController extends Controller
{

}
