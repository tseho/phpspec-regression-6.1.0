<?php

class Option
{
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function create(string $value)
    {
        return new self($value);
    }
}
