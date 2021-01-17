<?php

namespace App\Imports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\ToModel;

class ServicesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        /* state => new work success failure */
        // 2я колонка state 
        // 3я amount
        // 4я комментарий
        
        return new Service([
            //
            'state'=>$row[1],
            'amount'=>$row[2],
            'comment'=>$row[3]
        ]);
    }
}
