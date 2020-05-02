<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function episodios()
    {
        return $this->hasmany(Episodio::class);
    }
}
