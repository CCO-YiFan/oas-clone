<?php

namespace App\Http\Controllers\ApplyProgram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationRecord;
use App\Models\ApplicationStatusLog;
use Auth;

class ApplyProgramController extends Controller
{
    //
    public function index()
    {
        $get_old_application_record = ApplicationRecord::where('user_id',Auth::id())->get();
        $old_applicant_profile_id = $get_old_application_record[0]->applicant_profile_id;

        $new_application_record_id = ApplicationRecord::insertGetId([
            'user_id' => Auth::id(),
            'applicant_profile_id' => $old_applicant_profile_id,
        ]);
        $application_status_log = ApplicationStatusLog::create([
            'user_id' => Auth::id(),
            'application_record_id' => $new_application_record_id,
            'application_status_id' => config('constants.APPLICATION_STATUS_CODE.COMPLETE_PROFILE_PICTURE'),
        ]);
        dd('success');
        return view('oas.test');
    }
}
