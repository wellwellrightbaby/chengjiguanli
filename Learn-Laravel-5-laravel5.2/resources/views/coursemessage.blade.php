<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>课程信息表</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    @if(Session::has('message'))
    <div class="alert alert-info"> {{Session::get('message')}} 
    </div> 
    @endif
    <div id="title" style="text-align: center;">
        <h1>三年一班</h1>
        <div style="padding: 5px; font-size: 16px;">课程信息表</div>
        <a href="{{ url('addcoursemessage') }}" class="btn btn-lg btn-success col-xs-12">添加课程</a>

    </div>
    <hr>

    <div id="content">
        <table class="table table-striped table-hover">
            <th class="col-md-2">课程号</th>
            <th class="col-md-4">课程名</th>
            <th class="col-md-2">学分</th>
            <th class="col-md-2">学时</th>
            <th class="col-md-2">操作</th>
            @foreach ($coursemessages as $coursemess)
            <tr>
                <div class="body">
                    <td class="col-md-2"><a href="">{{ $coursemess->course_no }}</a></td>
                    <td class="col-md-4">{{ $coursemess->course_name }}</td>
                    <td class="col-md-2">{{ $coursemess->credit_hour }}</td>
                    <td class="col-md-2">{{ $coursemess->course_hour }}</td>
                    <td class="col-md-2"><a href="coursemessagechange?courseno={{$coursemess->course_no}}">修改</a>|<a href="coursemessagedel?courseno={{$coursemess->course_no}}">删除</a></td>
                </div>
            </tr>
            @endforeach
            </table>

    </div>
    <small style="float:right; margin-right:30px;"><a href="/">回到首页</a></small>

</body>
</html>