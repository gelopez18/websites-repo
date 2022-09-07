<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';
$date=getdate(date("U"));

$Sumsales="SELECT sum(total) FROM salessummaries WHERE year='$date[year]';";
$salesTotal=mysqli_query($server, $Sumsales);

$MonthlyCount = "SELECT sum(total) FROM salessummaries WHERE year='$date[year]' AND OverRide='TR';";
$MontTotalCount = mysqli_query($server, $MonthlyCount);

$MonthlySum = "SELECT month, sum(total) FROM salessummaries WHERE year='$date[year]' GROUP BY month;";
$SalesSumTotal=mysqli_query($server, $MonthlySum);

$citySales = "SELECT city, sum(total) FROM salessummaries WHERE  year='$date[year]' GROUP BY city ORDER BY 'total' DESC LIMIT 10;";
$citySalesQy=mysqli_query($server, $citySales);

echo "<script> let CitysalesArray=[]; let phparray= [];</script>";
    while($row=mysqli_fetch_array($SalesSumTotal)){
        $array=array($row[0], $row[1]); 
        $arrayresult=json_encode($array);
       echo "<script>phparray.push($arrayresult);</script>";
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
                    <p class="card-text"><?php while($rowInvoice = mysqli_fetch_array($salesTotal)){$Total = number_format($rowInvoice[0]);    echo"<h1>\$".$Total." </h1>";} ?>
                </div>
              </div>
    <br>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Franchise Commission YTD</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total amount FM has Paid</h6>
                    <p class="card-text"><?php
                    $commission=number_format((double)$Total*(double)520);
                    echo"<h1>\$".$commission." </h1>";?></p>
                </div>   
            </div>
    <br>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total TR Paid YTD</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Amount of TR paid</h6>
                    <p class="card-text"><?php while($row = mysqli_fetch_array($MontTotalCount)){
                      $TR=number_format((double)$row[0]*(double).1);
                      echo"<h1>\$".$TR." </h1>";}?></p>
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
                          width: 1000,
                          legend: { position: 'none' },
                          chart: {
                            title: 'Franchise Performance',
                            subtitle: 'Sales Per Month' },
                          axes: {
                            x: {
                              0: { side: 'bottom', label: 'Months'} // Top x-axis.
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
    <br>
    <div class="row">
      <div class="col-4 col-sm-12 col-md-4">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title"> City Sales</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total amount of Sales per City</h6>
                    <p class="card-text"><?php echo "<table class='table table-hover'>
                    <thead>
                      <tr>
                        <th>City</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>"; 
                    while($Cityrow = mysqli_fetch_array($citySalesQy)){
                      $Cityarray=array($Cityrow[0], number_format($Cityrow[1])); 
                      $Cityarrayresult=json_encode($Cityarray);
                      echo"<script> CitysalesArray.push($Cityarrayresult);</script>
                      <tr>
                      <td>".$Cityrow[0]."</td>
                      <td>\$".number_format($Cityrow[1])."</td>
                      </tr>";
                      } 
                      echo" 
                    </tbody>
                    </table>
                    <script> 
                    const sortedCitysalesArray=CitysalesArray.sort((a, b)=>{return a[1] - b[1];});
                    sortedCitysalesArray.unshift(['City', 'Total']);
                    console.log(CitysalesArray);
                    </script>
                    ";?>
                </div>
              </div>
            
      </div>
      <div class="col-8 col-sm-12 col-md-8">

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['City', 'Total'],
          ['Santa Clarita*', 13690],
          ['North Hollywood (Los Angeles*)', 391],
          ['Sun Valley (Los Angeles*)', 9523],
          ['Canyon Country (Santa Clarita*)', 7980],
          ['Burbank*', 27091],
          ['Valencia (Santa Clarita*)', 10842],
          ['Sylmar (Los Angeles*)', 8548],
          ['Newhall (Santa Clarita*)', 4075],
          ['Los Angeles', 174],
          ['San Fernando*', 2068]
        ]/*CitysalesArray*/);

        var options = {
          title: 'City\'s Total Analysis',
          pieHole: 0.4
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
       <div id="donutchart" style="width: 1200px; height: 800px;"></div>
      </div>
    </div>
  </div>

  
