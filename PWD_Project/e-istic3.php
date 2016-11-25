<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>catégorie</title>
	<script src="Chart.js-master/Chart.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style_identification.css" />
</head>

<body>
<nav  class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div style="opacity:0,3;" class="container"style="background-color:#0DB0DD">
            <div  style="opacity:0,5;"style="background-color:#0DB0DD" class="navbar-header">
               <a class="navbar-brand" href="index.php"><p style="font-size:35px;font-style:italic;font-family:Asset;  ">e-istic</p></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="e-istic1.php">Choisir Catégorie</a>
                    </li>
                    <li>
                        <a href="e-istic4.php" >Localisation</b></a>
                
                    </li>
                    <li>
                        <a href="index.php" >Déconnecter </a>
				   </li>
                </ul>
            </div>
    </nav>

  <table align="center">
    <tr>
	        <td align="center" width="400" height="250">
                    <div id="canvas-holder" >
                        <canvas id="chart-area-pie" width="400" height="250"/>
                    </div>
			</td>		
               
	</tr>
	    <tr>
	        <td align="center">
                <div id="f1">
                    Matériel fonctionnelle <input id="n1" type="number" onchange="modife()" value="20" min="0" max="100" style="text-align:center">%
				</div>
            </td>
        </tr>
	    <tr>
		      <td align="center">
                <div id="f2">
                    Matériel Défectueux  <input id="n2" type="number" onchange="modife()" value="20" min="0" max="100" style="text-align:center">%
			    </div>
            </td>
		</tr>
  </table>
  </div>

<div class="footer">Copyright 2015 © E-ISTIC - All rights reserved !</div>	
</body>
 
<SCRIPT Language="JavaScript">
function printit(){
if (NS) {
    window.print() ;
} else {
    var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
    WebBrowser1.ExecWB(6, 2);
}
}
</script>

<script language="JavaScript">
var NS = (navigator.appName == "Netscape");
var VERSION = parseInt(navigator.appVersion);
if (VERSION > 3) {
    document.write('<form><input type=submit value="Imprimer cette page" name="Print" onClick="printit()"></form>');
}
</script>


<script>
        function modife() {
            var x1 = document.getElementById("n1").value;
            var x2 = document.getElementById("n2").value;



            var pieData = [
                    {
                        value: Number(x1),
                        color: "#F7464A",
                        highlight: "#FF5A5E",
                        label: "x1"
                    },
                    {
                        value: Number(x2),
                        color: "#46BFBD",
                        highlight: "#5AD3D1",
                        label: "x2"
                    },
               
            ];


            var ctx = document.getElementById("chart-area-pie").getContext("2d");
            window.myPie = new Chart(ctx).Pie(pieData);

            var lineChartData = {
                labels: ["x1", "x2"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [Number(x1), Number(x2)]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [Number(x6), Number(x7), Number(x8), Number(x9), Number(x10)]
                    }
                ]

            }


            var ctx = document.getElementById("canvas-line").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {
                responsive: true
            });
            var polarData = [
        {
            value: Number(x1),
            color: "#F7464A",
            highlight: "#FF5A5E",
            label: "x1"
        },
        {
            value: Number(x2),
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "x2"
        }

            ];


            var ctx = document.getElementById("chart-area-polar").getContext("2d");
            window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
                responsive: true
            });
            var radarChartData = {
                labels: ["x1", "x2"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [Number(x1), Number(x2)]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [Number(x6), Number(x7), Number(x8), Number(x9), Number(x10)]
                    }
                ]
            };


            window.myRadar = new Chart(document.getElementById("canvas-radar").getContext("2d")).Radar(radarChartData, {
                responsive: true
            });
            var doughnutData = [
				{
				    value: Number(x1),
				    color: "#F7464A",
				    highlight: "#FF5A5E",
				    label: "x1"
				},
				{
				    value: Number(x2),
				    color: "#46BFBD",
				    highlight: "#5AD3D1",
				    label: "x2"
				}

            ];


            var ctx = document.getElementById("chart-area-doughnut").getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, { responsive: true });

            var barChartData = {
                labels: ["x1", "x2"],
                datasets: [
                    {
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(220,220,220,0.75)",
                        highlightStroke: "rgba(220,220,220,1)",
                        data: [Number(x1), Number(x2)]
                    },
                    {
                        fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(151,187,205,0.75)",
                        highlightStroke: "rgba(151,187,205,1)",
                        data: [Number(x6), Number(x7), Number(x8), Number(x9), Number(x10)]
                    }
                ]

            }

            var ctx = document.getElementById("canvas-bar").getContext("2d");
            window.myBar = new Chart(ctx).Bar(barChartData, {
                responsive: true
            });
        }

    </script>
</body>
