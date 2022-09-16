<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fromDate =$_POST['FromDate'];
    $toDate =$_POST['ToDate'];

$query="SELECT count(weight1) FROM FETable WHERE date>'$fromDate' AND date<'$toDate' AND weight1='2.5' AND type1='CO2' GROUP BY Type1;";
    $sqlQ=mysqli_query($server, $query);
    while ($row=mysqli_fetch_array($sqlQ)) {
        echo implode($row);
    }
}
?>
<div class="container">
<form actions='FEReport.php' method="POST">
<div class="card ">
    <div class="row ">
            <div class="card-header">
                <h3>Fire Extinguisher Sales Dates</h3>
            </div>
            <div class=col>
                <div class="card-body">
                    <label for="exampleInputEmail1" class="form-label">From</label>
                    <input type="date" class="form-control" id="FromDate" name="FromDate">
                </div>
            </div>
            <div class=col>
                <div class="card-body">
                    <label for="exampleInputEmail1" class="form-label">To</label>
                    <input type="date" class="form-control" id="ToDate" name="ToDate" >
                </div>
            </div>
    </div>
</div>    
    <br>
    <button type="submit" class="btn btn-success btn-md col-lg-4 col-md-4 col-sm-4">search</button>
    <br>
    
</form>
<br>
        <h4>Fire Extinguisher Report from <?php echo "<b>$fromDate</b> to <b>$toDate</b></h4>"; ?><hr> 
        <table class="table table-success table-striped">
            <thead>
                <tr style="text-align: center;">
                    <th>Extinguisher Class</th> <th>2.5</th><th>5</th>  <th>6</th>  <th>9</th>  <th>10</th> <th>13</th> <th>15</th> <th>17</th> <th>20</th> <th>30</th> <th>150</th>
                </tr>
            </thead>          
            <tbody>
                <tr>
                    <td >CO2</td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                </tr>
                <tr>
                    <td>Dry Chem</td>
                    <td style="text-align: center;"></td>
                    <td  style="text-align: center;"><?php
                    $query="SELECT count(weight1, weight2, weight3) FROM FETable WHERE date>'$fromDate' AND date<'$toDate' AND weight1='5' AND type1='Dry Chem' AND type2='Dry Chem' AND type3='Dry Chem';";
                    
                    $sqlQ=mysqli_query($server, $query);
                    $row=mysqli_fetch_array($sqlQ);
                    if (implode($row)>0) {
                        echo implode($row);
                    }else{ echo 0;}
                    ?></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                </tr>
                <tr>
                    <td>Clean Guard</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>K Class</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>D Class</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Water Preassure</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Cartridge</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </tbody>
        </table>
<div>            