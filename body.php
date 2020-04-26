<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
//$values="200000,5000000,0,50,0,50,,personal*";
$array=explode(",",$values);

$array2=explode("*",$array[6]);
$array4=explode("*",$array[7]);
$array6=explode("*",$array[8]);
$array8=explode("*",$array[9]);

$array3=array("","","","","","","");
$array5=array("","","");
$array7=array("","","","","","","");
$array9=array("","","","","","","");

$size=sizeof($array2);
$size2=sizeof($array4);
$size3=sizeof($array6);
$size4=sizeof($array8);

for($i=0;$i<$size;$i++)
{
    $array3[$i]=$array2[$i];   
}
 for($i=0;$i<$size2;$i++)
{
    $array5[$i]=$array4[$i];
}
for($i=0;$i<$size3;$i++)
{
    $array7[$i]=$array6[$i];   
}
for($i=0;$i<$size4;$i++)
{
    $array9[$i]=$array8[$i];   
}

$querry="select * from vehiclemodels  where price between $array[0] and $array[1] and mileage  "
        . "between $array[2] and $array[3] and dailyUtilization between $array[4] "
        . "and $array[5] and RCID like '%$array3[0]%' and RCID like '%$array3[1]%' "
        . "and RCID like '%$array3[2]%' and RCID like '%$array3[3]%' and "
        . "RCID like '%$array3[4]%' and RCID like '%$array3[5]%' and RCID like '%$array3[6]%'"
        . " and `usage` like '%$array5[0]%' and `usage` like '%$array5[1]%' and `usage` like '%$array5[2]%' " 
        ."and fuel like '%$array7[0]%' and fuel like '%$array7[1]%' "
        . "and fuel like '%$array7[2]%' and fuel like '%$array7[3]%' and "
        . "fuel like '%$array7[4]%' and fuel like '%$array7[5]%' and fuel like '%$array7[6]%'"
        ."and bodyStyle like '%$array9[0]%' and bodyStyle like '%$array9[1]%' "
        . "and bodyStyle like '%$array9[2]%' and bodyStyle like '%$array9[3]%' and "
        . "bodyStyle like '%$array9[4]%' and bodyStyle like '%$array9[5]%' and bodyStyle like '%$array9[6]%'"
        ;
$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;
 
 $str="
     <div class='container' >
      <div class='row' style='margin-top:-100px;'>
                      <h1 class=' col-md-2 ' id='form-h1'> 8.Key_Consideration</h1>
                     </div>
    <div class='row' style='margin-top:7px;margin-left:-45px;margin-right:-45px'> <div class='col-md-12'>
                     
    <ul>
  <li>".'
    <input type="checkbox" id="myCheckboxVforM" />
    <label class="label" for="myCheckboxVforM"><img src="" alt="Value for Money"/></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxDealerSup" />
    <label class="label" for="myCheckboxDealerSup"><img src="" alt="Dealer Support" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxMainCost" />
    <label class="label" for="myCheckboxMainCost"><img src="" alt="Low Maintance Cost"/></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxReSellVal" />
    <label class="label" for="myCheckboxReSellVal"><img src="" alt="Resell Value"/></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxSafety" />
    <label class="label" for="myCheckboxSafety"><img src="" alt="Safety" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxStyling" />
    <label for="myCheckboxStyling"><img src="" alt="Styling"/></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxSaleSup" />
    <label class="label" for="myCheckboxSaleSup"><img src="" alt="After Sale Support" /></label>
  </li>
</ul>    '."
            </div>
                          </div>  
                          <div class='row'>

        </div>
      
    <div class='col-md-offset-5'>
     <button class='btn btn-dark' style='margin-top:-10px;padding-left:38px;padding-right:40px;' id='id8'>Next</button>               
        </div>        
".'<script>  


$(document).ready(function(){
    document.getElementById("id8").onclick = function() {
    var val="";
var arr;
if(document.getElementById("myCheckboxVforM").checked===true)
{val +="ValueForMoney*";};
if(document.getElementById("myCheckboxDealerSup").checked===true)
{val +="EasyDealerSupport*";};
if(document.getElementById("myCheckboxMainCost").checked===true)
{val +="LowMaintanenceCost*";};
if(document.getElementById("myCheckboxReSellVal").checked===true)
{val +="ReSellValue*";};
if(document.getElementById("myCheckboxSafety").checked===true)
{val +="Safety*";};
if(document.getElementById("myCheckboxStyling").checked===true)
{val +="Styling*";};
if(document.getElementById("myCheckboxSaleSup").checked===true)
{val +="AfterSaleSupport*";};
keyConsider=val;
                     var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
                      values += mySlider3.getValue()+",";
                      values += rdType+",";
                      values += usg+",";
                      values += fuelPrefer+",";
                      values += bodyStyle+",";
                      values += val;
       
        $.ajax({
          url:"keyConsider.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
  
arr=data.split("@");
if((arr[0])!==""){
              $("#ele9").html(arr[1]);
              $("#ele3").html(arr[0]);
    }
    else
    {         $("#ele3").html("No result!!!");
    }
            }
            });
                 };
                 });</script>';
include 'resultWin.php';
 echo $opt.'!'.$str;

?>

