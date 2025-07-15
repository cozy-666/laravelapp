<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';  // テーブル名を明示的に指定

    protected $fillable = [
        'name',
        'mail',
        'age'
    ];

    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->mail . ')';
    }
}
