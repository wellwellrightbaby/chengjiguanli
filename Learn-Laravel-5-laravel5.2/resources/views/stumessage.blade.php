<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>学生信息表</title>

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
        <div style="padding: 5px; font-size: 16px;">学生信息表</div>
        <a href="{{ url('addstumessage') }}" class="btn btn-lg btn-success col-xs-12">添加学生</a>

    </div>
    <hr>


    <div id="content">
        <table class="table table-striped table-hover">
            <th class="col-md-2">学号</th>
            <th class="col-md-2">姓名</th>
            <th class="col-md-2">性别</th>
            <th class="col-md-2">生日</th>
            <th class="col-md-1">民族</th>
            <th class="col-md-2">班级</th>
            <th class="col-md-1">操作</th>
            @foreach ($stumessages as $stumess)
            <tr>
                <div class="body">
                    <td class="col-md-2"><a href="">{{ $stumess->stu_no }}</a></td>
                    <td class="col-md-2">{{ $stumess->stu_name }}</td>
                    <td class="col-md-2">{{ $stumess->sex }}</td>
                    <td class="col-md-2">{{ $stumess->birthday }}</td>
                    <td class="col-md-1">{{ $stumess->native }}</td>
                    <td class="col-md-2">{{ $stumess->class_no }}</td>
                    <td class="col-md-1"><a href="stumessagechange?stuno={{$stumess->stu_no}}">修改</a>|<a href="stumessagedel?stuno={{$stumess->stu_no}}">删除</a></td>
                </div>
            </tr>
            @endforeach
            </table>
    </div>
    <small style="float:right; margin-right:30px;"><a href="/">回到首页</a></small>

</body>
</html>