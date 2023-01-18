<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AcademicRecord;
use App\Models\AcademicTranscript;
use DB;
use Auth;
use App\Models\Payment;
use App\Models\ApplicationRecord;
use App\Models\ApplicantProfilePicture;
use App\Models\ApplicantGuardianList;
use App\Models\EmergencyContactList;
use App\Models\ApplicationStatusLog;
use Session;
use App\Models\Race;
use App\Models\Religion;
use App\Models\Nationality;
use App\Models\Gender;
use App\Models\Marital;
use App\Models\UserDetail;
use App\Models\ApplicantProfile;
use App\Models\AddressMapping;
use App\Models\Address;
use App\Models\Country;
use App\Models\IcMapping;
use App\Models\ProgrammeRecord;
use App\Models\ProgrammePicked;
use App\Models\SchoolTranscript;
use App\Models\SemesterYearMapping;
use App\Models\SupportingDocument;

class supportingdocumentController extends Controller
{
    public function index()
    {
        $applicationRecord = ApplicationRecord::where('user_id',Auth::id())->first('applicant_profile_id');
        $application_status_log_id = ApplicationStatusLog::where('user_id', Auth::id())->first();
        if ($application_status_log_id == null) {
            $application_status_id = 0;
            return view('oas.supporting_document.supporting_document',compact('application_status_id'));
        } else {
            $application_status_id = $application_status_log_id->application_status_id;
             return view('oas.supporting_document.supporting_document', compact('application_status_id'));
        }
       
    }

    public function insertDoc(Request $request)
    {
        $completeinsertIC = 10;

        //get user id for insert in table.
        $applicationRecord = ApplicationRecord::where('user_id', Auth::id())->first();
        $applicant_profile_id = $applicationRecord->applicant_profile_id;
        $applicant_profile = ApplicantProfile::where('id', $applicant_profile_id)->first();
        $user_detail_id = $applicant_profile->user_detail_id;

        //get academic records id for insert in table.
        $applicationRecordId = $applicationRecord->id;
        $findAcademicRecordTable = AcademicRecord::where('application_record_id', $applicationRecordId)->first();

        $academicRecordId = $findAcademicRecordTable->id;

        $icfront = $request->file('ic_front');
        $icback = $request->file('ic_back');
        $secondarytranscript = $request->file('sec_transcript');
        $secondaryleavingcert = $request->file('sec_leaving');
        $icfrontName = date('YmdHii') . $icfront->getClientOriginalName();
        $icbackName = date('YmdHii') . $icback->getClientOriginalName();
        $secondarytranscriptName = date('YmdHii') . $secondarytranscript->getClientOriginalName();
        $secondaryleavingcertName = date('YmdHii') . $secondaryleavingcert->getClientOriginalName();

        $icfront->move('images/profile_picture', $icfrontName);
        $icback->move('images/profile_picture', $icbackName);
        $secondarytranscript->move('images/profile_picture', $secondarytranscriptName);
        $secondaryleavingcert->move('images/profile_picture', $secondaryleavingcertName);

        $icfrontpath = 'images/profile_picture/' . $icfrontName;
        $icbackpath = 'images/profile_picture/' . $icbackName;
        $secondarytranscriptpath = 'images/profile_picture/' . $secondarytranscriptName;
        $secondaryleavingcertpath = 'images/profile_picture/' . $secondaryleavingcertName;


        $SupportingDocumentid = SupportingDocument::insertGetId([
            'ic_front' => $icfrontpath,
            'ic_back' => $icbackpath,
        ]);

        IcMapping::create([
            'supporting_documents_id' => $SupportingDocumentid,
            'user_details_id' => $user_detail_id,
        ]);

        $schoolTranscriptId = SchoolTranscript::insertGetId([
            'transcript' => $secondarytranscriptpath,
            'leaving_cert' => $secondaryleavingcertpath,
        ]);

        AcademicTranscript::create([
            'academic_records_id' => $academicRecordId,
            'school_transcript_id' => $schoolTranscriptId,
            'school_levels_id' => 1,
        ]);

        $find_application_status_log = ApplicationStatusLog::where('user_id', Auth::id())->first();
        if ($find_application_status_log != null) {
            $application_status_log_id = $find_application_status_log->id;
            $application_status_log = ApplicationStatusLog::find($application_status_log_id);
            $application_status_log->application_status_id = $completeinsertIC;
            $application_status_log->save();
        }
        Session::flash('application_status_id', $completeinsertIC);
        return back();
    }
}
