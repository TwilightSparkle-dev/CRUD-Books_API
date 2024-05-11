<?php

namespace App\Dto;

class BookUpdateDto
{
    /**
     * @param int $id
     * @param string|null $title
     * @param string|null $publisher
     * @param string|null $author
     * @param string|null $genre
     * @param string|null $datePublication
     * @param int|null $countWords
     * @param float|null $price
     */
    public function __construct(
        private int $id,
        private ?string $title,
        private ?string $publisher,
        private ?string $author,
        private ?string $genre,
        private ?string $datePublication,
        private ?int $countWords,
        private ?float $price,
    )
    {
    }

    /**
     * @param array $data
     * @return self
     */
    static public function createFromRequest(array $data): self
    {
        $args = [];
        $args[] = $data['id'];
        $args[] = $data['title'] ?? null;
        $args[] = $data['publisher'] ?? null;
        $args[] = $data['author'] ?? null;
        $args[] = $data['genre'] ?? null;
        $args[] = $data['date_publication'] ?? null;
        $args[] = $data['count_words'] ?? null;
        $args[] = $data['price'] ?? null;

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

    public function getId(): int
    {
        return $this->id;
    }

}
