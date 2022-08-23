<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Interventions;
use App\Models\User;
use App\Traits\GlobalResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamLeaderController extends Controller
{

    use GlobalResponseTrait;

    public function index()
    {
        //
    }

    /**
     * Stats regarding the interventions grouped by status.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     *
     * @OA\Get(
     *     path="/api/teamleader/stats",
     *     tags={"TeamLeader"},
     *     summary="Stats regarding the interventions grouped by status.",
     *     description="Stats regarding the interventions grouped by status.",
     *     operationId="stats",
     *     security={{"bearer_token":{}}},
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     *  ),
     *      @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function teamCountByStatus(Request $request)
    {
        $user = $request->user();

        if (!$user->isTeamLeader()) {
            return $this->returnResponseError(401, 'You must be a team leader to access this resource.', ['Only team leader is allowed to access this resource.']);
        }

        $teamMembers = $user->teamMembers();

        $interventions = Interventions::whereIn('assignee_id', $teamMembers->pluck('id'))->get();

        $interventions = $interventions->groupBy('status')->map(function ($item, $key) {
            return count($item);
        })->toArray();

        return $this->returnResponse('Success!', $interventions, 200);

    }

    /**
     * Get team members of a team leader.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.gobal>
     *
     * @OA\Get(
     *     path="/api/teamleader/team",
     *     tags={"TeamLeader"},
     *     summary="Get team members of a team leader.",
     *     description="Get team members of a team leader.",
     *     operationId="team",
     *     security={{"bearer_token":{}}},
     *      @OA\Response(
     *     response=200,
     *     description="Success!",
     *     @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * ),
     * )
     */
    public function teamMembers(Request $request)
    {
        $user = $request->user();

        if (!$user->isTeamLeader()) {
            return $this->returnResponseError(401, 'You must be a team leader to access this resource.', ['Only team leader is allowed to access this resource.']);
        }

        $teamMembers = $user->teamMembers()->toArray();

        return $this->returnResponse('Success!', $teamMembers, 200);

    }


}
