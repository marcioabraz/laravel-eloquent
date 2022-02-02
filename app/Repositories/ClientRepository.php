<?php

namespace App\repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepository extends BaseRepository
{
    public function Model()
    {
        return 'app\Models\Client';
    }
}
