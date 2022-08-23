<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Interventions;
use App\Models\User;
use App\Traits\GlobalResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InterventionController extends Controller
{

    use GlobalResponseTrait;

    public function index()
    {
        //
    }

    /**
     * Get all interventions assigned to a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     * @OA\Post(
     *      path="/api/v1/technicien/interventions",
     *      operationId="getInterventionsAll",
     *      tags={"Interventions", "Technicien"},
     *      summary="Get all interventions assigned to a user.",
     *      description="Get all interventions assigned to a user.",
     *      security={{"bearer_token":{}}},
     * @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     *  ),
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function getAllInterventions(Request $request)
    {
        $user = $request->user();
        $interventions = $user->interventions()->with('client')->get()->toArray();

        return $this->returnResponse('Success!', $interventions, 200);
    }

    /**
     * Get all interventions with client's longitude and latitude assigned to a technicien.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     *
     * @OA\Post(
     *      path="/api/v1/technicien/interventions/map",
     *      operationId="getInterventionsAllMap",
     *      tags={"Interventions", "Technicien"},
     *      summary="Get all interventions with longitude and latitude assigned to a technicien.",
     *      description="Get all interventions with longitude and latitude assigned to a technicien.",
     *      security={{"bearer_token":{}}},
     * @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     *  ),
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function getAllInterventionsForMap(Request $request)
    {
        $user = $request->user();
        $interventions = $user->interventions()->with('client:id,nom,latitude,longitude')->get()->toArray();

        return $this->returnResponse('Success!', $interventions, 200);
    }


    /**
     * Get monthly count of interventions grouped by status assigned to a technicien.
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     *
     * @OA\Post(
     *      path="/api/v1/technicien/interventions/stats/monthly",
     *      operationId="getInterventionsMonthly",
     *      tags={"Interventions", "Technicien", "Statistics/Reports"},
     *      summary="Get monthly count of interventions grouped by status assigned to a technicien.",
     *      description="Get monthly count of interventions grouped by status assigned to a technicien.",
     *      security={{"bearer_token":{}}},
     * @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     *  ),
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function monthlyCountByStatus(Request $request)
    {
        $user = $request->user();
        $interventions = $user->interventions()->with('client')->get();

        $interventions = $interventions->groupBy(function ($item, $key) {
            return Carbon::parse($item['schedule'])->format('F');
        });

        $interventions = $interventions->map(function ($item, $key) {
            return collect($item)->groupBy('status')->map(function ($item, $key) {
                return count($item);
            });
        })->toArray();

        return $this->returnResponse('Success!', $interventions, 200);
    }

    /**
     * Get interventions by id, assigned to the technicien.
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     *
     * @OA\Get(
     *      path="/api/v1/technicien/intervention/{id}",
     *      operationId="getInterventionById",
     *      tags={"Interventions", "Technicien"},
     *      summary="Get intervention by id assigned to the technicien.",
     *      description="Returns intervention by id assigned to the technicien.",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="Intervention id.",
     *     required=true,
     *     example="1",
     *     @OA\Schema(
     *         type="integer",
     *         format="int64"
     * )
     *   ),
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=403,
     *     description="Forbidden."
     * ),
     *      @OA\Response(
     *     response=404,
     *     description="Not found."
     * ),
     * )
     */
    public function getInterventionByID($id, Request $request)
    {

        $intervention = Interventions::with('client')->find($id);

        if (!$intervention) {
            return $this->returnResponseError(404, 'Intervention not found.');
        }

        $user = $request->user();

        if ($intervention->assignee_id != $user->id) {
            return $this->returnResponseError(403, 'Forbidden.', ['You are not allowed to view this intervention.']);
        }

        $intervention = $intervention->toArray();

        return $this->returnResponse('Success!', [$intervention], 200);
    }

    /**
     * Upload intervention report PDF.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     *
     * @OA\Post(
     *      path="/api/v1/technicien/intervention/{id}/upload-pdf",
     *      operationId="uploadInterventionReport",
     *      tags={"Interventions", "Technicien", "Upload"},
     *      summary="Upload intervention report PDF.",
     *      description="Upload intervention report PDF.",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="Intervention id.",
     *     required=true,
     *     example="1",
     *     @OA\Schema(
     *         type="integer",
     *         format="int64"
     * )
     *  ),
     *      @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *         mediaType="multipart/form-data",
     *         @OA\Schema(
     *        type="object",
     *        @OA\Property(
     *       property="file",
     *       description="PDF file",
     *       type="file",
     *       format="file"
     *    )
     * )
     * )
     * ),
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=403,
     *     description="Forbidden."
     * ),
     *      @OA\Response(
     *     response=404,
     *     description="Not found."
     * ),
     *      @OA\Response(
     *     response=422,
     *     description="Unprocessable Entity."
     * ),
     *      @OA\Response(
     *     response=500,
     *     description="Internal Server Error."
     * ),
     * )
     */
    public function uploadPDF(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf',
        ]);

        if ($validator->fails()) {
            return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
        }

        $intervention = Interventions::find($id);

        if (!$intervention) {
            return $this->returnResponseError(404, 'Intervention not found.');
        }

        $user = $request->user();

        if ($intervention->assignee_id != $user->id) {
            return $this->returnResponseError(403, 'Forbidden.', ['You are not allowed to view this intervention.']);
        }

        $file = $request->file('file');

        $fileName = $file->getClientOriginalName();

        $file->move(public_path('uploads/interventions'), $fileName);

        $path = public_path('uploads' . DIRECTORY_SEPARATOR . 'interventions') . DIRECTORY_SEPARATOR . $fileName;

        return $this->returnResponse('Success!', [$path], 200);
    }

    /**
     * Update the status of an intervention assigned to the technicien.
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     *
     * @OA\Patch(
     *      path="/api/v1/technicien/intervention/{id}/update-status",
     *      operationId="updateIntervention",
     *      tags={"Interventions", "Technicien"},
     *      summary="Update intervention",
     *      description="Update intervention",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="Intervention id",
     *     required=true,
     *     example="1",
     *     @OA\Schema(
     *         type="integer",
     *         format="int64"
     * )
     *  ),
     *      @OA\Parameter(
     *     name="status",
     *     in="query",
     *     description="Intervention status",
     *     required=true,
     *     example="1",
     *     @OA\Schema(
     *         type="integer",
     *         format="int64"
     * )
     *   ),
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=403,
     *     description="Forbidden."
     * ),
     *      @OA\Response(
     *     response=404,
     *     description="Not found."
     * ),
     * )
     */
    public function updateInterventionStatus($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
        }

        $intervention = Interventions::with('client')->find($id);

        if (!$intervention) {
            return $this->returnResponseError(404, 'Intervention not found.');
        }

        $user = $request->user();

        if ($intervention->assignee_id != $user->id) {
            return $this->returnResponseError(403, 'Forbidden.', ['You are not allowed to access this intervention.']);
        }

        $intervention->status = $request->status;
        $intervention->save();

        return $this->returnResponse('Success!', [$intervention->toArray()], 200);
    }

    /**
     * Get intervention by status assigned to user.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.gobal>
     * @OA\Post(
     *      path="/api/v1/technicien/interventions/status",
     *      operationId="getInterventionsByStatus",
     *      tags={"Interventions", "Technicien"},
     *      summary="Get interventions by status, assigned to a user.",
     *      description="Get interventions by status, assigned to a user.",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *     name="status",
     *     in="query",
     *     description="Status of the intervention.",
     *     required=true,
     *     example="2",
     *     @OA\Schema(
     *         type="string",
     *         format="string"
     *  )
     *    ),
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     *  ),
     *      @OA\Response(
     *     response=422,
     *     description="Parameters are not valid."
     *  ),
     *      @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function getInterventionsByStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
        }

        $user = $request->user();
        $status = $request->status;
        $interventions = $user->interventions()
            ->where('status', $status)
            ->with('client')
            ->get()->toArray();

        return $this->returnResponse('Success!', $interventions, 200);
    }

    /**
     * Get intervention by date range assigned to a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     * @OA\Post(
     *      path="/api/v1/technicien/interventions/date-range",
     *      operationId="getInterventionsByDateRange",
     *      tags={"Interventions", "Technicien"},
     *      summary="Get interventions by date range assigned to a user.",
     *      description="Get interventions by date range assigned to a user.",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *     name="start_date",
     *     in="query",
     *     description="Start date of the date range in Y-m-d format.",
     *     required=true,
     *     example="2022-01-31",
     *     @OA\Schema(
     *         type="string",
     *         format="date"
     *    )
     *      ),
     *      @OA\Parameter(
     *     name="end_date",
     *     in="query",
     *     description="End date of the date range in Y-m-d format.",
     *     required=true,
     *     example="2022-12-31",
     *     @OA\Schema(
     *         type="string",
     *         format="date"
     *   )
     *    ),
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     *  ),
     *      @OA\Response(
     *     response=422,
     *     description="Parameters are not valid."
     *  ),
     *      @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function getInterventionsByDateRange(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
        }

        $user = $request->user();
        $startDate = Carbon::createFromFormat('Y-m-d', $request->start_date)->startOfDay();
        $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date)->endOfDay();

        $interventions = $user->interventions()
            ->whereBetween('schedule', [$startDate, $endDate])
            ->with('client')
            ->get()->toArray();

        return $this->returnResponse('Success!', $interventions, 200);
    }

    /**
     * Get interventions by date range and status, assigned to a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     * @OA\Post(
     *      path="/api/v1/technicien/interventions/date-range/status",
     *      operationId="getInterventionsByDateRangeAndStatus",
     *      tags={"Interventions", "Technicien"},
     *      summary="Get interventions by date range and status, assigned to a user.",
     *      description="Get interventions by date range and status, assigned to a user.",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *     name="start_date",
     *     in="query",
     *     description="Start date of the date range in Y-m-d format.",
     *     required=true,
     *     example="2022-01-31",
     *     @OA\Schema(
     *         type="string",
     *         format="date"
     *    )
     *      ),
     *      @OA\Parameter(
     *     name="end_date",
     *     in="query",
     *     description="End date of the date range in Y-m-d format.",
     *     required=true,
     *     example="2022-12-31",
     *     @OA\Schema(
     *         type="string",
     *         format="date"
     *   )
     *     ),
     *      @OA\Parameter(
     *     name="status",
     *     in="query",
     *     description="Status of the intervention.",
     *     required=true,
     *     example="2",
     *     @OA\Schema(
     *         type="string",
     *         format="string"
     *  )
     *    ),
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     *  ),
     *      @OA\Response(
     *     response=422,
     *     description="Parameters are not valid."
     *  ),
     *      @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function getInterventionsByDateRangeStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
            'status' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
        }

        $user = $request->user();
        $status = $request->status;
        $startDate = Carbon::createFromFormat('Y-m-d', $request->start_date)->startOfDay();
        $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date)->endOfDay();

        $interventions = $user->interventions()
            ->whereBetween('schedule', [$startDate, $endDate])
            ->where('status', $status)
            ->with('client')
            ->get()->toArray();

        return $this->returnResponse('Success!', $interventions, 200);
    }

    /**
     * Get interventions by date range and/or status or all, assigned to user.
     *
     * @param User $user
     * @param string $startDate
     * @param string $endDate
     * @param int $status
     * @return \Illuminate\Database\Eloquent\Collection
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    private function getInterventions(User $user, string $startDate = '', string $endDate = '', int $status = 0)
    {
        $interventions = $user->interventions()->with('client');

        if ($startDate != '' && $endDate != '') {
            $interventions = $interventions->whereBetween('schedule', [$startDate, $endDate]);
        }

        if ($status) {
            $interventions = $interventions->where('status', $status);
        }

        return $interventions->get();
    }




    public function tech_marque()
    {
        $tech_marque = DB::table('tech_marque')->get()->toArray();

        return $this->returnResponse('Success!', $tech_marque, 200);

    }


    public function start_intervation(Request $request)
    {
        $client_id= $request->client_id;
        $assignee_id= $request->assignee_id;
        $schedule  = $request->schedule;

        $start_intervation = DB::table('interventions')
        ->where('client_id',$client_id)
        ->where('assignee_id',$assignee_id)
        ->where('schedule',$schedule)

        ->update(array('coll_start_date' => date('Y-m-d H:i:s')));

        return $this->returnResponse('Success!');
    }

    public function end_intervation(Request $request)
    {

        $client_id= $request->client_id;
        $assignee_id= $request->assignee_id;
        $schedule  = $request->schedule;

        $start_intervation = DB::table('interventions')
        ->where('client_id',$client_id)
        ->where('assignee_id',$assignee_id)
        ->where('schedule',$schedule)

        ->update(array('coll_end_date' => date('Y-m-d H:i:s')));

        return $this->returnResponse('Success!');
    }
}
