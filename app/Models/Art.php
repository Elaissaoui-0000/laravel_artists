<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'desc',
        'img'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

}
