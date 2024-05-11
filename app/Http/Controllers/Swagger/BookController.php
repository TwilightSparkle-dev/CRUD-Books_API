<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     title="Library API",
 *     version="1.0.0"
 * )
 * @OA\PathItem(
 *     path="/api/"
 * )
 */

class BookController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/books",
     *      tags={"Books"},
     *      summary="Get list of books",
     *      description="Returns a paginated and filtered list of books",
     *      operationId="getBookList",
     *      @OA\Parameter(
     *          name="per_page",
     *          in="query",
     *          description="Count of books per page",
     *          required=false,
     *          @OA\Schema(
     *              type="integer",
     *              format="int32",
     *              minimum=1,
     *              maximum=100
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="page",
     *          in="query",
     *          description="Page number",
     *          required=false,
     *          @OA\Schema(
     *              type="integer",
     *              format="int32",
     *              minimum=1
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="sort_column",
     *          in="query",
     *          description="Name of column for sorting (only one of 'title', 'genre', 'author', 'created_at')",
     *          required=false,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="sort_direction",
     *          in="query",
     *          description="Sort direction of 'sort_column'. (only one of 'asc', 'desc')",
     *          required=false,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="search",
     *          in="query",
     *          description="Search value in title, genre, and other book columns",
     *          required=false,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Book list",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=true),
     *              @OA\Property(property="message", type="string", example="Book list"),
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  @OA\Property(property="total", type="integer", example=255),
     *                  @OA\Property(property="current_page", type="integer", example=2),
     *                  @OA\Property(property="last_page", type="integer", example=15),
     *                  @OA\Property(
     *                      property="items",
     *                      type="array",
     *                      @OA\Items(
     *                          type="object",
     *                          @OA\Property(property="id", type="integer", example=1),
     *                          @OA\Property(property="title", type="string", example="To Kill a Mockingbird"),
     *                          @OA\Property(property="publisher", type="string", example="HarperCollins"),
     *                          @OA\Property(property="author", type="string", example="Harper Lee"),
     *                          @OA\Property(property="genre", type="string", example="Fiction"),
     *                          @OA\Property(property="date_publication", type="string", format="date", example="1960-07-11"),
     *                          @OA\Property(property="count_words", type="integer", example=100000),
     *                          @OA\Property(property="price", type="number", format="float", example=15.99),
     *                          @OA\Property(property="created_at", type="string", format="date-time", example="2024-05-10T19:23:14.000000Z"),
     *                          @OA\Property(property="updated_at", type="string", format="date-time", example="2024-05-10T19:23:14.000000Z")
     *                      )
     *                  )
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=false),
     *              @OA\Property(property="message", type="string", example="Bad Request"),
     *              @OA\Property(property="data", type="object")
     *          )
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Internal Server Error",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=false),
     *              @OA\Property(property="message", type="string", example="Internal Server Error"),
     *              @OA\Property(property="data", type="object")
     *          )
     *      )
     * )
     */

    public function index()
    {
    }

    /**
     * @OA\Post(
     *      path="/api/books",
     *      tags={"Books"},
     *      summary="Create a new book",
     *      description="Create a new book record with the provided data",
     *      operationId="createBook",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Book data",
     *          @OA\JsonContent(
     *              @OA\Property(property="title", type="string", example="Example Book", minLength=3, maxLength=100),
     *              @OA\Property(property="publisher", type="string", example="Example Publisher", minLength=3, maxLength=100),
     *              @OA\Property(property="author", type="string", example="Example Author", minLength=3, maxLength=100),
     *              @OA\Property(property="genre", type="string", example="Example Genre", minLength=3, maxLength=50),
     *              @OA\Property(property="date_publication", type="string", format="date", example="2024-05-11"),
     *              @OA\Property(property="count_words", type="integer", example=1000, minimum=1, maximum=10000000),
     *              @OA\Property(property="price", type="number", format="float", example=15.99, minimum=0, maximum=100000),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=true),
     *              @OA\Property(property="message", type="string", example="Book created successfully"),
     *              @OA\Property(property="data", type="object")
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=false),
     *              @OA\Property(property="message", type="string", example="The given data was invalid"),
     *              @OA\Property(property="errors", type="object")
     *          )
     *      )
     * )
     */
    public function store()
    {
    }

    /**
     * @OA\Get(
     *      path="/api/books/{id}",
     *      tags={"Books"},
     *      summary="Get a book",
     *      description="Get a book record by ID",
     *      operationId="getBookById",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of the book to get",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=true),
     *              @OA\Property(property="message", type="string", example="Book retrieved successfully"),
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  @OA\Property(property="id", type="integer", example=1),
     *                  @OA\Property(property="title", type="string", example="Example Book"),
     *                  @OA\Property(property="publisher", type="string", example="Example Publisher"),
     *                  @OA\Property(property="author", type="string", example="Example Author"),
     *                  @OA\Property(property="genre", type="string", example="Example Genre"),
     *                  @OA\Property(property="date_publication", type="string", format="date", example="2024-05-11"),
     *                  @OA\Property(property="count_words", type="integer", example=1000),
     *                  @OA\Property(property="price", type="number", format="float", example=15.99),
     *                  @OA\Property(property="created_at", type="string", format="date-time", example="2024-05-10T19:23:14.000000Z"),
     *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2024-05-10T19:23:14.000000Z")
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Bad Request",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=false),
     *              @OA\Property(property="message", type="string", example="Book not found"),
     *              @OA\Property(property="data", type="object")
     *          )
     *      )
     * )
     */

    public function show()
    {
    }


    /**
     * @OA\Put(
     *      path="/api/books/{id}",
     *      tags={"Books"},
     *      summary="Update a book",
     *      description="Update a book record with the provided data",
     *      operationId="updateBook",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of the book to update",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          description="Book data",
     *          @OA\JsonContent(
     *              @OA\Property(property="title", type="string", example="Updated Book", minLength=3, maxLength=100),
     *              @OA\Property(property="publisher", type="string", example="Updated Publisher", minLength=3, maxLength=100),
     *              @OA\Property(property="author", type="string", example="Updated Author", minLength=3, maxLength=100),
     *              @OA\Property(property="genre", type="string", example="Updated Genre", minLength=3, maxLength=50),
     *              @OA\Property(property="date_publication", type="string", format="date", example="2024-05-11"),
     *              @OA\Property(property="count_words", type="integer", example=1000, minimum=1, maximum=10000000),
     *              @OA\Property(property="price", type="number", format="float", example=15.99, minimum=0, maximum=100000),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=true),
     *              @OA\Property(property="message", type="string", example="Book updated successfully"),
     *              @OA\Property(property="data", type="object")
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=false),
     *              @OA\Property(property="message", type="string", example="The given data was invalid"),
     *              @OA\Property(property="errors", type="object")
     *          )
     *      )
     * )
     */

    public function update()
    {
    }


    /**
     * @OA\Delete(
     *      path="/api/books/{id}",
     *      tags={"Books"},
     *      summary="Delete a book",
     *      description="Delete a book record by ID",
     *      operationId="deleteBook",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of the book to delete",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=true),
     *              @OA\Property(property="message", type="string", example="Book deleted successfully"),
     *              @OA\Property(property="data", type="object")
     *          )
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Error",
     *          @OA\JsonContent(
     *              @OA\Property(property="success", type="boolean", example=false),
     *              @OA\Property(property="message", type="string", example="Book not found"),
     *              @OA\Property(property="data", type="object")
     *          )
     *      )
     * )
     */

    public function delete()
    {

    }
}
