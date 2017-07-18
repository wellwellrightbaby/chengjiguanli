<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\stumessages;


class StumessageController extends Controller
{
    //
    public function index()
    {
        $query= stumessages::where('stu_no','>','0')->select('stumessages.*')->orderBy('stu_no', 'asc')->get();
        return view('stumessage', ['stumessages' => $query]);
        /*return view('stumessage')->withstumessages(stumessages::all());*/
    }
    public function add(){
    	return view('addstumessage')->withstumessages(stumessages::all());
    }

    public function del(){
    	$stuno=\Request::get('stuno');
    	$del = stumessages::where('stu_no', '=', $stuno)->delete();
    	if($del){
    		return redirect('stumessage');
    	}else{
    		echo '删除失败';
    	}
    }

    public function change(){
    	$stuno=\Request::get('stuno');
    	$change = stumessages::where('stu_no', '=', $stuno)->first();
    	return view('changestumessage',['change'=>$change]);
    	/*->withstumessages(stumessages::where('stu_no', '=', $stuno)->get())*/
    }

    public function update(){
    	$stuno=\Request::input('stu_no');
    	$stuname=\Request::input('stu_name');
    	$sex=\Request::input('sex');
    	$birthday=\Request::input('birthday');
    	$native=\Request::input('native');
    	$classno=\Request::input('class_no');
    	$update= stumessages::where('stu_no','=',$stuno)->update(['stu_name'=>$stuname,'sex'=>$sex,'birthday'=>$birthday,'native'=>$native,'class_no'=>$classno]);  
    	if($update){
    		return redirect('stumessage');
    	}

    }
   
    public function store(Request $request)
    {
        try{
            $option=stumessages::create($request->all());
            if ($option) {
                return redirect('stumessage')->withstumessages(stumessages::all());
            }
        }catch(\Illuminate\Database\QueryException $e){
            return redirect('stumessage')->withstumessages(stumessages::all())->with('message', '错误！请勿输入相同学号!');
        }
    	
    }


}



