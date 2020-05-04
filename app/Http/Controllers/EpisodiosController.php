<?php

namespace App\Http\Controllers;


use App\Model\Episodio;


class EpisodiosController extends BaseController
{
    public function __construct()
    {
        $this->classe = Episodio::class;
    }
}
