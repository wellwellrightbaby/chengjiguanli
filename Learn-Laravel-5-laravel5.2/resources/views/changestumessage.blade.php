<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>修改学生信息</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

    <div id="title" style="text-align: center;">
        <h1>三年一班</h1>
        <div style="padding: 5px; font-size: 16px;">修改学生信息</div>
    </div>
    <hr>
   
    <form action="{{ url('stumessageupdate') }}" method="POST" role="form" style="width:67%; margin:0 auto;">
       
        <?php echo csrf_field(); ?>
        <div class="form-group" >
            <label>学号</label>
            <input type="text" name="stu_no" class="form-control" required="required"  value="<?php echo $change['stu_no']?>" readonly>
        </div>
        <div class="form-group">
            <label>姓名</label>
            <input type="text" name="stu_name" class="form-control" required="required" value="<?php echo $change['stu_name']?>">
        </div>
        <div class="form-group">
            <label>性别</label>
            <input type="text" name="sex" class="form-control" required="required"  value="<?php echo $change['sex']?>">
        </div>
        <div class="form-group">
            <label>生日</label>
            <input type="date" name="birthday" class="form-control"  required="required" value="<?php echo $change['birthday']?>">
        </div>
        <div class="form-group">
            <label>民族</label>
            <input type="text" name="native" class="form-control"  required="required" value="<?php echo $change['native']?>">
        </div>
        <div class="form-group">
            <label>班级</label>
            <input type="text" name="class_no" class="form-control"  required="required" value="<?php echo $change['class_no']?>">
        </div>
        <button type="submit" class="btn btn-lg btn-success col-lg-12">保存</button>
    </form>

</body>
</html>
