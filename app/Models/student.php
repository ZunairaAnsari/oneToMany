<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'city'
    ];

    public $timestamps = false;

    public function contact_connection()
    {
        return $this->hasOne(Contact::class);
    }
}
