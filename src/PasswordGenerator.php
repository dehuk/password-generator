<?php

namespace Dehuk\PasswordGenerator;

class PasswordGenerator
{
    private int $length = 32;

    public function __construct()
    {
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setLength(int $length): PasswordGenerator
    {
        $this->length = $length;
        return $this;
    }

    public function generate(): string
    {
        $x = '';
        for($i = 1; $i <= $this->length; $i++){
            $x .= dechex(random_int(0,255));
        }
        return substr($x, 0, $this->length);
    }
}
