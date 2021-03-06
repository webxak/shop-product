<?php
declare(strict_types=1);

namespace App\Shop;


abstract class ShopProduct
{
    private int $id;
    private string $title;
    private string $firstName;
    private string $lastName;
    private int $price;

    public function __construct(
        string $title,
        string $firstName,
        string $lastName,
        int $price
    ) {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getFullName(): string
    {
        return "{$this->getFirstName()} {$this->getLastName()}";
    }

    public function getSummaryLine(): string
    {
        return "{$this->getTitle()}: "
            . $this->getFullName();
    }
}
