<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\POST(
 *    path="/auth/login",
 *    summary="Аутентификация",
 *    tags={"User"},
 *
 *      @OA\RequestBody(
 *          @OA\MediaType(
 *              mediaType="application/json",
 *                  @OA\Schema (
 *                      @OA\Property(property="email", type="stirng", example="example@google.com"),
 *                      @OA\Property(property="password", type="integer", example="12345678"),
 *                  )
 *          )
 *      ),
 *
 *      @OA\Response(
 *           response=200,
 *           description="OK",
 *           @OA\JsonContent(
 *               @OA\Property(property="access_token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwODAvYXV0aC9sb2dpbiIsImlhdCI6MTcxMTExNTExNywiZXhwIjoxNzExMTE4NzE3LCJuYmYiOjE3MTExMTUxMTcsImp0aSI6Imhuc01RV2ZWVDJKYjRNNlMiLCJzdWIiOiIxIiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.Ve8kh_Yl2bZKfkj05ofyHVu--8-CK_cKXd8fUsG2MCk"),
 *               @OA\Property(property="token_type", type="stirng", example="bearer"),
 *               @OA\Property(property="expires_in", type="integer", example="3600"),
 *           )
 *      )
 *  ),
 *
 *
 *
 *
 *
 * @OA\POST(
 *   path="/api/posts",
 *   summary="Создание",
 *   tags={"Post"},
 *   security={{ "bearerAuth": {} }},
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
 *    security={{ "bearerAuth": {} }},
 *
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
 *     security={{ "bearerAuth": {} }},
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
 *      security={{ "bearerAuth": {} }},
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
 *      security={{ "bearerAuth": {} }},
 *
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
