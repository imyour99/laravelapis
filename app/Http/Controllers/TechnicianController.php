<?php

    namespace App\Http\Controllers;

    use DB;
    use Illuminate\Http\Request;
    use App\Models\Technician;
    use App\Imports\TechnicialImport;
    use Maatwebsite\Excel\Facades\Excel;

    class TechnicianController extends Controller
    {
        public function index()
        {
            $quryGettingClint = DB::select('select * from llx_technician');
            return view('Techniciens', ['data' => $quryGettingClint]);
        }

        public function EmployeeExport(Request $request){
            $EmpData = Technician::orderBy('id', 'DESC')->get();
            $EmpCount = count($EmpData);
            $fileName = 'EmployeeData.csv';
            $headers = array(
                "Content-type" => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma" => "no-cache",
                "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
                "Expires" => "0"
            );

            $columns = array('nom', 'prenom', 'type', 'poste', 'address', 'ville', 'status');

            $callback = function () use ($EmpData, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);

                foreach ($EmpData as $user) {
                    $row['nom'] = $user->nom;
                    $row['prenom'] = $user->prenom;
                    $row['type'] = $user->type;
                    $row['poste'] = $user->poste;
                    $row['address'] = $user->address;
                    $row['ville'] = $user->ville;
                    $row['status'] = $user->status;
                    fputcsv($file, array($row['nom'], $row['prenom'], $row['type'], $row['poste'], $row['address'], $row['ville'], $row['status']));
                }


                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        }


        public function EmployeeImport()
        {
            Excel::import(new TechnicialImport, request()->file('file'));

            return back();
        }
    }
