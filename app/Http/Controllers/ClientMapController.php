<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Client;


class ClientMapController extends Controller
{
  public function index(){
  $quryGettingClint = DB::table('llx_client')->get();
   return view('client.clientsMap', ['data' => $quryGettingClint]);
  //return view('ClientsMap');
}

}
