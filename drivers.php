<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drivers | TourAfrica</title>

    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">

    <link rel="stylesheet" type="text/css" href="assets/mystyle.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php
            //start db connection
            $conn = mysqli_connect('localhost','root','','tours','3307');

            ?>
               <?php if ($query = mysqli_query($conn, "SELECT * FROM drivers ORDER by id")){ ?>
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                            <tr>
                                <th><span>Driver</span></th>
                                <th><span>Created</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th><span>Email</span></th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($row = mysqli_fetch_array($query)){?>
                            <tr>
                            <td>
                                <?php if(is_null($row['driverimage'])){?>
                                    <img src="assets/img/avatar.png" alt="">
                                <?php }else{?>
                                <img src="assets/img/<?php echo ($row['driverimage'])?> " alt="">
                                <?php }?>
                                <a href="driverdetails.php?usercode=<?php echo $row['usercode'] ?>&id=<?php echo $row['id'] ?>&fname=<?php echo $row['fname'] ?>&sname=<?php echo $row['sname'] ?>&phone=<?php echo $row['phoneNumber'] ?>
                                    &status=<?php echo $row['driverstatus'] ?>&image=<?php echo $row['driverimage'] ?>&license=<?php echo $row['driverlicense'] ?>"
                                   class="user-link"><?php echo ucfirst($row['fname'])?> <?php echo ucfirst($row['sname'])?> </a>
                                    <span class="user-subhead"><?php echo $row['usercode'] ?></span>
                            </td>
                            <td>
                                <?php echo $row['created_at'] ?>
                            </td>
                                <td class="text-center">
                                    <span class="label label-default"><?php echo $row['driverstatus'] ?></span>
                                </td>
                                <td>
                                    <a href="#"><?php echo $row['phoneNumber'] ?></a>
                                </td>
                                <td style="width: 20%;">
                                    <a href="driverdetails.php" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									</span>
                                    </a>
                                    <a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
                                    </a>
                                    <a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
                                    </a>
                                </td>
                            </tr>
                            <?php }
                            ?>

                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination pull-right">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>

               <?php } else { ?>
                echo "<b>MySQL error:</b><br>' . mysqli_connect_error() . '<br />";
               <?php } ?>
            </div>
        </div>
    </div>
</div>

<!--call footer-->
<?php include 'footer.php'; ?>

</body>
</html>
