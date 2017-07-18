<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>修改成绩</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

    <div id="title" style="text-align: center;">
        <h1>三年一班</h1>
        <div style="padding: 5px; font-size: 16px;">修改成绩</div>
    </div>
    <hr>
   
    <form action="{{ url('scoretableupdate') }}" method="POST" role="form" style="width:67%; margin:0 auto;">
       
        <?php echo csrf_field(); ?>
        <div class="form-group" >
            <label>学号</label>
            <input type="text" name="stuno" class="form-control" required="required"  value="<?php echo $change['stu_noo']?>" readonly>
        </div>
        <div class="form-group">
            <label>课程号</label>
            <input type="text" name="courseno" class="form-control" required="required" value="<?php echo $change['course_noo']?>" readonly>
        </div>
        <div class="form-group">
            <label>学期</label>
            <input type="text" name="term" class="form-control" required="required"  value="<?php echo $change['term']?>">
        </div>
        <div class="form-group">
            <label>分数</label>
            <input type="text" name="score" class="form-control"  required="required" value="<?php echo $change['score']?>">
        </div>
        
        <button type="submit" class="btn btn-lg btn-success col-lg-12">保存</button>
    </form>

</body>
</html>
