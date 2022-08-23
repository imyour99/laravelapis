<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\notification;

class ClientNotfcnController extends Controller {

    public function index() {
        $quryGettingClint = DB::select('select * from llx_notification');
        return view('notification.notification', ['data' => $quryGettingClint]);
        //return view('notification');
    }

    public function ExportNotifctn(Request $request){
        $notificationData = notification::orderBy('id', 'DESC')->get();
        $notifictnCount = count($notificationData);
        $fileName = 'NotificationReport.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $columns = array('Id', 'Nature', 'Created at', 'Updated at', 'Description', 'PDL', 'Criticite', 'status');

        $callback = function () use ($notificationData, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($notificationData as $user) {
                $row['id'] = $user->id;
                $row['nature'] = $user->nature;
                $row['created_at'] = $user->created_at;
                $row['updated_at'] = $user->updated_at;
                $row['description'] = $user->description;
                $row['pdl'] = $user->pdl;
                $row['status'] = $user->status;

                fputcsv($file, array($row['id'], $row['nature'], $row['created_at'], $row['updated_at'], $row['description'], $row['pdl'], '', $row['status']));
            }


            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function AddNotification(Request $request){
      // dd($request->all());
       $sendData=$request->hasFile('Notificationimg1'); //$request->sendData;
        if ($request->hasFile('Notificationimg1'))
        {
            $image_name1 = 'NotificationImg1-'.time().'.'.$request->Notificationimg1->extension();
            $request->Notificationimg1->move(public_path('/uploads/Notification'),$image_name1);
        }
        else{
            $image_name1 = '';
        }
        if ($request->hasFile('Notificationimg2'))
        {
            $image_name2 = 'Notificationimg2-'.time().'.'.$request->Notificationimg2->extension();
            $request->Notificationimg2->move(public_path('/uploads/Notification'),$image_name2);
        }
        else{
            $image_name2 = '';
        }
        if ($request->hasFile('Notificationimg3'))
        {
            $image_name3 = 'Notificationimg3-'.time().'.'.$request->Notificationimg3->extension();
            $request->Notificationimg3->move(public_path('/uploads/Notification'),$image_name3);
        }
        else{
            $image_name3 = '';
        }
        if ($request->hasFile('Notificationimg4'))
        {
            $image_name4 = 'Notificationimg4-'.time().'.'.$request->Notificationimg4->extension();
            $request->Notificationimg4->move(public_path('/uploads/Notification'),$image_name4);
        }
        else{
            $image_name4 = '';
        }

            $notifictndata = new notification();
            $notifictndata->client_id = $request->client_id;
            $notifictndata->nature = $request->Nature;
            $notifictndata->criticality = $request->criticality;;
            $notifictndata->collaborator = $request->notier;
            $notifictndata->description = $request->notificatnDes;
            $notifictndata->collaborator = $request->notier;

            $notifictndata->img1 = $image_name1;
            $notifictndata->img2 = $image_name2;
            $notifictndata->img3 = $image_name3;
            $notifictndata->img4 = $image_name4;
//            echo '<pre>';print_r($notifictndata);
            $notifictndata->save();
            $id  = $notifictndata->id;
            return '1';
       // return redirect('/collaboration/'.$id.'/données_personelles')->with('success','General Added Succesfully');
//         return redirect('/clientsList')->with('success','notification successfully inserted');
        //return redirect('/collaboration/general_edit/'.$collaboration_id.'/données_personelles')->with('success','General Updated');


    }

}
