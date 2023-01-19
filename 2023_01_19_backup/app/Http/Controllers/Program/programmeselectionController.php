<?php

namespace App\Http\Controllers\Program;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
use App\Models\ProgrammeRecord;
use App\Models\ProgrammePicked;
use App\Models\SemesterYearMapping;


class programmeselectionController extends Controller
{
    public function index()
    {
        // todo
        $postgraduate = DB::connection('mysql')->select('SELECT * FROM programmes WHERE programme_levels_id="1" 
        OR programme_levels_id="2" AND status=1 ORDER BY programme_levels_id DESC, EnglishName;');
        $undergraduate = DB::connection('mysql')->select('SELECT * FROM programmes WHERE programme_levels_id!="1" 
        AND programme_levels_id!="2" AND status=1 ORDER BY programme_levels_id DESC, EnglishName;');
        $semester = DB::connection('mysql')->select('SELECT * FROM semester_year_mappings
        INNER JOIN semesters on semester_year_mappings.semesters_id=semesters.id WHERE status=1;
        ');
        $applicationRecord = ApplicationRecord::where('user_id', Auth::id())->first();
        $application_status_log_id = ApplicationStatusLog::where('user_id', Auth::id())->first();
        if ($application_status_log_id == null) {
            $application_status_id = 0;
            return view('oas.program_selection.program_selection', compact('application_status_id', 'postgraduate', 'undergraduate', 'semester'));
        } else {
            $application_status_id = $application_status_log_id->application_status_id;
            return view('oas.program_selection.program_selection', compact('application_status_id', 'postgraduate', 'undergraduate', 'semester'));
        }
    }

    public function loadProgramme()
    {
        //$test = DB::select('select * from programs');
        //$programs = DB::table('programs')->get();
        // $postgraduate = DB::connection('mysql2')->select('SELECT EnglishName FROM course WHERE ProgrammeCode="M" 
        // OR ProgrammeCode="P"');
        // $undergraduate = DB::connection('mysql2')->select('SELECT EnglishName FROM course WHERE ProgrammeCode="F" 
        // OR ProgrammeCode="D" OR ProgrammeCode="B"');
    }

    public function test()
    {
        echo 'test';
    }

    public function inputProgramme(Request $request)
    {
        $completeinputprogramme = 5;
        $asifhiosduf = count($request->all());
        $applicationRecord = ApplicationRecord::where('user_id', Auth::id())->first();
        $postselected = $request->course;




        $choicepriority = 1;
        $choicepriority2 = 2;
        $choicepriority3 = 3;

        if ($postselected == 'PHD') {
            $p1 = $request->postgra1;
            $p2 = $request->postgra2;
            $p3 = $request->postgra3;
            if ($p1 == $p2 || $p2 == $p3 || $p1 == $p3) {
                Session::flash('error','Cannot select the same program');
                return back();
            }
            

            $programmerecordId = ProgrammeRecord::insertGetId([
                'semester_year_mappings_id' => $request->intake_month,
                'programmes_id' => $request->postgra1,
            ]);

            ProgrammePicked::create([
                'application_records_id' => $applicationRecord->id,
                'programme_records_id' => $programmerecordId,
                'choice_priorities_id' => $choicepriority,
            ]);

            $programmerecordId2 = ProgrammeRecord::insertGetId([
                'semester_year_mappings_id' => $request->intake_month,
                'programmes_id' => $request->postgra2,
            ]);

            ProgrammePicked::create([
                'application_records_id' => $applicationRecord->id,
                'programme_records_id' => $programmerecordId2,
                'choice_priorities_id' => $choicepriority2,
            ]);

            $programmerecordId3 = ProgrammeRecord::insertGetId([
                'semester_year_mappings_id' => $request->intake_month,
                'programmes_id' => $request->postgra3,
            ]);

            ProgrammePicked::create([
                'application_records_id' => $applicationRecord->id,
                'programme_records_id' => $programmerecordId3,
                'choice_priorities_id' => $choicepriority3,
            ]);
        } else if ($postselected == 'MAS') {
            $p1 = $request->undergra1;
            $p2 = $request->undergra2;
            $p3 = $request->undergra3;
            if ($p1 == $p2 || $p2 == $p3 || $p1 == $p3) {
                Session::flash('error','Cannot select the same program');
                return back();
            }
            $programmerecordId = ProgrammeRecord::insertGetId([
                'semester_year_mappings_id' => $request->intake_month,
                'programmes_id' => $request->undergra1,
            ]);

            ProgrammePicked::create([
                'application_records_id' => $applicationRecord->id,
                'programme_records_id' => $programmerecordId,
                'choice_priorities_id' => $choicepriority,
            ]);

            $programmerecordId2 = ProgrammeRecord::insertGetId([
                'semester_year_mappings_id' => $request->intake_month,
                'programmes_id' => $request->undergra2,
            ]);

            ProgrammePicked::create([
                'application_records_id' => $applicationRecord->id,
                'programme_records_id' => $programmerecordId2,
                'choice_priorities_id' => $choicepriority2,
            ]);

            $programmerecordId3 = ProgrammeRecord::insertGetId([
                'semester_year_mappings_id' => $request->intake_month,
                'programmes_id' => $request->undergra3,
            ]);

            ProgrammePicked::create([
                'application_records_id' => $applicationRecord->id,
                'programme_records_id' => $programmerecordId3,
                'choice_priorities_id' => $choicepriority3,
            ]);
        }
        $find_application_status_log = ApplicationStatusLog::where('user_id', Auth::id())->first();
        if ($find_application_status_log != null) {
            $application_status_log_id = $find_application_status_log->id;
            $application_status_log = ApplicationStatusLog::find($application_status_log_id);
            $application_status_log->application_status_id = $completeinputprogramme;
            $application_status_log->save();
        }
        Session::flash('application_status_id', 5);
        return back();
    }

    public function updateProgramme(Request $request)
    {
        $semesterpicked = $request->input('intake_month');
        $applicationRecord = ApplicationRecord::where('user_id', Auth::id())->first();
        $applicationRecordId = $applicationRecord->id;
        //first program id.
        $programmedrecord = ProgrammePicked::where('application_records_id', $applicationRecordId)->get();
        $programmerecordId = $programmedrecord[0]->programme_records_id;

        //second program id.
        $programmerecordId2 = $programmedrecord[1]->programme_records_id;

        //third program id.
        $programmerecordId3 = $programmedrecord[2]->programme_records_id;


        $postselected = $request->course;

        if ($postselected == 'MAS') {
            $p1 = $request->undergra1;
            $p2 = $request->undergra2;
            $p3 = $request->undergra3;

            if ($p1 == $p2 || $p2 == $p3 || $p1 == $p3) {
                Session::flash('error','Cannot select the same program');
                return back();
            }
            ProgrammeRecord::where('id', $programmerecordId)->update(
                [
                    'programmes_id' => $request->undergra1,
                ]
            );

            ProgrammeRecord::where('id', $programmerecordId2)->update(
                [
                    'programmes_id' => $request->undergra2,
                ]
            );

            ProgrammeRecord::where('id', $programmerecordId3)->update(
                [
                    'programmes_id' => $request->undergra3,
                ]
            );
        }
        if ($postselected == 'PHD') {
            $p1 = $request->postgra1;
            $p2 = $request->postgra2;
            $p3 = $request->postgra3;

            if ($p1 == $p2 || $p2 == $p3 || $p1 == $p3) {
                Session::flash('error','Cannot select the same program');
                return back();
            }

            ProgrammeRecord::where('id', $programmerecordId)->update(
                [
                    'programmes_id' => $request->postgra1,
                ]
            );

            ProgrammeRecord::where('id', $programmerecordId2)->update(
                [
                    'programmes_id' => $request->postgra2,
                ]
            );

            ProgrammeRecord::where('id', $programmerecordId3)->update(
                [
                    'programmes_id' => $request->postgra3,
                ]
            );
        }

        Session::flash('success', 'Program selection update success');
        return redirect()->route('draft.home');
    }
}
