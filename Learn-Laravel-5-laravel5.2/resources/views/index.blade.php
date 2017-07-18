<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>成绩管理系统</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

    <div id="title" style="text-align: center;">
        <h1>三年一班</h1>
        <div style="padding: 5px; font-size: 16px;">班级事务</div>
    </div>
    <hr>
    <div style="padding: 5px; font-size: 16px; height:100px;"><a href="{{ url('stumessage') }}" class="btn btn-lg btn-success col-xs-12">学生信息表</a></div>


    <div style="padding: 5px; font-size: 16px; height:100px;"><a href="{{ url('coursemessage') }}" class="btn btn-lg btn-success col-xs-12">课程信息表</a></div>


    <div style="padding: 5px; font-size: 16px; height:100px;"><a href="{{ url('scoretable') }}" class="btn btn-lg btn-success col-xs-12">成绩单</a></div>


</body>
</html>