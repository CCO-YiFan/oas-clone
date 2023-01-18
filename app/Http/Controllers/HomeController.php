<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationRecord;
use App\Models\ApplicantGuardianList;
use App\Models\EmergencyContactList;
use App\Models\ApplicantProfilePicture;
use App\Models\ProgrammePicked;
use App\Models\ProgrammeRecord;
use App\Models\Programme;
use App\Models\ApplicationStatusLog;

use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $application_status_log = ApplicationStatusLog::where('user_id',Auth::id())->first();
        if($application_status_log == null){
            $application_status_id = 0;
            return view('oas.home', compact('application_status_id'));
        }else{
            $application_status_id = $application_status_log->application_status_id;
            if($application_status_id == 5|| $application_status_id == 6 || $application_status_id == 7 || $application_status_id == 8 || $application_status_id == 9 ||$application_status_id == 10 ||$application_status_id == 11 ){
                $applicationRecord = ApplicationRecord::where('user_id',Auth::id())->first();
                $programmePicked1 = ProgrammePicked::where('application_records_id',$applicationRecord->id)->get();
                //$programmeRecord1 = ProgrammeRecord::where('id',$programmePicked1->programme_records_id)->get();
               // $programme1 = Programme::where('id', $programmeRecord1->programmes_id)->get();
                return view('oas.home', compact('application_status_id','programme1'));
            }
            return view('oas.home', compact('application_status_id'));
        }
    }
}
