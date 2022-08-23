<?php
namespace App\Imports;
use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
//use Maatwebsite\Excel\Concerns\SkipsOnError;



class ClientNotfctnImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      
        return new Client([
            'nom'     => $row['nom'],
            'pdl'    => $row['pdl'], 
            'telephone' =>$row['telephone'],
        ]);
        
    }
    
    
    
    
    
    
}
