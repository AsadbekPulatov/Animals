<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['count', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
