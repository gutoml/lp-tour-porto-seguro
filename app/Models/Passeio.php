<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passeio extends Model
{
    use HasFactory;

    protected $fillable = ['local', 'price', 'desconto',  'subtitle', 'content'];

    public function imagensPasseio()
    {
        return $this->hasMany(ImagePasseio::class);
    }
}
