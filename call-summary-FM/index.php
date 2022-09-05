<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';
$date=getdate(date("U"));

$Sumsales="SELECT sum(total) FROM salessummaries WHERE year='$date[year]';";
$salesTotal=mysqli_query($server, $Sumsales);

$MonthlyCount = "SELECT count(SRO) FROM salessummaries WHERE year='$date[year]';";
$MontTotalCount = mysqli_query($server, $MonthlyCount);
$MonthlySum = "SELECT month, sum(total) FROM salessummaries WHERE year='$date[year]' GROUP BY month;";
$SalesSumTotal=mysqli_query($server, $MonthlySum);
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
     const sortedPHParray = phparray.sort((a, b)=>{return a[1] - b[1];})

     sortedPHParray.unshift(['Month', 'Total']);
    console.log(sortedPHParray);
</script>";

?>
<div class="container text-center row">
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
                    <h5 class="card-title">Total Invoices YTD</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Amount invoices billed</h6>
                    <p class="card-text"><?php while($row = mysqli_fetch_array($MontTotalCount)){echo"<h1>".$row[0]." </h1>";}
 ?></p>
                </div>
                
            </div>

        </div>  
        <div class="col-8 col-sm-12 col-md-8">
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable(sortedPHParray);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Franchise Performance',
            subtitle: 'Sales Per Month' },
          axes: {
            x: {
              0: { side: 'top', label: 'Months'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
            <div id="top_x_div" style="width: 800px; height: 600px;"></div>
            

  
        </div> 
    </div>
  </div>
  <br>
  <div class="  row">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
        <script type="text/javascript">
          //invoice per city  and total per
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable();

            var options = {
              title: 'My Daily Activities',
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          }
        </script>
    </div>
  </div> 
  <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
