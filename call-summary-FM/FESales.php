<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

}
?>

<form class = container method="POST" action="FESales.php" >
<div class="card ">
  <div class="card-header">
    Fire Extinguisher Sales
  </div>
  <div class="card-body">
  <label for="exampleInputEmail1" class="form-label">SRO</label>
    <input type="text" class="form-control" id="wkNumb" name="sro" aria-describedby="emailHelp">
</div>
<div class="mb-3 form-check">
    <div class="form-check">
    <input class="form-check-input" type="radio" name="ClientClass" id="ClientClassN" Value="N">
    <label class="form-check-label" for="flexRadioDefault1">
        National
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="ClientClass" id="ClientClassC" Value="C" checked>
    <label class="form-check-label" for="flexRadioDefault2">
        Core
    </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</form>