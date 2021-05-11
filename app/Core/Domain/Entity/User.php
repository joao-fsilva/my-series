<?php

namespace App\Core\Domain\Entity;

class User
{
    private ?int $id = null;
    private string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setName(string $name): void
    {
        if (empty($name))  {
            throw new \DomainException('O nome do usuário não pode ser vazio.');
        }

        $this->name = $name;
    }
}
