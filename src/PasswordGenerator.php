<?php

namespace Dehuk\PasswordGenerator;

class PasswordGenerator
{
    public function generate(int $length): string
    {
        $x = '';
        for($i = 1; $i <= $length; $i++){
            $x .= dechex(random_int(0,255));
        }
        return substr($x, 0, $length);
    }
}
