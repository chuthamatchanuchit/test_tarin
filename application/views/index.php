<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .re {
            margin-top: 5%
        }
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Train</title>
</head>

<body>
    <div class="container">
        <div class="re">
            <form action="<?php echo site_url('welcome/insert'); ?>" method="POST">
                <div class="form-group">

                    <label>ขบวน</label>
                    <input type="text" class="form-control" name="tarin_id">
                </div> <br>
                <div class="form-group">
                    <label>สถานี</label>
                    <input type="text" class="form-control" name="station">
                </div> <br>

                <div class="form-group">
                    <label>เวลาออก</label>
                    <input type="text" class="form-control" name="outtime">
                </div> <br>

                <div class="form-group">
                    <label>ถึง</label>
                    <input type="text" class="form-control" name="To">
                </div> <br>
                <div class="form-group">
                    <label>ออก</label>
                    <input type="text" class="form-control" name="out">
                </div> <br>

                
                <div class="form-group">
                    <label>สถานี</label>
                    <input type="text" class="form-control" name="tarinstation">
                </div> <br>
                <div class="form-group">
                    <label>ถึงเวลา</label>
                    <input type="text" class="form-control" name="ittime">
                </div> <br>
                <div class="form-group">
                    <label>หมายเหตุ</label>
                    <input type="text" class="form-control" name="note">
                </div> <br>
                <div align="right">
                    <button type="submit" class="btn btn-primary">ตกลง</button> </div>
            </form>

        </div>
    </div>

</body>

</html>