<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
$array=explode(",",$values);
$array2=explode("*",$array[6]);
$array3=array("","","","","","","");
$size=sizeof($array2);
 for($i=0;$i<$size;$i++)
{
    $array3[$i]=$array2[$i];
   
}

$querry="select * from vehiclemodels  where price between $array[0] and $array[1] and mileage  between $array[2] and $array[3] and dailyUtilization between $array[4] and $array[5] and RCID like '%$array3[0]%' and RCID like '%$array3[1]%' and RCID like '%$array3[2]%' and RCID like '%$array3[3]%' and RCID like '%$array3[4]%' and RCID like '%$array3[5]%' and RCID like '%$array3[6]%' ";
$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;
 
 $str="
     <div class='container' >
    <div class='row' style='margin-top:-150px;'>
                      <h1 class=' col-md-2 ' id='form-h1'> 5.Usage_Type</h1>
                     </div>
  <div class='row' style='margin-top:20px;margin-left:-45px;margin-right:-45px'> <div class='col-md-12'>
                     
    <ul>
  <li>".'
    <input type="checkbox" id="myCheckboxBusiness" />
    <label class="label" for="myCheckboxBusiness"><img src="purpose_img/business.jpg" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxCommercial" />
    <label class="label" for="myCheckboxCommercial"><img src="purpose_img/commercial.jpg" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxPersonal" />
    <label class="label" for="myCheckboxPersonal"><img src="purpose_img/personal.jpg" /></label>
  </li>
 
</ul>    '."
            </div>
                          </div>  
                          <div class='row'>
<div class='col-md-2' style='margin-top:-34px;margin-left:70px'>Business</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:230px'>Commercial</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:375px'>Personal</div>
</div>
        </div>
      
    <div class='col-md-offset-5'>
     <button class='btn btn-dark' style='margin-top:-80px;padding-left:40px;padding-right:40px;' id='id5'>Next</button>                 
        </div>        
".'<script>  


$(document).ready(function(){
    document.getElementById("id5").onclick = function() {
    var val="";
var arr;
if(document.getElementById("myCheckboxBusiness").checked===true)
{val +="business*";};
if(document.getElementById("myCheckboxCommercial").checked===true)
{val +="commercial*";};
if(document.getElementById("myCheckboxPersonal").checked===true)
{val +="personal*";};
usg=val;
                      var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
                      values += mySlider3.getValue()+",";
                      values += rdType+",";
                      values += val;
        values += $(this).val()+",";
        $.ajax({
          url:"usage.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
                arr=data.split("!");
                  if((arr[0])!==""){
              $("#ele6").html(arr[1]);
              $("#ele3").html(arr[0]);
              }
              else{
              $("#ele3").html("No Result!!");
              }
    
            }
            });
                 };
                 });</script>';
                     
include 'resultWin.php';
 echo $opt.'@'.$str;

?>

