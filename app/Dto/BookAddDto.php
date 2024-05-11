<?php

namespace App\Dto;

class BookAddDto
{
    public function __construct(
        private string $title,
        private string $publisher,
        private string $author,
        private string $genre,
        private string $datePublication,
        private int $countWords,
        private float $price,
    )
    {
    }

    static public function createFromRequest(array $data): self
    {
        $args = [];
        $args[] = $data['title'];
        $args[] = $data['publisher'];
        $args[] = $data['author'];
        $args[] = $data['genre'];
        $args[] = $data['date_publication'];
        $args[] = $data['count_words'];
        $args[] = $data['price'];

        return new self(...$args);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPublisher(): string
    {
        return $this->publisher;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getDatePublication(): string
    {
        return $this->datePublication;
    }

    public function getCountWords(): int
    {
        return $this->countWords;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

}
