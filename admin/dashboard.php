<?php include_once("db.php"); ?>
<?php
        if(!empty($_SESSION['einfo']))
        {
            
        }
        else
        {
            header('location:index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>🅵🅾🅾🅳 🅿🅻🅰🆉🅰</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <!--================ Start Header Menu Area =================--> 
    <?php include_once("header.php"); ?>
    <!--================ End Header Menu Area =================-->

  <div class="site-wrap">
		<div class="w3l_banner_nav_right">
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid">
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<table class="table table-bordered table-hover table-striped" style="background-color: #fff;">
                                <thead>
                                    <tr>
                                        <th width="100px" style="text-align: center;">#</th>
                                        <th width="225px" style="text-align: center;">PHOTO</th>
                                        <th width="300px">RESTAURANT NAME</th>
                                        <th width="300px">EMAIL ID</th>
                                        <th width="200px">CONTACT NO</th>
                                        <th>ADDRESS</th>                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i=0;
                                    $sql=mysqli_query($con,"SELECT * FROM `restaurant` ORDER BY `rid` DESC");
                                    if(mysqli_num_rows($sql)>0) {
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        $i++;
                                ?>
                                    <tr>
                                    	<td style="text-align: center;"><?php echo $i; ?></td>
                                        <td style="text-align: center;"><img src="<?php echo $row['rimg']; ?>" style="height: 120px; width: 124px;"></td>
                                        <td><?php echo strtoupper($row['rname']); ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['ph']; ?></td>
                                        <td><?php echo $row['addr']; ?></td>
                                    </tr>
                                <?php }
                                    } else {
                                ?>
                                    <tr><td colspan="6">No Record Found.</td></tr>
                                <?php } ?>
                                </tbody>
                            </table>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
  </div>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.form.js"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  <script src="vendors/contact.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>

</body>
</html>