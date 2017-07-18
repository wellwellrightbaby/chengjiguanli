<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>添加成绩</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

    <div id="title" style="text-align: center;">
        <h1>三年一班</h1>
        <div style="padding: 5px; font-size: 16px;">添加成绩&nbsp;&nbsp;<a href="scoretable">返回</a></div>
    </div>
    <hr>
 
   
    <form action="{{ url('addscoretablestore') }}" method="POST" role="form" style="width:67%; margin:0 auto;">
       
        <?php echo csrf_field(); ?>
        <div class="form-group" >
            <label>学号</label>
            <select class="form-control" required="required" name="stu_noo"> 
            @foreach($stumessages as $stumess)
              <option value="<?php echo $stumess['stu_no']?>">{{ $stumess->stu_no }}&nbsp;&nbsp;{{ $stumess->stu_name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>课程号</label>
            <select class="form-control" required="required" name="course_noo"> 
            @foreach($coursemessages as $comess)
              <option value="<?php echo $comess['course_no']?>">{{ $comess->course_no }}&nbsp;&nbsp;{{ $comess->course_name }}</option>
            @endforeach
            </select>
            
        </div>
        <div class="form-group">
            <label>学期</label>
            <input type="text" name="term" class="form-control" required="required" placeholder="学期" >
        </div>
        <div class="form-group">
            <label>分数</label>
            <input type="text" name="score" class="form-control"  required="required" placeholder="分数">
        </div>
        
        <button type="submit" class="btn btn-lg btn-success col-lg-12">提交</button>
    </form>

</body>
</html>
