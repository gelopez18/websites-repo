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
                        <label for="exampleInputEmail1" class="form-label">Type</label>
                        <select class="form-select" aria-label="Default select example" name="Type1">
                            <option selected="selected">Choose one</option>
                                <?php
                                // A sample product array
                                $products = array("CO2", "Dry Chem", "Clean Guard", "K Class", "D Class", "Water Preassure", "Cartridge");
                                
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                    </div>
                <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Weight</label>        
                        <select class="form-select" aria-label="Default select example" name="weight1">
                            <option selected="selected">Choose one</option>
                                <?php
                                // A sample product array
                                $products = array("2.5", "5", "6", "9","10", "13", "15", "17", "20", "30", "150");
                                
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Qty</label>
                    <input type="text" class="form-control" id="wkNumb" name="Qty1" aria-describedby="emailHelp">
                </div>
            </div>
            <br>
            <div class="row">
                    <div class="col">

                        <select class="form-select" aria-label="Default select example" name="Type2">
                            <option selected="selected">Choose one</option>
                                <?php
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                    </div>
                <div class="col">
     
                        <select class="form-select" aria-label="Default select example" name="weight2">
                            <option selected="selected">Choose one</option>
                                <?php
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">

                    <input type="text" class="form-control" id="wkNumb" name="Qty2" aria-describedby="emailHelp">
                </div>
            </div>
            <br>
            <div class="row">
                    <div class="col">

                        <select class="form-select" aria-label="Default select example" name="Type3">
                            <option selected="selected">Choose one</option>
                                <?php
                                
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                    </div>
                <div class="col">
     
                        <select class="form-select" aria-label="Default select example" name="weight3">
                            <option selected="selected">Choose one</option>
                                <?php
                               
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">

                    <input type="text" class="form-control" id="wkNumb" name="Qty" aria-describedby="emailHelp">
                </div>
            </div>
            <br>
            <div class="row">
                    <div class="col">

                        <select class="form-select" aria-label="Default select example" name="Type4">
                            <option selected="selected">Choose one</option>
                                <?php
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
                               
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='strtolower($item)'>$item</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">

                    <input type="text" class="form-control" id="wkNumb" name="sro" aria-describedby="emailHelp" >
                </div>
            </div>
            
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</form>