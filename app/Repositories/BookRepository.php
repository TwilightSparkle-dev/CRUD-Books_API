<?php

namespace App\Repositories;

use App\Dto\BookAddDto;
use App\Dto\BookUpdateDto;
use App\Dto\ParamsForListDto;
use App\Models\Book;
use Illuminate\Pagination\LengthAwarePaginator;

class BookRepository
{
    /**
     * @param ParamsForListDto $dto
     * @return LengthAwarePaginator
     */
    public function getList(ParamsForListDto $dto): LengthAwarePaginator
    {
        $query = Book::query();
        if (!is_null($dto->getSearchQuery())) {
            $query->where('title', 'LIKE', '%' . $dto->getSearchQuery() . '%')
            ->orWhere('publisher', 'LIKE', '%' . $dto->getSearchQuery() . '%')
            ->orWhere('author', 'LIKE', '%' . $dto->getSearchQuery() . '%');
        }
        $query->orderBy($dto->getSortColumn(), $dto->getSortDirection());

        return $query->paginate($dto->getPerPage());
    }

    /**
     * @param BookAddDto $dto
     * @return Book
     */
    public function add(BookAddDto $dto): Book
    {
        return Book::create([
            'title'             => $dto->getTitle(),
            'publisher'         => $dto->getPublisher(),
            'author'            => $dto->getAuthor(),
            'genre'             => $dto->getGenre(),
            'date_publication'  => $dto->getDatePublication(),
            'count_words'       => $dto->getCountWords(),
            'price'             => $dto->getPrice(),
        ]);
    }

    /**
     * @param BookUpdateDto $dto
     * @return Book
     */
    public function update(BookUpdateDto $dto): Book
    {
        $book = Book::find($dto->getId());

        $book->title            = $dto->getTitle();
        $book->publisher        = $dto->getPublisher();
        $book->author           = $dto->getAuthor();
        $book->genre            = $dto->getGenre();
        $book->date_publication = $dto->getDatePublication();
        $book->count_words      = $dto->getCountWords();
        $book->price            = $dto->getPrice();

        $book->save();

        return $book;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return (bool) Book::firstWhere('id', $id)?->delete();
    }

    /**
     * @param int $id
     * @return Book
     */
    public function getById(int $id) : Book
    {
        return Book::find($id);
    }
}
