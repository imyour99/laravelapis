<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

//use Maatwebsite\Excel\Concerns\SkipsOnError;



class ClientImport implements ToModel, WithHeadingRow {

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row) {
        //dd($row);
        return new Client([
            'nom' => $row['nom'],
            'pdl' => $row['pdl'],
            'telephone' => $row['telephone'],
            'adress' => $row['adress'],
            'villa' => $row['villa'],
            'code' => $row['code'],
            'title' => $row['title'],
            'prenom' => $row['prenom'],
            'email' => $row['email'],
            'dev_typed' => $row['dev_typed_dintervention'],
            'dev_duree' => $row['dev_dureemin'],
            'dev_maille' => $row['dev_maille'],
            'dev_contrat' => $row['dev_contrat'],
            'dev_du' => $row['dev_du'],
            'dev_au' => $row['dev_au'],
            'dev_numero' => $row['dev_numero'],
            'dev_r_voie' => $row['dev_r_voie'],
            'dev_zdd' => $row['dev_zdd'],
            'dev_code' => $row['dev_code_postal'],
            'dev_commune' => $row['dev_commune'],
            'dev_note' => $row['dev_note'],
            'dev_l_voie' => $row['dev_l_voie'],
            'tech_categorie' => $row['tech_categorie_dabonne'],
            'tech_tarif' => $row['tech_tarif'],
            'tech_puissance_souscrite' => $row['tech_puissance_souscrite'],
            'tech_organe_de_coupure' => $row['tech_organe_de_coupure'],
            'tech_produkteur' => $row['tech_produkteur'],
            'tech_type' => $row['tech_type'],
            'tech_matricule' => $row['tech_matricule'],
//          'tech_nbfils' => $row['tech_nbfils'],
            'tech_num_de_serie' => $row['tech_num_de_serie'],
            'tech_nature' => $row['tech_nature'],
            'tech_marque' => $row['tech_marque'],
            'tech_intensite' => $row['tech_intensite'],
            'tech_plage' => $row['tech_plage'],
//            'latitude' => $row['latitude'],
//            'longitude' => $row['longitude'],
            'status' => $row['status'],
        ]);
    }

}
