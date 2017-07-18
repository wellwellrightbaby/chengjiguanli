<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\coursemessages;

class CoursemessageController extends Controller
{
    //
    public function index()
    {
        return view('coursemessage')->withcoursemessages(coursemessages::all());
    }
    public function add(){
    	return view('addcoursemessage')->withcoursemessages(coursemessages::all());
    }

    public function del(){
    	$courseno=\Request::get('courseno');
    	$del = coursemessages::where('course_no', '=', $courseno)->delete();
    	if($del){
    		return redirect('coursemessage');
    	}else{
    		echo '删除失败';
    	}
    }

    public function change(){
    	$courseno=\Request::get('courseno');
    	$change = coursemessages::where('course_no', '=', $courseno)->first();
    	return view('changecoursemessage',['change'=>$change]);
    	/*->withstumessages(stumessages::where('stu_no', '=', $stuno)->get())*/
    }

    public function update(){
    	$courseno=\Request::input('course_no');
    	$coursename=\Request::input('course_name');
    	$credithour=\Request::input('credit_hour');
    	$coursehour=\Request::input('course_hour');
    	$update= coursemessages::where('course_no','=',$courseno)->update(['course_name'=>$coursename,'credit_hour'=>$credithour,'course_hour'=>$coursehour]);  
    	if($update){
    		return redirect('coursemessage');
    	}

    }
   
    public function store(Request $request)
    {
        try{
            $option=coursemessages::create($request->all());
            if ($option) {
                return redirect('coursemessage')->withcoursemessages(coursemessages::all());
            }
        }catch(\Illuminate\Database\QueryException $e){
            return redirect('coursemessage')->withcoursemessages(coursemessages::all())->with('message', '错误！请勿输入相同课程号!');
        }
    }
}
