<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicantDetail;

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
    public function index(Request $request)
    {
        if($request->ajax()){

            $where_str    = "1 = ?";
            $where_params = array(1); 

            if (!empty($request->input('sSearch')))
            {

                $search = $request->input('sSearch');

                $where_str .= " and (first_name like \"%{$search}%\""

                . "or last_name like \"%{$search}%\""

                . "or city like \"%{$search}%\""
                . "or state like \"%{$search}%\""
                . "or email like \"%{$search}%\""
                . "or designation like \"%{$search}%\""

                . ")";

            }                                            

            $columns = ['first_name','last_name','city','state','email','phone_no','designation','updated_at','id'];

            $applicant_columns_count = ApplicantDetail::select($columns)
                                        ->whereRaw($where_str, $where_params)
                                        ->count();

            $applicant_list = ApplicantDetail::select($columns)
                                ->whereRaw($where_str, $where_params);

            if($request->get('iDisplayStart') != '' && $request->get('iDisplayLength') != ''){
                $applicant_list = $applicant_list->take($request->input('iDisplayLength'))
                ->skip($request->input('iDisplayStart'));

            }          

            if($request->input('iSortCol_0')){

                $sql_order='';

                for ( $i = 0; $i < $request->input('iSortingCols'); $i++ )
                {
                    $column = $columns[$request->input('iSortCol_' . $i)];
                    if(false !== ($index = strpos($column, ' as '))){

                        $column = substr($column, 0, $index);
                    }
                    $applicant_list = $applicant_list->orderBy($column,$request->input('sSortDir_'.$i));   

                }

            } 

            $applicant_list = $applicant_list->get();

            $response['iTotalDisplayRecords'] = $applicant_columns_count;

            $response['iTotalRecords'] = $applicant_columns_count;

            $response['sEcho'] = intval($request->input('sEcho'));

            $response['aaData'] = $applicant_list->toArray();

            return $response;

        }
        return view('demo');
    }

    public function destroy(Request $request,$id){
        
        if(!is_array($id)){
            $id = array($id);
        }


        $applicant = ApplicantDetail::whereIn('id',$id)->delete();

        return redirect()->route('home');

    }

    public function show(Request $request,$id){
        $data = ApplicantDetail::with('getEducationDetail')
                                ->with('getWorkExperienceDetail')
                                ->with('getLanguageDetail')
                                ->with('getTechnologyDetail')
                                ->with('getReferenceDetail')
                                ->with('getPreferanceDetail')
                                ->where('id',$id)
                                ->first();

        if (!empty($data)) {
            $data = $data->toArray();
            // dd($data);
        }
        else
        {
            $data = [];
        }

                                // dd($data);
        return view('show',compact('data'));

    }

}
