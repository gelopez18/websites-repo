<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

}
?>

<form class = container method="POST" action="FESales.php" >
<div class="card ">
  <div class="card-header">
  <h3>Fire Extinguisher Sales</h3>
  </div>
  <div class="card-body">
  <label for="exampleInputEmail1" class="form-label">SRO</label>
    <input type="text" class="form-control" id="wkNumb" name="sro" aria-describedby="emailHelp">
</div>
<hr>
<div class="mb-3 form-check">
    <h4>Fire Extinguisher Details </h4><br>
    <div class="form-check">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="selected">Choose one</option>
                                <?php
                                // A sample product array
                                $products = array("Mobile", "Laptop", "Tablet", "Camera");
                                
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                    </div>
                <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="selected">Choose one</option>
                                <?php
                                // A sample product array
                                $products = array("Mobile", "Laptop", "Tablet", "Camera");
                                
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="selected">Choose one</option>
                                <?php
                                // A sample product array
                                $products = array("Mobile", "Laptop", "Tablet", "Camera");
                                
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                </div>
            </div>
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</form>