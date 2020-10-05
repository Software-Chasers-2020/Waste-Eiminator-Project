<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Waste Eliminator - Home</title>

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
  <style>

    .div3{
        width:1300px;
        height:750px;
        background-color:green;
        rgba(0, 70, 0, 0.075);
    }
    .boxa{
        width: 320px;
        height: 600px;
        float:left;
        margin:auto 50px;  
    }
    .div3a1{
        width:320px;
        height: 240px;
        background-color:rgba(61, 59, 187, 0.055);
        background-image:url("g7.png"); 
        opacity: 50%;
        background-image: cover;
        background-repeat: no-repeat;
        font-size: 35px;
        text-align: center;
        color: black;
        font-weight: bold;
        opacity: 0.8;
    }
    .div3a2{
        width:320px;
        height: 30px;
        background-color: rgba(61, 59, 187, 0.055);
    }
    .div3a3{
        width:320px;
        height: 300px;
        background-color: rgb(61,59,187);
        background-image:url("in5.png"); 
        opacity: 50%;
        background-image: cover;
        background-repeat: no-repeat;
        font-size: 35px;
        text-align: center;
        color: black;
        font-weight: bold;
        opacity: 0.8;
    }
    .div3b1{
        width:320px;
        height: 380px;
        
        font-size: 35px;
        text-align: center;
        color: white;

        font-weight: bold;
       
        background-color:green;

        
        
    }
    .div3b2{
        width:320px;
        
        background-color: rgba(61, 59, 187, 0.055);
    }
    .div3b3{
        width:320px;
        height: 186px;
        background-color: rgb(61,59,187);
        background-image:url("aw1.png"); 
        opacity: 50%;
        background-image: cover;
        background-repeat: no-repeat;
        font-size: 35px;
        text-align: center;
        color: black;
        font-weight: bold;
        opacity: 0.8;
    }
    .div3c3{
        width:320px;
        height: 210px;
        background-color:rgb(61,59,187);
        font-size: 35px;
        text-align: center;
        color: black;
        font-weight: bold;
        opacity: 0.8;
        background-image:url("h1.jpg"),linear-gradient(to right ,rgb(61,59,187),white);
        background-size: cover;
        
    }
    .div3c2{
        width:320px;
        height: 30px;
        background-color: rgba(61, 59, 187, 0.055);
    }
    .div3c1{
        width:320px;
        height: 330px;
        background-image:url("i1.jpg"),linear-gradient(to right ,rgb(61,59,187),white);
        background-size: cover;
        opacity: 0.8;
        font-size: 35px;
        text-align: center;
        color: black;
        font-weight: bold;
    }
    .div3c1:hover{
       
        opacity: 1;
    }
    .div3c3:hover{
       
       opacity: 1;
   }
   .div3a1:hover{
       
       opacity: 1;
   }
   .div3a3:hover{
       
       opacity: 1;
   }
   .div3b3:hover{
       
       opacity: 1;
   }


    .div4{
        width:1300px;
        height:400px;
        background-color: white;
    }

    .par2{
        color: white;
        font-size: 50px;
        text-align: center;
        text-decoration:underline;
    }
    .par222{
        color: green;
        font-size: 50px;
        text-align: center;
        text-decoration:underline;
    }

    .box1{
        width: 250px;
        height: 200px;
        float:left;
        margin:auto 30px;
       
    }   
    .p1{
        font-size: 17px;
        color: black;
        font-family:shm_get_var;
    
    }
    .p2{
        font-size: 20px;
        font-weight: bold;
    }
    .div5{
        width:1300px;
        height:500px;
        background-color: green;
       
    }
    .div5b{
        width:700px;
        height:500px;
        margin:auto 300px;
    }
    .texta{
        color: white;

    }
    .text11{
        font-size: 40px;;
    }
    .text12{
        font-size: 20px;;
    }
    .text13{
        font-size: 20px;;
    }
    .text14{
        font-size: 20px;;
    }
    .div6{
        margin-top: 0 px;
        width:658px;
        height:380px;
        padding-left: 17cm;
        background-image:url("i1.jpeg");
        background-repeat: no-repeat;
    }
    

    #par1{
        color: black;
        font-size: 50px;
        text-align: center;
    }
   
    .box{
        width: 250px;
        height: 280px;
        float:left;
        margin:35px 60px;
        border: 1px solid grey;      
        padding-left: 10px;
        background-color:rgba(0, 70, 0, 0.075);
    }

    .b1{
        font-size: 40px;
        color: green;
        font-weight: bold;
        text-align: center;
    }
    .b2{
        font-size: 15px;
        color:#005500;
        font-weight:bold;
    }
    .b3{
        font-size: 22px;
    }
    
    .div7{
        width:1300px;
        height:460px;
        background-color: green;
       
    }
    
    .div7a{
        padding-left:100px;
        width:1200px;
        height:460px;
    }
   
    .ul{
        text-decoration:underline;
    }
    .div66{

    width:1300px;
    height:550px;
    background-color:white; 
    }
    #first{
  width: 100px;
  height: 100px;
  position: relative;
  animation: mymove 5s ;
  animation-iteration-count: 1;
}
#three{
  width: 100px;
  height: 100px;
  position: relative;
  animation: mymoveright 5s ;
  animation-iteration-count: 1;
}
  @keyframes mymove {
  from {left: 0px;}
  to {left: 100px;}
}

@keyframes mymoveright {
  from{right:0px;}
  to{right: 100px;}
}
mark{
    background-color:white;
    color:green;
}

.div77{
        margin-top: 0 px;
        width:658px;
        height:120px;
        padding-left: 17cm;
        background-image:url("i1.jpeg");
        background-repeat: no-repeat;
    }
    .box01{
        width: 250px;
        height: 80px;
        float:left;
        margin:35px 60px;
        border: 1px solid grey;      
        padding-left: 10px;
        background-color:green;
    }
    .b01{
        font-size: 35px;
        color: white;
        
        text-align: center;
    }
</style>

</head>
<body>

  <!--================ Header Menu Area start =================-->
 <?php include_once('includes/header.php');?>
  <!--================Header Menu Area =================-->


  <!--================ Banner Section start =================-->
  <section style="background-color:green;
                  height:400px">
    <div class="container"><br><br><br><br><br>
      <br>
      <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:white">Best way to-><mark>ELIMINATE WASTE</mark></span><a name="top"></a>
      <br><br>
      <h2 class="texta text11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="first">स्वच्छ भारत</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="two"> Clean India</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span id="three">निर्मळ भारत</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
      <a name="ss" ></a>
      <br>
      <br><br><br><br><br><br>
    </div>
  </section>
  <!--================ Banner Section end =================-->


  <!--================ Domain Search section start =================-->
  <section class="bg-gray domain-search">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5 col-lg-2 text-center text-md-left mb-3 mb-md-0">
        <h3>Search Your dustbin!</h3>
        </div>
        <div class="col-md-7 col-lg-10 pl-2 pl-xl-5">
          <form class="form-inline flex-nowrap form-domainSearch" method="post">
            <div class="form-group">
              <label for="staticDomainSearch" class="sr-only">Search</label>
              <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Dustbin ID"> 
            </div>
            
            <button id ="btn" type="submit"  name="search" id="submit" style="background-color:white; color:#004600; text-decoration:none;">Search</button>
          </form>
           <?php
if(isset($_POST['search']))
{ 
$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <?php
$sql="SELECT * from tblpass where DustbinID like '%$sdata%'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
      <tr align="center">
<td colspan="6" style="font-size:20px;color:blue">
 Dustbin ID: <?php  echo ($row->DustbinID);?></td></tr>

  <tr>
    <th scope>Dustbin location</th>
    <td><?php  echo ($row->Location);?></td>
    <th scope>Dustbin number</th>
    <td><?php  echo ($row->ContactNumber);?></td>
    <th scope>Email of the person who located dustbin</th>
    <td><?php  echo ($row->Email);?></td>
  </tr>
<tr>
    <th scope>Identity Type</th>
    <td><?php  echo ($row->IdentityType);?></td>
    <th scope>Identity Number</th>
    <td><?php  echo ($row->IdentityNo);?></td>
    <th scope>Category</th>
    <td><?php  echo ($row->Category);?></td>
  </tr>
<tr>
    <th scope>Allocated Date</th>
    <td><?php  echo ($row->FromDate);?></td>
    <th scope>Allocated till the  Date</th>
    <td><?php  echo ($row->ToDate);?></td>
    <th scope>Last Cleaning Date</th>
    <td><?php  echo ($row->CleaningDate);?></td>
  </tr>
                                    
    <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?> 
     </table>

        </div>
      </div>
      <br><br>
      <div class="div3">
            <p class="par2"><a name="Events"><b><strong>Events</strong></b></a></p>
            <div class="boxa div3a">

                <a href="ir2.pdf" target="_blank"><div class="div3a1 ul"><p><br><br><abbr title="click here">Clean and<br>Green</abbr></p> </div></a>
                <div class="div3a2"></div>
                <a href="13.pdf" target="_blank"><div class="div3a3 ul"><p><br><br><br><br><abbr title="click here">HEALTHY INDIA</abbr></p></div></a>

            </div>
            <div class="boxa div3b">
            
                <div class="div3b1"><p><i>These are some of the events which are organized by Waste Eliminator Team to spread awareness among the people</i></p></div>
                <div class="div3b2"></div>
                <a href="ir4.pdf" target="_blank"><div class="div3b3 ul"><p><br><br><abbr title="click here">AWAKEN INDIA</abbr></p></div></a>

            </div>
            <div class="boxa div3c">

                <a href="ir1.pdf" target="_blank"><div class="div3c1 ul"><p><br><br><br><br><abbr title="click here">I CAN</abbr></p></div></a>
                <div class="div3c2"></div>
                <a href="ir5.pdf" target="_blank"><div class="div3c3 ul"><p><br><abbr title="click here">Your helping<br>hands</abbr></p></div></a>
            </div>
        </div>

        <div class="div4" target="_blank">
            <br>
            <p class="par222" ><a name="BLOGS"><b>Blogs</b></a></p>
            <div class="box1 div111"><p class="p1">Recycle Right Recycle Often Recycling101 SustainabilityBilly & Teddy’s Excellent Recycling Adventures with..<p class="p2">-Billy & Teddy</p><a href="https://mediaroom.wm.com/billy-teddys-excellent-recycling-adventures/" target="_blank">read more</a></div>


            <div class="box1 div112"><p class="p1">The lucky residents have some creative Waste Management employees to thank for the new digs...</p><p class="p2">-Wildlife Habitat Council (WHC)</p><a href="https://mediaroom.wm.com/a-bugs-life-made-easier/" target="_blank">read more</a></div>
            <div class="box1 div113"><p class="p1">Talent comes to Waste Management from all areas and walks of life. It isn’t too often..</p><p class="p2">-Bret Prinz</p><a href="https://mediaroom.wm.com/bret-prinz-from-world-series-to-waste-management/" target="_blank">read more</a></div>
            <div class="box1 div114"><p class="p1">As the impacts of China’s new import policies to reduce trash in the recyclables begin to impact our collection programs..</p><p class="p2">-Susan Robinson</p><a href="https://mediaroom.wm.com/the-dangers-of-wishcycling/" target="_blank">read more</a></div>
        </div>
        

        <div class="div5">
            <div class="div5a"></div>
            <div class="div5b">
                <br>
                <p class="texta text11"><a  name="Tracking"><b>Tracking</b></a></p>
                <p class="texta text12">TRACKING GARBAGE COLLECTION VEHICLE</p>
                <p class="texta text13">To streamline the collection and disposal of garbage, the Corporation implement and practices a vehicle tracking system within the city limits.
                The civic body now has mechanism to track such vehicles,which overcomes the problem of volunteers that drivers of such vehicles used to stay away from duty and also help comman people to save their time.
                <br>These system will help you to keep the track of the vehicel just click the below button to track your near by vehicles.</p>
                <a href="#Track
                ">
                <button id ="btn" style="background-color:white; color:#004600; text-decoration:none;"><a href="ee.html" style="text-decoration:none;">Track</a></button>
    
            </div>
        </div>
        <div class="div5">
        &nbsp;&nbsp;&nbsp;<img src="tr33.png" height="500px" wight="410px"><img src="tr44.png" height="500px" wight="410px"><img src="tr21.png" height="500px" wight="410px">
        </div>
        <br>
        <div class="box div101"><p class="b1">Reduce</p><p class="b2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reducing construction waste doesn't just benefit the environment – it also benefits you as a company, as well as your client. Read on to find out why you should reduce your waste, and how to go about it..<a href="https://www.wasteplansolutions.co.uk/news/importance-reducing-waste" target="_blank"><span style="color:green; text-decoration:underline">read more</span></a></p></div>
        <div class="box div102"><p class="b1">Reuse </p><p class="b2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is important to recognize that the sustained growth in reuse efforts, as well as the sustained interest of the reuse industry, derives in large measure from the solid waste reduction hierarchy..<a href="http://loadingdock.org/redo/Benefits_of_Reuse/body_benefits_of_reuse.html#:~:text=Reuse%20provides%20an%20excellent%2C%20environmentally,petroleum%2C%20fibers%20and%20other%20materials." target="_blank"><span style="color:green; text-decoration:underline">read more</span></a></p></div>
        <div class="box div103"><p class="b1">Recycle </p><p class="b2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you’re not already recycling, find out more about how easy it is and how you can really make a difference. For those who already recycle, discover the positive effect your recycling efforts ..<a href="https://www.veolia.co.uk/nottinghamshire/recycling/recycle-nottinghamshire/why-recycling-important" target="_blank"><span style="color:green; text-decoration:underline">read more</span></a></p></div>
        <div class="div6">
        </div>
        <div class="div7">
            <div class="div7a">
                <br>
                <p class="texta text11"><a  name="vol" href="#" name="Volunteer"></a><b><span fontcolor:white style="text-align:center">Waste Eliminator's Volunteer<span></b></a></p>
                <div><p class="texta text12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Volunteerism is the voice of the people put into action.</strong><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volunteers do not necessarily have the time, they just have the heart.Waste Eliminator has been working towards tackling the immense waste problem across the country. An inevitable contribution to this comes from the persistent efforts of the Waste Eliminators volunteers. These self-motivated individuals understand the need to get involved with this cause. We offer a diverse range of volunteering opportunities. Let's get our hands dirty and work towards the betterment of our environment. In this scetion interested people can apply as volunteers and can contribute thier work to handle the situation of waste management to make our India more cleaner. In this scetion interested people can apply as volunteers and can contribute thier work to handle the situation of waste management to make our India more cleaner.</p></div>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id ="btn" style="background-color:white; color:#004600; text-decoration:none;"><a href="e.html" style="text-decoration:none;" target="_blank">Click here to join us</a>
    
            </div>
            
        </div>
        <p class="par222" ><a name="UEVENT"><b>Upcoming Events</b></a></p>
        <div class="div66">
            <div class="div6a"><iframe src="help11.html" width="1295" height=600></iframe></div>
        </div>
        <br>
        <br>
        <br>
        <div class="box01 div101"><p class="b01" style="color:white"><a href="html/hindi file.html" target="_blank">स्वच्छ भारत</a></p></div>
        <div class="box01 div102"><p class="b01" style="color:white"><a href="html/Englishfile.html" target="_blank">Clean India </a></p></div>
        <div class="box01 div103"><p class="b01" style="color:white"><a href="html/marathifile.html" target="_blank">निर्मळ भारत </a></p></div>
        <div class="div77">
    </div>
  </section>
  <!--================ Domain Search section end =================-->





  <!-- ================ start footer Area ================= -->
   <?php include_once('includes/footer.php');?>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>