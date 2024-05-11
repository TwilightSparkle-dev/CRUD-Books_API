<?php

namespace App\Services;

use App\Dto\BookAddDto;
use App\Dto\BookUpdateDto;
use App\Dto\ParamsForListDto;
use App\Repositories\BookRepository;

class BookService
{
    /**
     * @param BookRepository $bookRepository
     */
    public function __construct(protected BookRepository $bookRepository)
    {
    }

    /**
     * @param ParamsForListDto $dto
     * @return array
     */
    public function bookList(ParamsForListDto $dto): array
    {
        $bookListPaginator = $this->bookRepository->getList($dto);

        return [
            'items'          => $bookListPaginator->items(),
            'total'         => $bookListPaginator->total(),
            'current_page'  => $bookListPaginator->currentPage(),
            'last_page'     => $bookListPaginator->lastPage()
        ];
    }

    /**
     * @param BookAddDto $dto
     * @return array
     */
    public function bookAdd(BookAddDto $dto): array
    {
        return $this->bookRepository->add($dto)->toArray();
    }

    /**
     * @param int $id
     * @return array
     */
    public function bookShow(int $id): array
    {
        return $this->bookRepository->getById($id)->toArray();
    }

    /**
     * @param BookUpdateDto $dto
     * @return array
     */
    public function bookUpdate(BookUpdateDto $dto): array
    {
        return $this->bookRepository->update($dto)->toArray();
    }

    /**
     * @param int $id
     * @return bool
     */
    public function bookDelete(int $id): bool
    {
        return $this->bookRepository->delete($id);
    }


}
