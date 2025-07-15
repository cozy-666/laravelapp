<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson; // Import the ScopePerson class


class Person extends Model
{
    protected $guarded = array('id');

    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'numeric|between:0,150'
    ];

    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->mail . ')';
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }
    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopePerson());
    }
}

