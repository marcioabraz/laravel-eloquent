<?php

namespace App\repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class BillRepository extends BaseRepository
{
    public function Model()
    {
        return 'app\Models\Bill';
    }
}




