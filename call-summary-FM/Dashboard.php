<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';
$date=getdate(date("U"));

$Sumsales="SELECT sum(total) FROM salessummaries WHERE year='$date[year]';";
$salesTotal=$server->query($Sumsales);

$MonthlyCount = "SELECT count(SRO) FROM salessummaries WHERE year='$date[year]';";
$MonthlySum = "SELECT month, sum(total) FROM salessummaries WHERE year='$date[year]' GROUP BY month;";
$SalesSumTotal=$server->query($MonthlySum);
echo "<script> 
let phparray= [];
</script> 
";
    while($row=mysqli_fetch_array($SalesSumTotal)){
        $array=array($row[0], $row[1]); 
        $arrayresult=json_encode($array);
       echo "
       <script>
            phparray.push($arrayresult);            
        </script>";
     }

echo "
<script>  
     phparray.unshift(['Month', 'Total']);
    console.log(phparray);
</script>";

?>
<div class="container text-center">
    <div class="row">
        <div class="col-4 col-sm-12 col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> Sales Year Up-to-Date</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total amount of Sales invoiced</h6>
                    <p class="card-text"><?php 
while($rowInvoice = mysqli_fetch_array($salesTotal)){
    $Total = number_format($rowInvoice[0]);
    echo"<h1>\$".$Total." </h1>";
} ?></p>
                </div>
                
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Franchise Commission YTD</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total amount FM has Paid</h6>
                    <p class="card-text"><?php
                    $commission=number_format((double)$Total*(double)520);
                    echo"<h1>\$".$commission." </h1>";
 ?></p>
                </div>
                
            </div>
    <br>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Tech Commission YTD</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total Amount Paid to Tech</h6>
                    <p class="card-text"><?php
                    $commission=number_format((double)$Total*(double)280.8);
                    echo"<h1>\$".$commission." </h1>";
 ?></p>
                </div>
                
            </div>

        </div>  
        <div class="col-8 col-sm-12 col-md-8">
                <script type="text/javascript">

                
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable(phparray);

        var options = {
          chart: {
            title: 'Franchise Performance',
            subtitle: 'Invoices and Profit',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
            <div id="columnchart_material" style="width: 800px; height: 500px;"></div>

        </div> 
    </div>
  </div>

<?php


?>