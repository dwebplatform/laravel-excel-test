<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ServiceExport;
use App\Imports\ServicesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Service;
class ServiceController extends Controller
{

    public function import() 
    {
        Excel::import(new ServicesImport, 'services.xlsx'); // получить такой файл 
        return response()->json([
            'status'=>'Excel List was retried'
        ]);
    }
    public function export() 
    {
        return Excel::download(new ServiceExport, 'services.xlsx');// export файла
    }
    public function createDummyData(){
        for($i= 0;$i<100000;$i++){
            $dummyService = Service::create([
                'state' => 'work',
                'amount' => rand(1,10000),
                'comment' => 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsum',
            ]);
            $dummyService->save();
        }        
        return response()->json([
            'status'=>'created'
        ]);
    }
  
}
