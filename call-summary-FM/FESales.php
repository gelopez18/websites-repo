<?php
require_once __DIR__ . '/includes/connectDB.php';
require_once './includes/headers.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $SRO=$_POST['SRO'];
    $Type1=$_POST['Type1'];
    $Type2=$_POST['Type2'];
    $Type3=$_POST['Type3'];
    $Type4=$_POST['Type4'];
    $weight1=$_POST['weight1'];
    $weight2=$_POST['weight2'];
    $weight3=$_POST['weight3'];
    $weight4=$_POST['weight4'];
    $Qty1=$_POST['Qty1'];
    $Qty2=$_POST['Qty2'];
    $Qty3=$_POST['Qty3'];
    $Qty4=$_POST['Qty4'];
    $item1=$_POST['item1'];
    $item2=$_POST['item2'];
    $item3=$_POST['item3'];
    $OtherQty1=$_POST['OtherQty1'];
    $OtherQty2=$_POST['OtherQty2'];
    $OtherQty3=$_POST['OtherQty3'];
    $wkNumb=$_POST['wkNumb'];
    $date=date('Y-m-d');

    /*$saveFESales="INSERT INTO FETable(SRO, Type1, Type2, Type3, Type4, weight1, weight2, weight3, weight4, Qty1, Qty2, Qty3, Qty4, item1, item2, item3, OtherQty1, OtherQty2, OtherQty3, wkNumb, date) VALUE('$SRO', '$Type1', '$Type2', '$Type3', '$Type4', '$weight1', '$weight2','$weight3', '$weight4', '$Qty1', '$Qty2', '$Qty3', '$Qty4', '$item1', '$item2', '$item3', '$OtherQty1', '$OtherQty2', '$OtherQty3', '$wkNumb', '$date');";*/
    if($Type1!='Choose one'){
            $saveFESales="INSERT INTO FET1(SRO, Type1, weight1, Qty1,  wkNumb, date) VALUE('$SRO', '$Type1', '$weight1', '$Qty1', '$wkNumb', '$date');";
            if (mysqli_query($server, $saveFESales)){
                echo "<script>alert('FE Saved Succesfully');</script>";
            } else {
                echo"<script>alert(<h1>Invoice Not saved</h1>);</script>"
                . mysqli_error($server);
            }
    } if($Type2!='Choose one'){
        $saveFESales="INSERT INTO FET1(SRO, Type1, weight1, Qty1,  wkNumb, date) VALUE('$SRO', '$Type2', '$weight2', '$Qty2', '$wkNumb', '$date');";
        mysqli_query($server, $saveFESales);
    }
    if($Type3!='Choose one'){
        $saveFESales="INSERT INTO FET1(SRO, Type1, weight1, Qty1,  wkNumb, date) VALUE('$SRO', '$Type3', '$weight3', '$Qty3', '$wkNumb', '$date');";
        mysqli_query($server, $saveFESales);
    }
    if($Type4!='Choose one'){
        $saveFESales="INSERT INTO FET1(SRO, Type1, weight1, Qty1,  wkNumb, date) VALUE('$SRO', '$Type4', '$weight4', '$Qty4', '$wkNumb', '$date');";
        mysqli_query($server, $saveFESales);
    }
    if($item1!=''){
        $saveFESales="INSERT INTO OtherItems(SRO, item, qty, wkNumb, date) VALUE('$SRO', '$item1', '$OtherQty1', '$wkNumb', '$date');";
        mysqli_query($server, $saveFESales);
    }
    if($item2!=''){
        $saveFESales="INSERT INTO OtherItems(SRO, item, qty, wkNumb, date) VALUE('$SRO', '$item2', '$OtherQty2', '$wkNumb', '$date');";
        mysqli_query($server, $saveFESales);
    }
    if($item3!=''){
        $saveFESales="INSERT INTO OtherItems(SRO, item, qty, wkNumb, date) VALUE('$SRO', '$item3', '$OtherQty3', '$wkNumb', '$date');";
        mysqli_query($server, $saveFESales);
    }
    

}

mysqli_close($server);

?>

<form class = container method="POST" action="FESales.php" >
<div class="card ">
    <div class=row>
        <div class="card-header">
            <h3>Fire Extinguisher Sales</h3>
        </div>
        <div class=col>
            <div class="card-body">
                <label for="exampleInputEmail1" class="form-label">SRO</label>
                <input type="text" class="form-control" id="SRO" name="SRO">
            </div>
        </div>
        <div class=col>
            <div class="card-body">
                <label for="exampleInputEmail1" class="form-label">Week Number</label>
                <input type="text" class="form-control" id="wkNumb" name="wkNumb" >
            </div>
        </div>
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
                                    echo "<option value='$item'>$item</option>";
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
                                $weightValues = array("2.5", "5", "6", "9","10", "13", "15", "17", "20", "30", "150");
                                
                                // Iterating through the product array
                                foreach($weightValues as $weight){
                                    echo "<option value='$weight'>$weight</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Qty</label>
                    <input type="text" class="form-control" id="wkNumb" name="Qty1" placeholder="0"  value=0>
                </div>
            </div>
            <br>
            <div class="row">
                    <div class="col">

                        <select class="form-select"  name="Type2">
                            <option selected="selected">Choose one</option>
                                <?php
                                // Iterating through the product array
                                foreach($products as $item){
                                    echo "<option value='$item'>$item</option>";
                                }
                                ?>
                        </select>
                    </div>
                <div class="col">
     
                        <select class="form-select" aria-label="Default select example" name="weight2">
                            <option selected="selected">Choose one</option>
                                <?php
                                // Iterating through the product array
                                foreach($weightValues as $weight){
                                    echo "<option value='$weight'>$weight</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">

                    <input type="text" class="form-control" id="wkNumb" name="Qty2" placeholder="0" aria-describedby="emailHelp" value=0>
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
                                    echo "<option value='$item'>$item</option>";
                                }
                                ?>
                        </select>
                    </div>
                <div class="col">
     
                        <select class="form-select" aria-label="Default select example" name="weight3">
                            <option selected="selected">Choose one</option>
                                <?php
                               
                                // Iterating through the product array
                                foreach($weightValues as $weight){
                                    echo "<option value='$weight'>$weight</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">

                    <input type="text" class="form-control" id="wkNumb" name="Qty3" placeholder="0" aria-describedby="emailHelp" value=0>
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
                                    echo "<option value='$item'>$item</option>";
                                }
                                ?>
                        </select>
                    </div>
                <div class="col">
     
                        <select class="form-select" aria-label="Default select example" name="weight4">
                            <option selected="selected">Choose one</option>
                                <?php
                               
                                // Iterating through the product array
                                foreach($weightValues as $weight){
                                    echo "<option value='$weight'>$weight</option>";
                                }
                                ?>
                        </select>
                </div>
                <div class="col">

                    <input type="text" class="form-control" id="wkNumb" name="Qty4" placeholder="0" aria-describedby="emailHelp" value=0>
                </div>
            </div>
            
    </div><br><h5>Fire Extinguisher Details</h5><br>
    <div class="row">
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Other Material</label>   
            <input type="text" class="form-control" id="wkNumb" name="item1" placeholder="Item" aria-describedby="emailHelp" >
        </div>
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Qty</label>   
            <input type="text" class="form-control" id="wkNumb" name="OtherQty1" placeholder="0" aria-describedby="emailHelp" value=0><br>
        </div>
    </div> 
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="wkNumb" name="item2" placeholder="Item" aria-describedby="emailHelp" ><br>
        </div>
        <div class="col">
  
            <input type="text" class="form-control" id="wkNumb" name="OtherQty2" placeholder="0" aria-describedby="emailHelp" value=0><br>
        </div>
    </div> 
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="wkNumb" name="item3" placeholder="Item" aria-describedby="emailHelp" >
        </div>
        <div class="col">
            <input type="text" class="form-control" id="wkNumb" name="OtherQty3" placeholder="0" aria-describedby="emailHelp" value=0><br>
        </div>
    </div>       
  </div>
  <br>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
  </div>
</div>

</form>