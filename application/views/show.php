<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Train</title>
</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ขบวน</th>
                    <th scope="col">สถานี</th>
                    <th scope="col">เวลาออก</th>
                    <th scope="col">ถึง</th>
                    <th scope="col">ออก</th>
                    <th scope="col">สถานี</th>
                    <th scope="col">ถึงเวลา</th>
                    <th scope="col">หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result->result_array() as $yy) { ?>



                    <tr>
                        <td><?php echo $yy['tarin_id'] ?> </td>
                        <td><?php echo $yy['station'] ?> </td>
                        <td><?php echo $yy['outtime'] ?> </td>
                        <td><?php echo $yy['To'] ?> </td>
                        <td><?php echo $yy['out'] ?> </td>
                        <td><?php echo $yy['tarinstation'] ?> </td>
                        <td><?php echo $yy['ittime'] ?> </td>
                        <td><?php echo $yy['note'] ?> </td>

                    </tr> <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>