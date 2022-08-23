<?php
namespace App\Http\Controllers;
use App\Models\AgencyImage;
use Illuminate\Http\Request;
use DB;

class LlxAgencyPhotosController extends Controller {
    //
    public function StoreAgencyFirstPiece(Request $request){
        $sendData=$request->hasFile('Firstagencyfile'); //$request->sendData;
        if ($request->hasFile('Firstagencyfile'))
        {
            $image_name = 'Agency_img-'.time().'.'.$request->Firstagencyfile->extension();
            $request->Firstagencyfile->move(public_path('/uploads/Agency_images'),$image_name);
        }
        else{
            $image_name = '';
            }
            $agencyData = new AgencyImage();
            $agencyData->pic_name = $image_name;
            $agencyData->pic_url = $image_name;
            $agencyData->pic_pos = '1';
            $agencyData->agency_id = $request->id;
            $agencyData->save();

            return response()->json(['modal_id' => $request->id]);
        // return redirect('/agences')->with('success','');
        //return redirect('/collaboration/general_edit/'.$collaboration_id.'/données_personelles')->with('success','General Updated');

    }

    public function StoreAgencySecondPiece(Request $request){
        $sendData=$request->hasFile('Secondagencyfile'); //$request->sendData;
        if ($request->hasFile('Secondagencyfile'))
        {
            $image_name = 'Agency_img-'.time().'.'.$request->Secondagencyfile->extension();
            $request->Secondagencyfile->move(public_path('/uploads/Agency_images'),$image_name);
        }
        else{
            $image_name = '';
            }
            $agencyData = new AgencyImage();
            $agencyData->pic_name = $image_name;
            $agencyData->pic_url = $image_name;
            $agencyData->pic_pos = '2';
            $agencyData->agency_id = $request->id;
            $agencyData->save();
            //$id  = $agencyData->id;
            // return redirect('/collaboration/'.$id.'/données_personelles')->with('success','General Added Succesfully');


        return redirect('/collaboration')->with('success','General Updated');
        //return redirect('/collaboration/general_edit/'.$collaboration_id.'/données_personelles')->with('success','General Updated');


    }

    public function StoreAgencyPieceJoints(Request $request){
       $sendData=$request->hasFile('Thirdagencyfile'); //$request->sendData;
        if ($request->hasFile('Thirdagencyfile'))
        {
            $image_name = 'Agency_img-'.time().'.'.$request->Thirdagencyfile->extension();
            $request->Thirdagencyfile->move(public_path('/uploads/Agency_images'),$image_name);
        }
        else{
            $image_name = '';
        }

            $agencyData = new AgencyImage();
            $agencyData->pic_name = $image_name;
            $agencyData->pic_url = $image_name;
            $agencyData->pic_pos = '3';
            $agencyData->agency_id = $request->id;
            $agencyData->save();
            $id  = $agencyData->id;

       // return redirect('/collaboration/'.$id.'/données_personelles')->with('success','General Added Succesfully');
       return redirect('/collaboration')->with('success','General Updated');
        //return redirect('/collaboration/general_edit/'.$collaboration_id.'/données_personelles')->with('success','General Updated');


    }

    public function collabotation_formation_img_delete(Request $request)
    {

        $pic_name_id = $request->pic_name;
        $res = DB::table('agency_images')->where('id', $pic_name_id)->delete();

        return response()->json(['success' => $res]);
    }
}
