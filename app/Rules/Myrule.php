<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;

class Myrule implements ValidationRule
{
    private $num;

    public function __construct($n)
    {
        $this->num = $n;
    }

    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        if ($value % $this->num !== 0) {
            $fail($this->num . 'で割り切れる値が必要です。');
        }
    }
}
