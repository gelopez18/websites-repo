<?php 
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $SRO=$_POST['SRO'];
    $wkNumb=$_POST['wkNumb'];
    $value_to_update=$_POST['ModifyField'];
    $value=$_POST['value'];

    $updateQuery = "UPDATE salessummaries SET  $value_to_update=$value WHERE SRO='$SRO' AND wkNumb='$wkNumb';";

    if(mysqli_query($server, $updateQuery)){
        echo "<script>alert('Invoice update Succesfully');</script>";
    }else {
        echo"<h1>Invoice Not Updated</h1><br>"
        . mysqli_error($server);
    }

}


?>
<form class="card-body container" method="POST" action="modifySS.php"><h1>Sales Input Modification</h1><hr class="undefined">
<label for="exampleInputEmail1" class="form-label"><h5>SRO</h5></label>
<input type="text" class="form-control" id="SRO" name="SRO"><br>
<label for="exampleInputEmail1" class="form-label"><h5>Week Number</h5></label>
<input type="text" class="form-control" id="SRO" name="wkNumb"><br>
<hr>
    <label class="form-check-label" for="flexRadioDefault1"><h5>Modification</h5></label>  <br><br>
  
<div class="form-check">
    <input class="form-check-input" type="radio" name="ModifyField" id="flexRadioDefault1" value="wkNumb">
    <label class="form-check-label" for="flexRadioDefault1">Week Number</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="ModifyField" id="flexRadioDefault1" value="ClientClass">
    <label class="form-check-label" for="flexRadioDefault1">Client Class</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="ModifyField" id="flexRadioDefault1" value="Client">
    <label class="form-check-label" for="flexRadioDefault1">Client Name</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="ModifyField" id="total" value="total" checked>
  <label class="form-check-label" for="flexRadioDefault2">Total</label>

  <br><br>
</div>
<label for="exampleInputEmail1" class="form-label"><h5>New Value</h5></label>
    <input type="text" class="form-control" id="value" name="value"><br><br>
    <button type="submit" class="btn btn-success btn-lg col-lg-4 col-md-4 col-sm-4">Change</button>
</form>

</body>
</html>