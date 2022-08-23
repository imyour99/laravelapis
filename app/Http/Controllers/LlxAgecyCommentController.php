<?php

namespace App\Http\Controllers;

use App\Models\AgencyComment;
use Illuminate\Http\Request;
use DB;

class LlxAgecyCommentController extends Controller
{

    public function StoreAgencyComments(Request $request)
    {
        $ins = new AgencyComment();
        $ins->topic = $request->agencyTitle;
        $ins->description = $request->CommentDescription;
        $ins->agency_id = $request->agencyCmmtid;
        $ins->save();
        return response()->json(['modal_id' => $request->agencyCmmtid]);
        //        return true;
    }
}
