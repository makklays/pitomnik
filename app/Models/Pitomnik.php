<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitomnik extends Model
{
    use HasFactory;

    protected $table = 'pitomnik';

    public $timestamps = false;

    protected $fillable = [
        'nik',
        'years',
        'type',
        'is_give',
        'add_animal',
        'give_animal'
    ];
}
