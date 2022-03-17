<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePasseio extends Model
{
    use HasFactory;

    protected $table = 'images_passeios';

    protected $fillable = ['passeio_id', 'dir'];

    public $timestamps = false;

    public function imagensPasseio()
    {
        return $this->belongsTo(Passeio::class);
    }
}
