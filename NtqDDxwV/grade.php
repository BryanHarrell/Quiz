
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


//echo "something";
//print_r($_SERVER);
//echo "something";
//print_r($_SESSION["ninth"]);
//print_r(file_get_contents("php://input"));
//echo "something";
//echo "soemthign1";
//print_r ($_SESSION['seventh']);
//var_dump($_POST);
//var_dump($_GET);
//echo $_POST['RES'];
//print_r($_SERVER['QUERY_STRING']);
//echo $_SERVER['QUERY_STRING'][REF];
//echo "something";
$totalfirstsectionCorrect = 0;
$totalfirstsectionX = 0;
$totalsecondsectionCorrect = 0;
$totalsecondsectionX = 0;
$totalthirdsectionCorrect = 0;
$free = false;
$totalthirdsectionX = 0;
if(!session_id()) session_start();
error_reporting(-1);
$_SESSION['seventh'] =  $_POST;
foreach($_SESSION['seventh'] as $key => $value){
    if ($value === "free"){
    $free = true;
    }
    if ($value === "Aa"){
        $totalfirstsectionCorrect++;
    }
    else if ($value == "Axa"){
        $totalfirstsectionCorrect++;
        $totalfirstsectionX++;
    }
    else if ($value === "Ab"){
        $totalsecondsectionCorrect++;
    }
    else if ($value == "Axb"){
   
        $totalsecondsectionCorrect++;
        $totalsecondsectionX++;
    }
    else if ($value === "Ac"){
   
        $totalthirdsectionCorrect++;
    }
    else if ($value == "Axc"){
    
        $totalthirdsectionCorrect++;
        $totalthirdsectionX++;
    }
    else if ($key === "first_name"){
    $name = $value;
    }
    else if ($key === "email"){
    $emailTarget = $value;
    }
    else {}

}
$totalfirstsectionCorrect = $totalfirstsectionCorrect - $totalfirstsectionX;
$totalsecondsectionCorrect = $totalsecondsectionCorrect - $totalsecondsectionX;
$totalthirdsectionCorrect = $totalthirdsectionCorrect - $totalthirdsectionX;
//echo $totalfirstsectionX;

//echo $totalfirstsectionCorrect;
//echo $totalsecondsectionCorrect;
//echo $totalthirdsectionCorrect;
$krJA = 0;
$srJA = 0;
$dJA = 0;
$pdzJA = 0;
$pbdJA = 0;

//logic
if ($totalfirstsectionX <= 2)
{
    $krJA = 0;
}
else if ($totalfirstsectionX == 3)
{
    $krJA = 5;
}
else if ($totalfirstsectionX == 4)
{
    $krJA = 8;
}
else if ($totalfirstsectionX == 5)
{
    $krJA = 10;
}
else if ($totalfirstsectionX == 6)
{
    $krJA = 15;
}
else if ($totalfirstsectionX == 7)
{
    $krJA = 20;
}
else if ($totalfirstsectionX == 8)
{
    $krJA = 25;
}
else if ($totalfirstsectionX == 9)
{
    $krJA = 30;
}
else if ($totalfirstsectionX == 10)
{
    $krJA = 35;
}
else if ($totalfirstsectionX == 11)
{
    $krJA = 40;
}
else if ($totalfirstsectionX == 12)
{
    $krJA = 50;
}
else if ($totalfirstsectionX == 13)
{
    $krJA = 55;
}
else if ($totalfirstsectionX == 14)
{
    $krJA = 60;
}
else if ($totalfirstsectionX == 15)
{
    $krJA = 65;
}
else if ($totalfirstsectionX == 16)
{
    $krJA = 70;
}
else if ($totalfirstsectionX == 17)
{
    $krJA = 75;
}
else if ($totalfirstsectionX == 18)
{
    $krJA = 80;
}
else if ($totalfirstsectionX == 19)
{
    $krJA = 85;
}
else if ($totalfirstsectionX == 20)
{
    $krJA = 90;
}
else if ($totalfirstsectionX == 21)
{
    $krJA = 93;
}
else if ($totalfirstsectionX >= 22)
{
    $krJA = 95;
}


if ($totalfirstsectionCorrect <= 2)
{
    $srJA = 0;
}
else if ($totalfirstsectionCorrect == 3)
{
    $srJA = 2;
}
else if ($totalfirstsectionCorrect == 4)
{
    $srJA = 3;
}
else if ($totalfirstsectionCorrect == 5)
{
    $srJA = 5;
}
else if ($totalfirstsectionCorrect == 6)
{
    $srJA = 8;
}
else if ($totalfirstsectionCorrect == 7)
{
    $srJA = 10;
}
else if ($totalfirstsectionCorrect == 8)
{
    $srJA = 14;
}
else if ($totalfirstsectionCorrect == 9)
{
    $srJA = 18;
}
else if ($totalfirstsectionCorrect == 10)
{
    $srJA = 20;
}
else if ($totalfirstsectionCorrect == 11)
{
    $srJA = 25;
}
else if ($totalfirstsectionCorrect == 12)
{
    $srJA = 30;
}
else if ($totalfirstsectionCorrect == 13)
{
    $srJA = 35;
}
else if ($totalfirstsectionCorrect == 14)
{
    $srJA = 40;
}
else if ($totalfirstsectionCorrect == 15)
{
    $srJA = 45;
}
else if ($totalfirstsectionCorrect == 16)
{
    $srJA = 50;
}
else if ($totalfirstsectionCorrect == 17)
{
    $srJA = 55;
}
else if ($totalfirstsectionCorrect == 18)
{
    $srJA = 60;
}
else if ($totalfirstsectionCorrect == 19)
{
    $srJA = 65;
}
else if ($totalfirstsectionCorrect == 20)
{
    $srJA = 70;
}
else if ($totalfirstsectionCorrect == 21)
{
    $srJA = 75;
}
else if ($totalfirstsectionCorrect == 22)
{
    $srJA = 80;
}
else if ($totalfirstsectionCorrect == 23)
{
    $srJA = 84;
}
else if ($totalfirstsectionCorrect == 24)
{
    $srJA = 88;
}
else if ($totalfirstsectionCorrect == 25)
{
    $srJA = 90;
}
else if ($totalfirstsectionCorrect == 26)
{
    $srJA = 92;
}
else if ($totalfirstsectionCorrect == 27)
{
    $srJA = 94;
}
else if ($totalfirstsectionCorrect >= 28)
{
    $srJA = 95;
}


if ($totalsecondsectionCorrect <= 13)
{
    $dJA = 0;
}
else if ($totalsecondsectionCorrect == 14)
{
    $dJA = 5;
}
else if ($totalsecondsectionCorrect == 15)
{
    $dJA = 8;
}
else if ($totalsecondsectionCorrect == 16)
{
    $dJA = 10;
}
else if ($totalsecondsectionCorrect == 17)
{
    $dJA = 15;
}
else if ($totalsecondsectionCorrect == 18)
{
    $dJA = 20;
}
else if ($totalsecondsectionCorrect == 19)
{
    $dJA = 24;
}
else if ($totalsecondsectionCorrect == 20)
{
    $dJA = 28;
}
else if ($totalsecondsectionCorrect == 21)
{
    $dJA = 30;
}
else if ($totalsecondsectionCorrect == 22)
{
    $dJA = 35;
}
else if ($totalsecondsectionCorrect == 23)
{
    $dJA = 40;
}
else if ($totalsecondsectionCorrect == 24)
{
    $dJA = 44;
}
else if ($totalsecondsectionCorrect == 25)
{
    $dJA = 48;
}
else if ($totalsecondsectionCorrect == 26)
{
    $dJA = 50;
}
else if ($totalsecondsectionCorrect == 27)
{
    $dJA = 54;
}
else if ($totalsecondsectionCorrect == 28)
{
    $dJA = 58;
}
else if ($totalsecondsectionCorrect == 29)
{
    $dJA = 60;
}
else if ($totalsecondsectionCorrect == 30)
{
    $dJA = 65;
}
else if ($totalsecondsectionCorrect == 31)
{
    $dJA = 70;
}
else if ($totalsecondsectionCorrect == 32)
{
    $dJA = 75;
}
else if ($totalsecondsectionCorrect == 33)
{
    $dJA = 80;
}
else if ($totalsecondsectionCorrect == 34)
{
    $dJA = 84;
}
else if ($totalsecondsectionCorrect == 35)
{
    $dJA = 88;
}
else if ($totalsecondsectionCorrect == 36)
{
    $dJA = 90;
}
else if ($totalsecondsectionCorrect == 37)
{
    $dJA = 92;
}
else if ($totalsecondsectionCorrect >= 38)
{
    $dJA = 95;
}




if ($totalthirdsectionX <= 1)
{
    $pdzJA = 0;
}
else if ($totalthirdsectionX == 2)
{
    $pdzJA = 5;
}
else if ($totalthirdsectionX == 3)
{
    $pdzJA = 10;
}
else if ($totalthirdsectionX == 4)
{
    $pdzJA = 15;
}
else if ($totalthirdsectionX == 5)
{
    $pdzJA = 20;
}
else if ($totalthirdsectionX == 6)
{
    $pdzJA = 25;
}
else if ($totalthirdsectionX == 7)
{
    $pdzJA = 30;
}
else if ($totalthirdsectionX == 8)
{
    $pdzJA = 40;
}
else if ($totalthirdsectionX == 9)
{
    $pdzJA = 50;
}
else if ($totalthirdsectionX == 10)
{
    $pdzJA = 60;
}
else if ($totalthirdsectionX == 11)
{
    $pdzJA = 65;
}
else if ($totalthirdsectionX == 12)
{
    $pdzJA = 70;
}
else if ($totalthirdsectionX == 13)
{
    $pdzJA = 80;
}
else if ($totalthirdsectionX == 14)
{
    $pdzJA = 85;
}
else if ($totalthirdsectionX == 15)
{
    $pdzJA = 90;
}
else if ($totalthirdsectionX == 16)
{
    $pdzJA = 92;
}
else if ($totalthirdsectionX >= 17)
{
    $pdzJA = 95;
}



if ($totalthirdsectionCorrect <= 1)
{
    $pbdJA = 0;
}
else if ($totalthirdsectionCorrect == 2)
{
    $pbdJA = 5;
}
else if ($totalthirdsectionCorrect == 3)
{
    $pbdJA = 10;
}
else if ($totalthirdsectionCorrect == 4)
{
    $pbdJA = 15;
}
else if ($totalthirdsectionCorrect == 5)
{
    $pbdJA = 20;
}
else if ($totalthirdsectionCorrect == 6)
{
    $pbdJA = 25;
}
else if ($totalthirdsectionCorrect == 7)
{
    $pbdJA = 30;
}
else if ($totalthirdsectionCorrect == 8)
{
    $pbdJA = 40;
}
else if ($totalthirdsectionCorrect == 9)
{
    $pbdJA = 50;
}
else if ($totalthirdsectionCorrect == 10)
{
    $pbdJA = 60;
}
else if ($totalthirdsectionCorrect == 11)
{
    $pbdJA = 65;
}
else if ($totalthirdsectionCorrect == 12)
{
    $pbdJA = 70;
}
else if ($totalthirdsectionCorrect == 13)
{
    $pbdJA = 80;
}
else if ($totalthirdsectionCorrect == 14)
{
    $pbdJA = 85;
}
else if ($totalthirdsectionCorrect == 15)
{
    $pbdJA = 90;
}
else if ($totalthirdsectionCorrect == 16)
{
    $pbdJA = 92;
}
else if ($totalthirdsectionCorrect >= 17)
{
    $pbdJA = 95;
}

$_SESSION['first'] = $krJA;

//echo $_SESSION['first'];
//echo $krJA;
$_SESSION['second'] =  $srJA;


$_SESSION['third'] = $dJA;

$_SESSION['fourth'] = $pdzJA;

$_SESSION['fifth'] = $pbdJA;
//echo $krJA;
//echo $srJA;
//echo $dJA;
//echo $pdzJA;
//echo $pbdJA;

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>EGOGRAM Results</title>
 
  <style type="text/css">
  ${demo.css}
  </style>
  <!-- Main Graph -->
  <script type="text/javascript">

  
  $(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        colors: [
        '#ff0000',
        '#00ff00',
        'purple',
        'orange',
        'blue'
        
        ],
        title: {
            text: 'EGOGRAM výsledky testu'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
            'Kritické rodičovské „JA”',
            'Starostlivé rodičovské „JA”',
            'Dospelé „JA”',
            'Prirodzené detské „JA”',
            'Prispôsobivé detské „JA”'
            
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0"></td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                colorByPoint: true
            }
        },
        series: [{
            showInLegend: false,  
            name: 'User',
            data: [first, second, third, fourth, fifth]

        }
        ]
    });
});
</script>

<!-- PNG Graph for Email -->
<script type="text/javascript">
var msg = $.ajax({type: "GET", url: "rest.php", async: false}).responseText;
var obj = JSON.parse(msg);
var first = Math.floor(obj.first);
var second = Math.floor(obj.second);
var third = Math.floor(obj.third);
var fourth = Math.floor(obj.fourth);
var fifth = Math.floor(obj.fifth);
console.log(first);
console.log(second);
console.log(third);
console.log(fourth);
console.log(fifth);

var options = {
    chart: {
        type: 'column'
    },
    colors: [
    '#ff0000',
    '#00ff00',
    'purple',
    'orange',
    'blue'
    
    ],
    title: {
        text: 'EGOGRAM výsledky testu'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
        'Kritické rodičovské „JA”',
        'Starostlivé rodičovské „JA”',
        'Dospelé „JA”',
        'Prirodzené detské „JA”',
        'Prispôsobivé detské „JA”'
        
        ]
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0"></td>' +
        '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
            colorByPoint: true
        }
    },
    series: [{
        showInLegend: false,  
        name: 'User',
        data: [first, second, third, fourth, fifth]

    }
    ]
};


// URL to Highcharts export server
var exportUrl = 'http://export.highcharts.com/';

// POST parameter for Highcharts export server
var object = {
    options: JSON.stringify(options),
    type: 'image/png',
    async: true
};
// Ajax request
$.ajax({
    type: 'post',
    url: exportUrl,
    data: object,
    success: function (data) {
        // Update "src" attribute with received image URL
        $('#chart').attr('src', exportUrl + data);
    }
});

</script>
<style>

body { 
    padding: 30px 
}  
form { 
    display: block; margin: 20px auto; border-radius: 10px; padding: 15px 
}  
.progress { 
    position:relative; width: 100%; border: 1px solid #ddd; padding: 1px; border-radius: 3px;height: 50px;
    border-radius: 10px;
}  
.bar { 
    background: #39B54A !important; width:0%; height:20px; border-radius: 3px; 
}  
.percent { 
    position:absolute; display:inline-block; top:3px; left:48%; 
}  
.mainbox{
    max-width: 100%;
    background-color: #BAD595;
    border-radius: 30px;
    padding: 20px;
    border: 1px solid lightgray;margin-bottom:10px;
}
.mainbox.white{
    max-width: 100%;
    background-color: #FFF;
    border-radius: 30px;
    padding: 20px;
    border: 1px solid lightgray;
}
.buttonradio{
    height:30px !important;
    width:30px !important;
}
input[type=submit] {
    padding:10px 20px; background:#ED1C24; color:white; border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
p{
  font-size: 20px;
  font-family: 'century';color: darkblue;
}
</style>
</head>
<body onload="simplemail()">

<p>Ďakujeme za vyplnenie testu Egogram. Vaše výsledky vám prezentuje pani Andrea Vadkerti.</p>
    <?php 
    
      echo '<pre>';
  print_r($_SESSION['seventh']);
   echo '</pre>';
   
   ?>
<!-- <div id="container" style="height: 400px"></div> -->
 <div id = "results" class = "results">

     <?php
           if (empty($_SESSION)){
           }
           else{

     //Get texts in order, display them on the page, and get them ready for mailing
  
     if(!session_id()) session_start();
     $first = $_SESSION['first'];
     $second = $_SESSION['second'];
     $third = $_SESSION['third'];
     $fourth = $_SESSION['fourth'];
     $fifth = $_SESSION['fifth'];
 
     $values = array(
         "krJA" => $first, "srJA" => $second,  "dJA"=>  $third, "pdzJA" => $fourth, "pbdJA"  => $fifth,);
    
     arsort($values);
     
   $stuff = "";
     foreach ($values as $key => $val) {
   
        if ($key === "krJA"){
       $stuff .= "<pre>";
        $stuff .= print_r($_SESSION['seventh']);
         $stuff .= "<pre>";
  
        $stuff .= "Kritické Rodičovské „JA”";
        $stuff .= "<br>";
        $stuff .= $val;
         $stuff .= "<br>";
           
        }
        if ($key === "srJA"){
            $stuff .= "Starostlivé Rodičovské „JA”";
             $stuff .= "<br>";
           $stuff .= $val;
            $stuff .= "<br>";
        }
        if ($key === "dJA"){
          
            $stuff .="Dospelé „JA”";
             $stuff .= "<br>";
            $stuff .= $val;
             $stuff .= "<br>";
        }
        if ($key === "pdzJA"){
            $stuff .="Prirodzené Detské „JA”";
             $stuff .= "<br>";
           $stuff .= $val;
            $stuff .= "<br>";
        }
        if ($key === "pbdJA"){
    
          $stuff .="Prispôsobivé detské „JA”";
           $stuff .= "<br>";
           $stuff .= $val;
            $stuff .= "<br>";
        }


    }}
    //$data = ob_get_contents();
    ?>

</div>
<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.frmSample.txtEmail
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>
           
        
<!-- <button onclick="mail()">Click here to Email the Report</button> -->
<script src="../js/highcharts.js"></script>
<script src="../js/highcharts-3d.js"></script>
<script src="../js/modules/exporting.js"></script>
<script>

function simplemail(){

    $.ajax({
        url: 'mail.php',
        data: { html: "zadarmo <br>", data2: "<?php echo $stuff ?>" + "<br>", name: '<?php echo $name ?>' +"<br> " +  '<?php echo $emailTarget ?>'+ "<br>", email: 'bryan@lifeofbrybry.com'},
        type: 'POST',
        success: function(result) {
	
        }
        

    });
    
};
function mail(){


   // var chart = document.getElementById("chart");
    //var chartSimplified = document.getElementById("chart").outerHTML;
    //var emailTarget = document.getElementById("emailfield").value;
   // chart.style.display.block = true;
    //emailbutton.style.display.none = true;
    //var resultsSimplified = document.getElementById("results").outerHTML;
    $.ajax({
        url: 'mail.php',
        data: { html: "", data2: "", name: '<html>' +  '<?php echo $name?>', email: '<?php echo $emailTarget?>'},
        type: 'POST',
        success: function(result) {
	alert("Mail sent");
        }
        

    });
    
};


</script>
</body>
</html>
