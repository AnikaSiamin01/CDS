<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function courseCreate(){
        return view('admin.course_create');
    }
    public function courseCreateStore(Request $request){
        //dd($request->all());
        $course=Course::create($request->all());
        return view('admin.dashboard');
    }
    public function choiceShow(){
        $user_role=Auth::user()->role;

        //dd($user_role);
        if ($user_role<="1"){
            return view('admin.choice');
        }
        else{
            $before_user_role=$user_role-1;
            $before_user=User::where('role',$before_user_role)->first();
            if($before_user->status!=""){
                return view('admin.choice');
            }
            else{
                return "you are not able to make choice";
            }
        }


    }
    public function choiceAssign(Request $request){

        $user_id=Auth::user()->id;
        $checkCourse=$request->checkCourse;
        //dd($request->credit);
        $selectedCourseIds = $request->input('checkCourse');
        $totalCredit = 0;

        if ($selectedCourseIds) {
            foreach ($selectedCourseIds as $selectedCourseId) {
                $course = Course::find($selectedCourseId);
                $totalCredit += $course->credit;
            }
        }
        //dd($totalCredit);
        if ($totalCredit>=Auth::user()->least_credit){
            foreach ($checkCourse as $item){

                $course=Course::where('id',$item)->update([
                    'status'=>'1',
                    'assign_to'=>$user_id
                ]);
                $course=User::where('id',$user_id)->update([
                    'status'=>'1'
                ]);

            }
        }
        else{
              return  "Course credit should be more than requirement";}




        return view('admin.choice');
    }

}
