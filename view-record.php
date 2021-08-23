<?php
include("../db.php");
include("../functions.php");
if(!isset($_SESSION['adminid']) || empty($_SESSION['adminid']))
{
    header("location:/");
    exit;
}
$id=$_GET['record_id']
?>
    
    
    
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Certificate Records</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

<style>
    #record_wrapper , .form, .table {
    max-width: 700px;
            margin: 0 auto;
                margin-bottom: 25px;
    }
    
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar pb-4 static-top shadow pt-4">

                    <!-- Sidebar Toggle (Topbar) -->
<h2>  <a href="./add-new-certificate.php" class="rounded-circle mr-3">
                       ISO Certificate
                    </a></h2>
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       <li class="main-menu">

                                        <a href="./add-new-certificate.php">
                                    Add New Certificate
                                </a>                  

					     <a href="./standard-remarks.php">
                                    Standard Remarks
                                </a>									 
                        <a href="./certificate-list.php">
                                    List
                                </a>     <a href="./change-password.php">
                                Change Password
                                </a>   
                                <a  href="./logout.php" >
                                    
                                    Logout
                                </a>
                            
                 </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow" style="display:block !important">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                        
                    </ul>

                </nav>
                <!-- End of Topbar -->
<br />
<br />
                <!-- Begin Page Content -->
                                <div class="container-fluid">
                                <div class="page-title"><h2>Certificate Records</h2></div>
             
             <table class="table">

<tbody>
   
  <?php $q="SELECT * FROM certificate_records where id='$id'"; 
    $result=mysqli_query($db,$q);
    
while($row=mysqli_fetch_array($result)){?>
 <tr><th>Serial No.</th> <td><?php echo $row[serial_no]?></td></tr>
<tr><th>Standard</th><td><?php echo $row[standard]; ?></td></tr>
<tr><th>Certificate No</th><td><?php echo $row[certificate_no]; ?></td></tr>
 <tr><th>Certificate Date</th> <td><?php echo $row[certificate_date]; ?></td></tr>
<tr><th>Certificate Durations</th><td><?php echo $row[payment_for]; ?></td></tr>
<tr><th>1st Surveillance Date</th><td><?php echo $row[first_due]; ?></td></tr>
<tr><th>2nd Surveillance Date</th><td><?php echo $row[second_due]; ?></td></tr>
<tr><th>Re Certificate</th><td><?php echo $row[re_certificate]?></td></tr>
<tr><th>Firm Name / Address / Scope</th><td><?php echo $row[firm_name_address]; ?></td></tr>
<tr><th>Associate Details/Price/Other Remark</th> <td><?php echo $row[remarks]?></td></tr>
<tr><th>Client Deatils/Price/other Remark</th> <td><?php echo $row[client_detail]?></td></tr>

  <?php  }
    
    ?>


 </tbody> 
</table>


             
                                
</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ISO Certificate 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>





</body>

</html>