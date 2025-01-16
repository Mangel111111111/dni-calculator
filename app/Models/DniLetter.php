<?php

namespace App\Models;

use App\Models\DniLetter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DniLetter extends Model
{
    use HasFactory;

    protected $table = 'dniLetters';

    protected $fillable = ['dniRemainder', 'letter'];
}
