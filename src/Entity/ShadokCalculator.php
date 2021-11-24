<?php

namespace App\Entity;

use App\Repository\ShadokCalculatorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShadokCalculatorRepository::class)
 */
class ShadokCalculator implements \ArrayAccess
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private int $humanNumber;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private string $shadokNumber;

    public function getHumanNumber(): ?int
    {
        return $this->humanNumber;
    }

    public function setHumanNumber(?int $humanNumber): self
    {
        $this->humanNumber = $humanNumber;

        return $this;
    }

    public function getShadokNumber(): ?string
    {
        return $this->shadokNumber;
    }

    public function setShadokNumber(?string $shadokNumber): self
    {
        $this->shadokNumber = $shadokNumber;

        return $this;
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}
