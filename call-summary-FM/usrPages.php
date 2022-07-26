<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $clientClass = $_GET['ClientClass'];
    $wkNumb=$_GET['wkNumb'];
}

$sqlQuery = "SELECT SRO, total, Reason, client, clientClass, city, Comment, month, day, year FROM usr WHERE wkNumb='$wkNumb' AND clientClass='$clientClass';";

$Result=array();
$Result=mysqli_query($server, $sqlQuery);

while($row = $Result->fetch_assoc()) {
    if($row['clientClass']=="N"){
        $CC1="Checked";
        $CC2=" ";
    }else if($row['clientClass']=="C"){
        $CC2="Checked";
        $CC1=" ";
    }

    if($row['Reason']=="Refuse/Cancel"){
        $R1="Checked";
        $com1=$row['Comment'];
        $R2="";
        $com2="";
        $R3="";
        $com3="";
        $R4="";
        $com4="";
        
    }else if($row['Reason']=="Service by others"){
        $R1="";
        $com1="";
        $R2="Checked";
        $com2=$row['Comment'];
        $R3="";
        $com3="";
        $R4="";
        $com4="";
        
    }else if($row['Reason']=="Request to refiled"){
        $R1="";
        $com1="";
        $R2="";
        $com2="";
        $R3="Checked";
        $com3=$row['Comment'];
        $R4="";
        $com4="";
        
    }else if($row['Reason']=="Done Under another SRO"){
        $R1="";
        $com1="";
        $R2="";
        $com2="";
        $R3="";
        $com3="";
        $R4="Checked";
        $com4=$row['Comment'];
        
    } 

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
                            <td  class='border border-dark'>SRO: <b>".$row['SRO']."</b></td>
                            <td  class='border border-dark'>FOID: <b>FPAN004</b></td>
                        </tr>

                    </table>
        </div>
 </div><br>

    <div class='grid text-center' style='--bs-columns:5 ;'>
        <div></div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault' $CC1>
            <label>National</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Local JCI</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault' $CC2>
            <label>Core</label>
        </div>
        <div></div>
    </div>

        <label class=''>Site Name and Address:</label>
        <div class='border-bottom text-center'><b>".$row['client']." - ".$row['city']."</b></div><br>

        

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
        <div class='d-flex flex-row-reverse'><label>verified with:</label></div>
        <div class='border-bottom'></div>
        <div class='d-flex flex-row-reverse'><label>Phone:</label></div>
        <div class='border-bottom'></div>
    </div><br>

    <label>New Address:</label><br>
    <div class='border-bottom'></div><br>
    <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault' $R1>
    <label>Refuse/Cancel</label> 
            <div class='grid text-center' style='--bs-columns:6 ;'>
                <div class='d-flex flex-row-reverse'><label>Contact Name:</label></div>
                <div class='border-bottom'></div>
                <div class='d-flex flex-row-reverse'><label>Phone:</label></div>
                <div class='border-bottom'></div>
                <div class='d-flex flex-row-reverse'>Annual Value</div>
                <div class='border-bottom'><b>$".$row['total']."</b></div>
            </div>
            <label>Reason for Cancelation:</label><br>
            <div class='border-bottom text-center'><b>$com1</b></div><br>
            <div></div>
            <div class='grid text-center' style='--bs-columns:4 ;'>
                <div class='d-flex flex-row-reverse'><label>Additional Instructions:</label></div>
                <div class='border-bottom'></div>
                <div class='d-flex flex-row-reverse'><label>Retain or Cancelled:</label></div>
                <div class='border-bottom'></div>
            </div><br>
    <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault' $R2>
    <label>Service by others</label> 
            <div class='grid text-center' style='--bs-columns:4 ;'>
                <div class='d-flex flex-row-reverse'><label>Competitors Name</label></div>
                <div class='border-bottom'></div>
                <div class='d-flex flex-row-reverse'><label>Service Tag Name:</label></div>
                <div class='border-bottom'></div>
            </div><br>
            <div class='grid ' style='--bs-columns:2 ;'>
                <div class='d-flex flex-row-reverse'><label>Refile Date:</label></div>
                <div class='border-bottom'><b>$com2</b></div>
            </div>
    <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault' $R3>
    <label>Request to refiled</label> 
            <div class='grid text-center' style='--bs-columns:4 ;'>
                <div class='d-flex flex-row-reverse'><label>Contact Name:</label></div>
                <div class='border-bottom'></div>
                <div class='d-flex flex-row-reverse'><label>Refile Date:</label></div>
                <div class='border-bottom'></div>
            </div><br>
            <div class='grid text-center' style='--bs-columns:4 ;'>
                <div class='d-flex flex-row-reverse'><label>Phone number:</label></div>
                <div class='border-bottom'></div>
                <div class='d-flex flex-row-reverse'><label>Reason to refile</label></div>
                <div class='border-bottom'><b>$com3</b></div>
            </div><br>
    
    <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault' $R4>
    <label>Done Under another SRO</label> 
        <div class='grid text-center' style='--bs-columns:4 ;'>
            <div class='d-flex flex-row-reverse'><label>SRO:</label></div>
            <div class='border-bottom'><b>$com4</b></div>
            <div class='d-flex flex-row-reverse'><label>Date</label></div>
            <div class='border-bottom'></div>
        </div>
    <div class='grid text-center' style='--bs-columns:5 ;'>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Reassigned</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Out of district</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Out of Territory</label>
        </div>
        <div>
            <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
            <label>Wrong Service type</label>
        </div>
    </div>
    <div class='grid text-center' style='--bs-columns:4 ;'>
        <div class='d-flex flex-row-reverse'><label>Confirmed by:</label></div>
        <div class='border-bottom'></div>
        <div class='d-flex flex-row-reverse'><label>Assigned To:</label></div>
        <div class='border-bottom'></div>
    </div><br>
    <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
    <label>Out of FireMaster Territory</label> 
    <hr>
    <div class='grid text-center' style='--bs-columns:4 ;'>
        <div class='d-flex flex-row-reverse'><label>Distric Manager Approval :</label></div>
        <div class='border-bottom'></div>
        <div class='d-flex flex-row-reverse'><label>Assigned To:</label></div>
        <div class='border-bottom'></div>
    </div>

            <div><label>District comments :</label></div>
            <div class='border-bottom'></div><br>
            <div class='border-bottom'></div><br>
            <div ><label>Corporate comments:</label></div>
            <div class='border-bottom'></div><br>
            <div class='border-bottom'></div><br>

    <div class='grid text-center' style='--bs-columns:4 ;'>
            <div>
                <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
                <label>Decline</label> 
            </div>
            <div class='border-bottom'></div>
            <div class='d-flex flex-row-reverse'><label>Reason:</label></div>
            <div class='border-bottom'></div>
    </div><br>
    <div class='grid text-center' style='--bs-columns:2 ;'>
        <div class='d-flex flex-row-reverse'><label>Transfer to Sales Team:</label></div>
        <div class='border-bottom'></div>
    </div><br><br><br>
  ";


}
