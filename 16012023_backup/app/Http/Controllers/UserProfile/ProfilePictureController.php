<?php

namespace App\Http\Controllers\UserProfile;

use App\Http\Controllers\Controller;
use App\Models\ApplicantProfilePicture;
use App\Models\ApplicationRecord;
use App\Models\ApplicantGuardianList;
use App\Models\EmergencyContactList;
use App\Models\ApplicationStatusLog;
use Auth;
use Illuminate\Http\Request;
use Session;
use Image;

class ProfilePictureController extends Controller
{
    /*
    |-----------------------------------------------------------
    | const variable
    |-----------------------------------------------------------
    */
    private $NEW_USER_CODE = 0;
    private $COMPLETEPROFILEPICTURE = 4;

    /*
    |-----------------------------------------------------------
    | Return step 1 profile picture(form)
    | application_status_id = 0, means it is personal particulars
    | not yet finish to fill in.
    |
    | if application_status_log equal null then   
    |   return application_status_id = 0, means new user
    | else 
    |   return application_status_id
    |-----------------------------------------------------------
    */
    public function index()
    {
        $applicationRecord = ApplicationRecord::where('user_id',Auth::id())->first('applicant_profile_id');
        $application_status_log = ApplicationStatusLog::where('user_id',Auth::id())->first();
        if($application_status_log == null){
            $application_status_id = $this->NEW_USER_CODE;
            return view('oas.userProfile.profilePicture',compact('application_status_id'));
        }else{
            $application_status_id = $application_status_log->application_status_id;
            return view('oas.userProfile.profilePicture',compact('application_status_id'));
        }
    }

    /*
    |-----------------------------------------------------------
    | Create function
    | Format: only Accepted ('jpeg','jpg','png')
    | Size: maximum 5MB
    |-----------------------------------------------------------
    */
    public function create(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,jpg,png|max:5120',
        ]);

        $applicationRecord = ApplicationRecord::where('user_id',Auth::id())->first('applicant_profile_id');

        $picture = $request->file('picture');
        $pictureName = 'profile_picture_'.Auth::user()->name.'_'.date('YmdHii').$picture->getClientOriginalName();
        $pictureResize = Image::make($picture->getRealPath());
        $pictureResize->resize(210,280);
        $pictureResize->save(public_path('images/profile_picture/'.$pictureName));

        ApplicantProfilePicture::create([
            'applicant_profile_id' => $applicationRecord->applicant_profile_id,
            'path' => $pictureName
        ]);

        $find_application_status_log = ApplicationStatusLog::where('user_id',Auth::id())->first();
        if($find_application_status_log != null){
            $application_status_log_id = $find_application_status_log->id;
            $application_status_log = ApplicationStatusLog::find($application_status_log_id);
            $application_status_log->application_status_id = $this->COMPLETEPROFILEPICTURE;
            $application_status_log->save();
        }
        Session::flash('application_status_id',4);
        return back();
    }

    /*
    |-----------------------------------------------------------
    | View function
    |-----------------------------------------------------------
    */
    public function view()
    {
        $applicationRecord = ApplicationRecord::where('user_id',Auth::id())->first('applicant_profile_id');
        $application_status_log_id = ApplicationStatusLog::where('user_id',Auth::id())->first();
        if($applicationRecord == null || $application_status_log_id == null){
            return redirect()->route('home');
        }else{
            $application_status_id = $application_status_log_id->application_status_id;
            if($application_status_id != 4 && $application_status_id < 4){
                return redirect()->route('home');
            }
        }
        $applicant_profile_id = $applicationRecord->applicant_profile_id;
        $applicant_profile_picture = ApplicantProfilePicture::where('applicant_profile_id',$applicant_profile_id)->first();
        return view('oas.userProfile.viewProfilePicture', compact('applicant_profile_picture'));
    }

    /*
    |-----------------------------------------------------------
    | Update function
    |-----------------------------------------------------------
    */
    public function update(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,jpg,png|max:5120',
        ]);
        $APPLICANT_PROFILE_PICTURE_ID = $request->applicant_profile_picture_id;
        $APPLICANT_PROFILE_ID = $request->applicant_profile_id;
        $picture = $request->file('picture');
        $pictureName = 'profile_picture_'.Auth::user()->name.'_'.date('YmdHii').$picture->getClientOriginalName();
        $pictureResize = Image::make($picture->getRealPath());
        $pictureResize->resize(210,280);
        $pictureResize->save(public_path('images/profile_picture/'.$pictureName));
        $applicant_profile_picture = ApplicantProfilePicture::find($APPLICANT_PROFILE_PICTURE_ID);
        $applicant_profile_picture->path = $pictureName;
        $applicant_profile_picture->applicant_profile_id = $APPLICANT_PROFILE_ID;
        $applicant_profile_picture->save();
        Session::flash('success','success');
        return back();
    }
}
