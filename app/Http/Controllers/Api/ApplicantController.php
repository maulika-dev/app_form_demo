<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicantDetail;
use App\Models\EducationDetail;
use App\Models\ReferenceDetail;
use App\Models\WorkExperienceDetail;
use App\Models\LanguageDetail;
use App\Models\TechnologyDetail;
use App\Models\PreferanceDetail;

class ApplicantController extends Controller
{
    public function store(Request $request){
    	$data = $request->all();
        // dd($data);

        // save applicant detail
        $applicant_detail = $data['applicant_detail'];
    	$save_data = new ApplicantDetail();
    	$save_data->first_name = $applicant_detail['first_name'];
    	$save_data->last_name = $applicant_detail['last_name'];
    	$save_data->address = $applicant_detail['address'];
    	$save_data->address2 = $applicant_detail['address2'];
    	$save_data->city = $applicant_detail['city'];
    	$save_data->state = $applicant_detail['state'];
    	$save_data->zip = $applicant_detail['zip'];
    	$save_data->designation = $applicant_detail['designation'];
    	$save_data->email = $applicant_detail['email'];
    	$save_data->phone_no = $applicant_detail['phone_no'];
    	$save_data->gender = $applicant_detail['gender'];
    	$save_data->r_status = $applicant_detail['r_status'];
    	$save_data->dob = $applicant_detail['dob'];
    	$save_data->save();

        $applicant_id = $save_data['id'];

    	// save education detail
        $education_detail = $data['education_detail'];
    	$save_education_data = new EducationDetail();
    	$save_education_data->ssc_board = $education_detail['ssc_board'];
    	$save_education_data->ssc_year = $education_detail['ssc_year'];
    	$save_education_data->ssc_percentage = $education_detail['ssc_percentage'];
    	$save_education_data->hsc_board = $education_detail['hsc_board'];
    	$save_education_data->hsc_year = $education_detail['hsc_year'];
    	$save_education_data->hsc_percentage = $education_detail['hsc_percentage'];
    	$save_education_data->b_course_name = $education_detail['b_course_name'];
    	$save_education_data->b_year = $education_detail['b_year'];
    	$save_education_data->b_percentage = $education_detail['b_percentage'];
    	$save_education_data->m_course_name = $education_detail['m_course_name'];
    	$save_education_data->m_university = $education_detail['m_university'];
    	$save_education_data->m_year = $education_detail['m_year'];
    	$save_education_data->m_percentage = $education_detail['m_percentage'];
    	$save_education_data->applicant_id = $applicant_id;
    	$save_education_data->save();
    	
        // save work experience deatail
        $work_detail = $data['work_detail'];
        $limit = count($work_detail['company_name']);
        for ($i=0; $i<$limit ; $i++) 
        { 
            $save_work_data = new WorkExperienceDetail();
            $save_work_data['company_name'] = $work_detail['company_name'][$i];
            $save_work_data['designation'] = $work_detail['designation'][$i];
            $save_work_data['from_date'] = $work_detail['from_date'][$i];
            $save_work_data['to_date'] = $work_detail['to_date'][$i];
            $save_work_data['applicant_id'] = $applicant_id;
            
            $save_work_data->save();
        }

        // save language deatail

        $language_detail = $data['language_detail'];
        if (!empty($language_detail)) {
            $lang = $data['language_detail']['lang'];
            $read = $data['language_detail']['read'];
            $write = $data['language_detail']['write'];
            $speak = $data['language_detail']['speak'];
            foreach ($lang as $lang_key => $lang_value) {
            
                $save_lang_data = new LanguageDetail();
                $save_lang_data['language_type'] = $lang_value;
                $save_lang_data['applicant_id'] = $applicant_id;
                if (in_array($lang_value,$read)) {
                    $save_lang_data['read'] = 1; 
                }
                else
                {
                    $save_lang_data['read'] = 0; 
                }

                if (in_array($lang_value,$write)) {
                    $save_lang_data['write'] = 1; 
                }
                else
                {
                    $save_lang_data['write'] = 0; 
                }

                if (in_array($lang_value,$speak)) {
                    $save_lang_data['speak'] = 1; 
                }
                else
                {
                    $save_lang_data['speak'] = 0; 
                }
                
                $save_lang_data->save();
            }
            
        }
        

        // save technology data
        $technology_detail = $data['technology_detail'];
        if (!empty($technology_detail)) {
            $tech = $data['technology_detail']['tech'];

            foreach ($tech as $tech_key => $tech_value) {
            
                $save_tech_data = new TechnologyDetail();
                $save_tech_data['language_type'] = $tech_value;
                $save_tech_data['applicant_id'] = $applicant_id;
                if (in_array($tech_value,$technology_detail)) {
                    // $mode_value = $technology_detail[$lang_value];
                    $mode_value = array_keys($technology_detail,$tech_value);
                    if (!empty($mode_value)) {
                        $mode_value = head($mode_value);
                        $save_tech_data[$mode_value] = 1;
                    }
                }
                $save_tech_data->save();
            }
        }
       
        // save reference contact 
        $reference_detail = $data['reference_detail'];
        $ref_limit = count($reference_detail['name']);
    	for ($i=0; $i<$ref_limit ; $i++) { 
    		$save_reference_data = new ReferenceDetail();
    		$save_reference_data['referance_name'] = $reference_detail['name'][$i];
            $save_reference_data['contact_no'] = $reference_detail['contact_no'][$i];
            $save_reference_data['relation'] = $reference_detail['relation'][$i];
            $save_reference_data['applicant_id'] = $applicant_id;
            $save_reference_data->save();
    	}

        // preference details
        $preference_detail = $data['preferance_detail'];
        $save_preference_data = new PreferanceDetail();
        $save_preference_data['location'] = $preference_detail['location'];
        $save_preference_data['department'] = $preference_detail['department'];
        $save_preference_data['notice_period'] = $preference_detail['notice_period'];
        $save_preference_data['expacted_ctc'] = $preference_detail['expacted_ctc'];
        $save_preference_data['current_ctc'] = $preference_detail['current_ctc'];
        $save_preference_data['applicant_id'] = $applicant_id;
        $save_preference_data->save();

        return response()->json(['success'=>true]);
    
    }
}
