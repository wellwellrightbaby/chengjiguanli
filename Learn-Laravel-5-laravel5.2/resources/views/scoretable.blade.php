<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>成绩单</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="title" style="text-align: center;">
        <h1>三年一班</h1>
        <div style="padding: 5px; font-size: 16px;">单科成绩单&nbsp;&nbsp;<a href="">查看总成绩单</a></div>
        <a href="{{ url('addscoretable') }}" class="btn btn-lg btn-success col-xs-12">添加单科成绩</a>

    </div>
    <hr>

    <div id="content">
        <table class="table table-striped table-hover">
            <th class="col-md-1">学号</th>
            <th class="col-md-2">姓名</th>
            <th class="col-md-1">课程号</th>
            <th class="col-md-2">课程名</th>
            <th class="col-md-2">学期</th>
            <th class="col-md-2">分数</th>
            <th class="col-md-2">操作</th>
            @foreach ($scoretables as $scoremess)
            <tr>
                <div class="body">
                    <td class="col-md-1"><a href="">{{ $scoremess->stu_noo }}</a></td>
                    <td class="col-md-2">{{ $scoremess->stu_name }}</td>
                    <td class="col-md-1">{{ $scoremess->course_noo }}</td>
                    <td class="col-md-2">{{ $scoremess->course_name }}</td>
                    <td class="col-md-2">{{ $scoremess->term }}</td>
                    <td class="col-md-2">{{ $scoremess->score }}</td>

                    <td class="col-md-2"><a href="scoretablechange?stuno={{$scoremess->stu_noo}}&courseno={{$scoremess->course_noo}}">修改</a>|<a href="scoretabledel?stuno={{$scoremess->stu_noo}}&courseno={{$scoremess->course_noo}}">删除</a></td>
                </div>
            </tr>
            @endforeach
            </table>

    </div>
    <small style="float:right; margin-right:30px;"><a href="/">回到首页</a></small>

</body>
</html>