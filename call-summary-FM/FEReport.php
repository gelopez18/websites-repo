<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fromDate =$_POST['FromDate'];
    $toDate =$_POST['ToDate'];

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
                <?php
                            $query="SELECT if(type='CO2',
                            sum(CASE WHEN weight1='2.5'  AND Type1='CO2' THEN Qty1 END) AS '2.5LB', 
                            sum(CASE WHEN weight1='5'  AND Type1='CO2' THEN Qty1 END) AS '5LB', 
                            sum(CASE WHEN weight1='6'  AND Type1='CO2'  THEN Qty1 END) AS '6LB', 
                            sum(CASE WHEN weight1='9'  AND Type1='CO2'  THEN Qty1 END) AS '9LB', 
                            sum(CASE WHEN weight1='10'  AND Type1='CO2'  THEN Qty1 END) AS '10LB', 
                            sum(CASE WHEN weight1='13'  AND Type1='CO2' THEN Qty1 END) AS '13LB', 
                            sum(CASE WHEN weight1='15'  AND Type1='CO2'  THEN Qty1 END) AS '15LB', 
                            sum(CASE WHEN weight1='17'  AND Type1='CO2'  THEN Qty1 END) AS '17LB', 
                            sum(CASE WHEN weight1='20'  AND Type1='CO2'  THEN Qty1 END) AS '20LB', 
                            sum(CASE WHEN weight1='30'  AND Type1='CO2'  THEN Qty1 END) AS '30LB', 
                            sum(CASE WHEN weight1='150'  AND Type1='CO2' THEN Qty1 END) AS '150LB'  
                            FROM FET1 WHERE date>'$fromDate' AND date<'$toDate';";
                            $sqlQ=mysqli_query($server, $query);
                            while ($row=mysqli_fetch_array($sqlQ)) {
                                echo "
                                <td>".$row['type1']."</td>
                                <td style='text-align: center;'>".$row['2.5LB']."</td>
                                <td style='text-align: center;'>".$row['5LB']."</td>
                                <td style='text-align: center;'>".$row['6LB']."</td>
                                <td style='text-align: center;'>".$row['9LB']."</td>
                                <td style='text-align: center;'>".$row['10LB']."</td>
                                <td style='text-align: center;'>".$row['13LB']."</td>
                                <td style='text-align: center;'>".$row['15LB']."</td>
                                <td style='text-align: center;'>".$row['20LB']."</td>
                                <td style='text-align: center;'>".$row['30LB']."</td>
                                <td style='text-align: center;'>".$row['150LB']."</td>
                                ";
                            }
                            }
                    ?>
                </tr>
                <tr>
                    <?php
                            $query="SELECT type1,
                            sum(CASE WHEN weight1='2.5'  AND Type1='Dry Chem' THEN Qty1 END) AS '2.5LB', 
                            sum(CASE WHEN weight1='5'  AND Type1='Dry Chem' THEN Qty1 END) AS '5LB', 
                            sum(CASE WHEN weight1='6'  AND Type1='Dry Chem'  THEN Qty1 END) AS '6LB', 
                            sum(CASE WHEN weight1='9'  AND Type1='Dry Chem'  THEN Qty1 END) AS '9LB', 
                            sum(CASE WHEN weight1='10'  AND Type1='Dry Chem'  THEN Qty1 END) AS '10LB', 
                            sum(CASE WHEN weight1='13'  AND Type1='Dry Chem' THEN Qty1 END) AS '13LB', 
                            sum(CASE WHEN weight1='15'  AND Type1='Dry Chem'  THEN Qty1 END) AS '15LB', 
                            sum(CASE WHEN weight1='17'  AND Type1='Dry Chem'  THEN Qty1 END) AS '17LB', 
                            sum(CASE WHEN weight1='20'  AND Type1='Dry Chem'  THEN Qty1 END) AS '20LB', 
                            sum(CASE WHEN weight1='30'  AND Type1='Dry Chem'  THEN Qty1 END) AS '30LB', 
                            sum(CASE WHEN weight1='150'  AND Type1='Dry Chem' THEN Qty1 END) AS '150LB'  
                            FROM FET1 WHERE date>'$fromDate' AND date<'$toDate';";
                            $sqlQ=mysqli_query($server, $query);
                            while ($row=mysqli_fetch_array($sqlQ)) {
                                echo "
                                <td>".$row['type1']."</td>
                                <td style='text-align: center;'>".$row['2.5LB']."</td>
                                <td style='text-align: center;'>".$row['5LB']."</td>
                                <td style='text-align: center;'>".$row['6LB']."</td>
                                <td style='text-align: center;'>".$row['9LB']."</td>
                                <td style='text-align: center;'>".$row['10LB']."</td>
                                <td style='text-align: center;'>".$row['13LB']."</td>
                                <td style='text-align: center;'>".$row['15LB']."</td>
                                <td style='text-align: center;'>".$row['20LB']."</td>
                                <td style='text-align: center;'>".$row['30LB']."</td>
                                <td style='text-align: center;'>".$row['150LB']."</td>
                                ";
                            }
                            
                    ?>
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