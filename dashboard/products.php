
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BitterBetter.</title>
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <!-- css font-->
    <style>
      html,
      body {
        font-family: 'Poppins', sans-serif;
      }
    </style>
  </head>
  <body>
    <!-- nav section start -->
    <nav class="navbar navbar-expand-lg navbar-light text-dark fixed-top" style="background-color: #ffd460">
      <div class="container-fluid">
        <a class="navbar-brand fs-1 ms-5 fw-bold" href="#" style="color: #6a2c70">bitter<span style="color: #b83b5e">better</span></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ms-5 mb-2 mb-lg-0 fs-4">
            <li class="nav-item ms-3">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link active" aria-current="page" href="products.php">Products</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link active" aria-current="page" href="index.html#gallery">Gallery</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link active" aria-current="page" href="index.html#AboutUs">About Us</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link active" aria-current="page" href="contactUs.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav section end -->

    <!-- main section start -->
    <main class="container-fluid p-5 m-0 " style="min-height: 100vh; background-color: #2d4059">
      <div class="row  border-bottom">
        <div class="col d-flex mt-5 mb-5 justify-content-center">
          <form class="border border-4 border-light rounded-4 border-opacity-25 text-light w-25 p-4" method="post" action="create_product.php">
            <h1 class="mb-4 text-center">Add Product</h1>
            <div class="mb-2">
              <label for="exampleInputName1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" />
            </div>
            <div class="mb-2">
              <label for="exampleInputName1" class="form-label">Price</label>
              <input type="text" name="price" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" />
            </div>
            <div class="mb-2">
              <label for="exampleInputName1" class="form-label">Img</label>
              <input type="text" name="img" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" />
            </div>
            <button type="submit" class="btn btn-light w-100 mb-5 mt-5">Create</button>
          </form>
        </div>
      </div>
      
      
      <div class="card mt-3">
        <div class="card-header text-light bg-dark">
          Products
        </div>
        <div class="card-body">
          <table>
            <thead>
              <tr>
                <th class=w-25>Id</th>
                <th class=w-25>Name</th>
                <th class=w-25>Price</th>
                <th class=w-25></th>
              </tr>
            </thead>
            <tbody>
              
              <?php
              require "../koneksi.php";

              $products = mysqli_query($koneksi,"SELECT * FROM products");
              foreach($products as $product){
                $id = $product['id'];
                $name = $product['name'];
                $price = $product['price'];
                $img = $product['img'];

                ?>
                <tr class="border-bottom ">
                  <td class=w-25 scope="row"><?php echo $id?></td>
                  <td class=w-25 scope="row"><?php echo $name?></td>
                  <td class=w-25 scope="row"><?php echo $price?></td>
                  <td class=w-25 scope="row"><img class="pb-5" style="height:300px" src="<?php echo $img?>" alt="Gambar tidak bisa diinput"></td>
                  <td>
                     <a href="products.php?act=edit&id=<?php echo $id?>">
                      <button type='button' class='btn btn-warning ' style="width:100px">Edit</button>
                    </a>
                    <a href="products.php?act=delete&id=<?php echo $id?>">
                    <button type='button' class='btn btn-danger ' style="width:100px">Delete</button>
                    </a>                 
                    
                  </td>
                </tr>

                <?php
                }

             
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <!-- main section end -->

    <!-- footer section start -->
    <footer>
      <div class="container-fluid text-dark" style="background-color: #f9ed69">
        <div class="d-flex justify-content-center align-items-center">
          <p class="fs-5">© 2022 BITTERBETTER COFFEE - ALL RIGHTS RESERVED</p>
        </div>
      </div>
    </footer>

    <!-- footer section end -->

    <!-- bootsrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
