<?php

namespace App\Http\Controllers;

use App\Dto\BookAddDto;
use App\Dto\BookUpdateDto;
use App\Dto\ParamsForListDto;
use App\Http\Requests\BookAddRequest;
use App\Http\Requests\BookDeleteRequest;
use App\Http\Requests\BookListRequest;
use App\Http\Requests\BookShowRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Services\BookService;
use App\Traits\ApiResponseTrait;
use App\Traits\GetDetailExceptionMessage;


class BookController extends Controller
{
    use ApiResponseTrait, GetDetailExceptionMessage;

    public function __construct(protected BookService $bookService)
    {
    }

    /**
     * Display a listing of the resource.
     * @param BookListRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(BookListRequest $request)
    {
        try {
            $result = $this->bookService->bookList(ParamsForListDto::createFromRequest($request->validated()));
            return $this->apiResponse('Book list', $result);
        } catch (\Exception $e) {
            return $this->apiResponse('Something went wrong', $this->getDetailExceptionMessage($e), 500, false);
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param BookAddRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BookAddRequest $request)
    {
        try {
            $result = $this->bookService->bookAdd(BookAddDto::createFromRequest($request->validated()));
            return $this->apiResponse('Book created', $result);
        } catch (\Exception $e) {
            return $this->apiResponse('Something went wrong', $this->getDetailExceptionMessage($e), 500, false);
        }

    }

    /**
     * Display the specified resource.
     * @param BookShowRequest $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(BookShowRequest $request, string $id)
    {
        try {
            $result = $this->bookService->bookShow($id);
            return $this->apiResponse("Book #{$id} show", $result);
        } catch (\Exception $e) {
            return $this->apiResponse('Something went wrong', $this->getDetailExceptionMessage($e), 500, false);
        }
    }

    /**
     * Update the specified resource in storage.
     * @param BookUpdateRequest $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BookUpdateRequest $request, string $id)
    {
        try {
            $result = $this->bookService->bookUpdate(BookUpdateDto::createFromRequest(array_merge($request->validated(), ['id' => $id])));
            return $this->apiResponse("Book #{$id} updated", $result);
        } catch (\Exception $e) {
            return $this->apiResponse('Something went wrong', $this->getDetailExceptionMessage($e), 500, false);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param BookDeleteRequest $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(BookDeleteRequest $request, string $id)
    {
        try {
            $this->bookService->bookDelete($id);
            return $this->apiResponse("Book #{$id} deleted", []);
        } catch (\Exception $e) {
            return $this->apiResponse('Something went wrong', $this->getDetailExceptionMessage($e), 500, false);
        }
    }
}
