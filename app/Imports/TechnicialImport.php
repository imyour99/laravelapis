<?php
namespace App\Imports;
use App\Models\Technician;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class TechnicialImport implements ToModel, WithHeadingRow {

    public function model(array $row) {
        return new Technician([
            'nom' => $row['nom'],
            'prenom' => $row['prenom'],
            'type' => $row['type'],
            'poste' => $row['poste'],
            'address' => $row['address'],
            'ville' => $row['ville'],
            'status' => $row['status'],
        ]);
    }

}
