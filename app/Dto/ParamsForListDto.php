<?php

namespace App\Dto;

class ParamsForListDto
{
    public function __construct(
        private int $perPage,
        private int $page,
        private string $sortColumn,
        private string $sortDirection,
        private ?string $searchQuery
    )
    {
    }

    static public function createFromRequest(array $data): self
    {
        $args = [];
        $args[] = $data['per_page'] ?? 20;
        $args[] = $data['page'] ?? 1;
        $args[] = $data['sort_column'] ?? 'created_at';
        $args[] = $data['sort_direction'] ?? 'desc';
        $args[] = $data['search'] ?? null;

        return new self(...$args);
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getSortColumn(): string
    {
        return $this->sortColumn;
    }

    public function getSortDirection(): string
    {
        return $this->sortDirection;
    }

    public function getSearchQuery(): ?string
    {
        return $this->searchQuery;
    }
}
