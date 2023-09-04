<?php

namespace Conv\Domain\DTOs;

class ConversionResult
{
    public function __construct(
        private ?string $words,
        private ?string $error
        ) {}

    public function getWords(): ?string
    {
        return ($this->words) ? $this->words : null;
    }

    public function getError(): ?string
    {
        return ($this->error) ? $this->error : null;
        // if($this->error) return $this->error;
    }
}