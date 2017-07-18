<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\scoretables;
use App\stumessages;
use App\coursemessages;

class ScoretableController extends Controller
{
    //
    public function index()
    {
    	$query= scoretables::where('stu_noo','>','0')->join('stumessages','scoretables.stu_noo','=','stumessages.stu_no')->orderBy('stu_noo', 'asc')->join('coursemessages','scoretables.course_noo','=','coursemessages.course_no')->select('scoretables.*','stumessages.stu_name','coursemessages.course_name')->orderBy('stu_noo', 'asc')->orderBy('course_noo', 'asc')->get();
        return view('scoretable', ['scoretables' => $query]);
    }
    public function add(){
    	$query= stumessages::where('stu_no','>','0')->select('stumessages.*')->orderBy('stu_no', 'asc')->get();
    	$query2= coursemessages::where('course_no','>','0')->select('coursemessages.*')->get();

    	return view('addscoretable', ['stumessages' => $query,'coursemessages'=>$query2]);
    }

    public function del(){
    	$stuno=\Request::get('stuno');
    	$courseno=\Request::get('courseno');
    	$del = scoretables::where(['stu_noo'=>$stuno,'course_noo'=>$courseno])->delete();
    	if($del){
    		return redirect('scoretable');
    	}else{
    		echo '删除失败';
    		return redirect('scoretable');
    	}
    }

    public function change(){
    	$stuno=\Request::get('stuno');
    	$courseno=\Request::get('courseno');
    	$change = scoretables::where(['stu_noo'=>$stuno,'course_noo'=>$courseno])->first();
    	return view('changescoretable',['change'=>$change]);
    	/*->withstumessages(stumessages::where('stu_no', '=', $stuno)->get())*/
    }

    public function update(){
    	$stuno=\Request::input('stuno');
    	$courseno=\Request::input('courseno');
    	$term=\Request::input('term');
    	$score=\Request::input('score');
    	$update= scoretables::where(['stu_noo'=>$stuno,'course_noo'=>$courseno])->update(['term'=>$term,'score'=>$score]);  
    	if($update){
    		return redirect('scoretable');
    	}
    }
   
    public function store(Request $request)
    {
    	$option=scoretables::create($request->all());
        if ($option) {
            return redirect('scoretable')->withscoretables(scoretables::all());
        } else {
            alert('出错，未保存！');
            return view('scoretable');
        }
    }
}
