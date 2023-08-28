<?php
require_once'../../inc/conn.php';
include "../view/header.php";

include "../view/sidebar.php";
include "../view/navbar.php";

?>
 
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">

              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Add Product</h3>
                <form method="POST" action="../handle/handleAddproduct.php" enctype="multipart/form-data">
                <?php

                          $query="select * from category" ;
                          $res=mysqli_query($conn,$query);

                          $cats= mysqli_fetch_all($res,MYSQLI_ASSOC);
                          ?>
                          <div class="form-group">
                          <label>Category</label>
                          <select style="color: #fbfbfb;" type="text" name="cat" class="form-control p_input">
                            <?php foreach($cats as $cat): ?>
                            <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>

                            <?php  endforeach; ?>
                          </select>
                          </div>
                
                <div class="form-group">
                    <label>Title</label>
                    <input style="color: #fbfbfb;" type="text" name="title" class="form-control p_input">
                  </div>
               
                  <div class="form-group">
                    <label>Description</label>
                    <input style="color: #fbfbfb;" type="text" name="desc" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input  style="color: #fbfbfb;" type="number" name="price" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Quantity</label>
                    <input style="color: #fbfbfb;" type="number" name="quantity" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input style="color: #fbfbfb;" type="file" name="img" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button style="color: #fbfbfb;" type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Add</button>
                  </div>
                
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

<?php 
include "../view/footer.php";
 ?>