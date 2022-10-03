<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $clientClass = $_GET['ClientClass'];
    $wkNumb=$_GET['wkNumb'];
}

$sqlQuery = "SELECT SRO, total, client, clientClass, Comment, month, day, year FROM usr WHERE wkNumb='$wkNumb' AND clientClass='$clientClass';";

$Result=array();
$Result=mysqli_query($server, $sqlQuery);

while($row = $Result->fetch_assoc()) {
echo "

<div class='grid text-center' style='--bs-columns:3 ;'>


        <div><img class='' src='./img/Picture2.png'></div>
        <div class=' align-self-end'><h4>Uncomplete Service Report</h4></div>
        <div>  
                    <table  class='container'>
                        <tr id='wkInfo'  class='border border-dark'>
                            <td>
                                <b>Received Stamp</b>
                                <br><br><br>
                            </td>
                        </tr>
                        <tr  class='border border-dark'>
                            <td  class='border border-dark'>SRO:".$row['SRO']."</td>
                            <td  class='border border-dark'>FOID:FPAN004</td>
                        </tr>

                    </table>
        </div>
 </div>

    <div class='grid text-center' style='--bs-columns:5 ;'>
        <div></div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>National</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Local JCI</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Core</label>
        </div>
        <div></div>
    </div>
    <label>Site Name and Address:</label><br><br>
    <div class='grid text-center' style='--bs-columns:5 ;'>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Not an Address</label> 
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Relocated</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>New Tenant</label>
        </div>
        <div><input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'><label>Out of business</label></div>
        <div></div>
    </div><br>
    <div class='grid text-center' style='--bs-columns:4 ;'>
        <div><label>verified with:</label></div>
        <div></div>
        <div><label>Phone:</label></div>
        <div></div>
    </div><br>
    <label>New Address:</label><br><br>
  ";


}
