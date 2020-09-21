<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="jumbotron">
            <form action="add_data.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-4">
                        <h2 align="center"><code>Select image</code></h2>
                        <img src="img/profile.png" id="profile-img-tag" width="300px" height="300px">
                        <input class="btn-primary" type="file" name="filUpload" id="profile-img">
                    </div>
                    <div class="col-sm-8">
                        <h2 align="center"><kbd>สมัครสมาชิก</kbd></h2>
                        <p>
                        <h2></h2>
                        </p>
                        <div class="form-group">
                            <input type="รหัสสมาชิก" class="form-control" name="mem_id" id="mem_id"
                                placeholder="รหัสสมาชิก (ตามบัตรประชาชน)">
                        </div>
                        <div class="form-group">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-success">เพศ : </label>
                                <label class="btn btn-success active">
                                    <input type="radio" name="mem_sex" id="mem_sex1" autocomplete="off" value="M"
                                        checked> ชาย
                                </label>
                                <label class="btn btn-success">
                                    <input type="radio" name="mem_sex" id="mem_sex2" autocomplete="off" value="F"> หญิง
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="fname" class="form-control" name="mem_name" id="mem_name"
                                placeholder="ชื่อ - สกุล (ไม่มีคำนำหน้า)">
                        </div>
                        <div class="form-group">
                            <input type="fname" class="form-control" name="mem_address" id="mem_address"
                                placeholder="ที่อยู่ปัจจุบัน">
                        </div>
                        <div class="form-group">
                            <input type="fname" class="form-control" name="mem_email" id="mem_email"
                                placeholder="อีเมล์">
                        </div>
                        <div class="form-group">
                            <input type="fname" class="form-control" name="mem_tel" id="mem_tel"
                                placeholder="เบอร์ติดต่อ (10 หลัก ไม่เว้นช่อง 0800000000)">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="save">บันทึก</button>
                        <button type="reset" class="btn btn-primary">ยกเลิก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#profile-img-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#profile-img").change(function() {
    readURL(this);
});
</script>