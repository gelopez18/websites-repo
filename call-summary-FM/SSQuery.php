<?php 
require_once './includes/headers.php';
?>
<form class=container method="GET" action="SalesSummaryQY.php?page=1" >
<div class="card ">
      <div class="card-header">
        <h5>Sales Summary Requested</h5>
      </div>
    <div class="card-body">
      <label for="exampleInputEmail1" class="form-label">Week number address</label>
      <input type="text" class="form-control" id="wkNumb" name="wkNumb" aria-describedby="emailHelp">
    </div>
<div class="mb-3 form-check">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="clientClass" id="ClientClassN" Value="N">
      <label class="form-check-label" for="flexRadioDefault1">
          National
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="clientClass" id="ClientClassC" Value="C" checked>
      <label class="form-check-label" for="flexRadioDefault2">
          Core
      </label>
    </div><br>
    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
  </div>  
  </div>
 
  </div>
</div>

</form>


