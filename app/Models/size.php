<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    /** @use HasFactory<\Database\Factories\SizeFactory> */
    use HasFactory;
    protected $fillable = ['size','slug', "user_id"];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
