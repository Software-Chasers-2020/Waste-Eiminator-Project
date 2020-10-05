<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


 $fname=$_POST['fullname'];
$cnum=$_POST['cnumber'];
$email=$_POST['email'];
$itype=$_POST['identitytype'];
$icnum=$_POST['icnum'];
$cat=$_POST['category'];
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

$eid=$_GET['editid'];
$sql="update tblpass set Location=:fname,ContactNumber=:cnum,Email=:email,IdentityType=:itype,IdentityNo=:icnum,Category=:cat,FromDate=:fdate,ToDate=:tdate where ID=:eid";
$query=$dbh->prepare($sql);

$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':cnum',$cnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':itype',$itype,PDO::PARAM_STR);
$query->bindParam(':icnum',$icnum,PDO::PARAM_STR);
$query->bindParam(':cat',$cat,PDO::PARAM_STR);
$query->bindParam(':fdate',$fdate,PDO::PARAM_STR);
$query->bindParam(':tdate',$tdate,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();

  
         echo '<script>alert("Detail has been updated")</script>';
 

  

}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Waste Eliminator | Edit Details</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php include_once('includes/header.php');?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include_once('includes/sidebar.php');?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Details</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" enctype="multipart/form-data"> 
                                    <?php
$eid=$_GET['editid'];
$sql="SELECT * from  tblpass where ID=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?> 
  <p colspan="6" style="font-size:20px;color:blue;text-align: center;">
 Dustbin ID: <?php  echo ($row->PassNumber);?></p>
    <div class="form-group"> <label for="exampleInputEmail1">Dustbin location</label> <input type="text" name="fullname" value="<?php  echo $row->FullName;?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Dustbin Number</label> <input type="text" name="cnumber" value="<?php  echo $row->ContactNumber;?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Email Address of the person who locate dustbin</label> <input type="email" name="email" value="<?php  echo $row->Email;?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Identity Type</label><select type="text" name="identitytype" value="" class="form-control" required='true'>
<option value="<?php  echo $row->IdentityType;?>"><?php  echo $row->IdentityType;?></option>
<option value="Voter Card">Organic Waste</option>
<option value="PAN Card">Recyclable Waste</option>
<option value="Adhar Card">Hazardous Waste</option>
<option value="Student Card">Electronic Waste</option>
<option value="Driving License">Paper Waste</option>
<option value="Passport">Medical Waste</option>
<option value="Any Official Card">General Household Waste</option>
<option value="Any Other Govt Issued Doc">Any Other Waste</option>
     </select></div>
    <div class="form-group"> <label for="exampleInputEmail1">Identity No.</label> <input type="text" name="icnum" value="<?php  echo $row->IdentityCardno;?>" class="form-control" required='true'> </div>
     <div class="form-group"> <label for="exampleInputEmail1">Category</label><select type="text" name="category" value="" class="form-control" required='true'>
      <option value="<?php  echo $row->Category;?>"><?php  echo $row->Category;?></option>
<?php 

$sql2 = "SELECT * from   tblcategory";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row2)
{          
    ?>  
<option value="<?php echo htmlentities($row2->CategoryName);?>"><?php echo htmlentities($row2->CategoryName);?></option>
 <?php } ?>
     </select></div>
<div class="form-group"> <label for="exampleInputEmail1">Allocated Date</label> <input type="date" name="fromdate" value="<?php  echo $row->FromDate;?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">Allocated till the </label> <input type="date" name="todate" value="<?php  echo $row->ToDate;?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">Last Cleaning Date</label> <input type="text" value="<?php  echo $row->PasscreationDate;?>" class="form-control" readonly='true'> </div>
<?php $cnt=$cnt+1;}} ?> 
     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Update</button></p> </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
<?php }  ?>