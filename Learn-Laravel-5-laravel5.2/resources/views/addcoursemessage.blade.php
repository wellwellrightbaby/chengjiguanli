<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>添加课程信息</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

    <div id="title" style="text-align: center;">
        <h1>三年一班</h1>
        <div style="padding: 5px; font-size: 16px;">添加课程信息&nbsp;&nbsp;<a href="coursemessage">返回</a></div>
    </div>
    <hr>
 
   
    <form action="{{ url('addcoursemessagestore') }}" method="POST" role="form" style="width:67%; margin:0 auto;">
       
        <?php echo csrf_field(); ?>
        <div class="form-group" >
            <label>课程号</label>
            <input type="text" name="course_no" class="form-control" required="required" placeholder="课程号">
        </div>
        <div class="form-group">
            <label>课程名</label>
            <input type="text" name="course_name" class="form-control" required="required" placeholder="课程名" >
        </div>
        <div class="form-group">
            <label>学分</label>
            <input type="text" name="credit_hour" class="form-control" required="required" placeholder="学分" >
        </div>
        <div class="form-group">
            <label>学时</label>
            <input type="text" name="course_hour" class="form-control"  required="required" placeholder="学时">
        </div>
        
        <button type="submit" class="btn btn-lg btn-success col-lg-12">提交</button>
    </form>

</body>
</html>
