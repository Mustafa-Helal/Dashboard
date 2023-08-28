<?php

require_once'../../inc/conn.php'; 
include "../view/header.php";
include "../view/sidebar.php";
// include "../view/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
  
      <!-- partial -->
      <div style="width: 100%;" class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
     
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
            
            </div>
            <div class="row">
      
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Orders table</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>  </th>
                            <th> </th>
                            <th> Name </th>
                            <th>  </th>
                            <th>  </th>
                            <th> Price</th>
                            <th>  </th>
                            <th>  </th>
                            <th> Quantity </th>
                            <th>  </th>
                            <th>  </th>
                            <th> Order Date </th>
                            <th>  </th>
                            <th>  </th>
                            <th> Invoice Number </th>
                            
                          </tr>
                        </thead>
                        <tbody>

                        <?php

                            $query="select orders.id,user.name,orders.price,orders.quantity,orders.orderDateTime,orders.invoiceID from orders join user on orders.userID=user.id";
                            $runQuery=mysqli_query($conn,$query);
                            $orders=mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
                            foreach($orders as $order):
                            //   $user= $order['userID'];
                            //   $query="select name from user where id=$user ";
                            //   $res=mysqli_query($conn,$query);
                            // $user=mysqli_fetch_all($res,MYSQLI_ASSOC);


                        ?>


                          <tr>
                            <td> <?php echo $order['id'] ?> </td>
                            <th>  </th>
                            <th>  </th>
                            <td> <?php echo $order['name'] ?></td>
                            <th>  </th>
                            <th>  </th>
                            <td> <?php echo $order['price'] ?> </td>
                            <th>  </th>
                            <th>  </th>
                            <td> <?php echo $order['quantity'] ?> </td>
                            <th>  </th>
                            <th>  </th>
                            <td> <?php echo $order['orderDateTime'] ?> </td>
                            <th>  </th>
                            <th>  </th>


                            <td> <?php echo $order['invoiceID'] ?> </td>
                            
                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>