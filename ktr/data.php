<!--
Please follow the comments i have prepared for you very keenly and do as i have done!!
 1. I will show you how I queried my material_uploads table to get the "unit name" and 
 the "rating" it has.
 
 ***SIMPLE EXAMPLE OF MY TABLE DETAILS****
 --------------------------------------
 UNIT		RATINGS			ADDED_BY
 ---------------------------------------
 IT				25				25
 CT				15				36
 CN				10				25
 SURVEY			32				14
 ----------------------------------------
 -->
 <?php
 // FIRST STEP INCLUDE THE LIBRARY LIBCHART FILE.
 include "assets/ktr/include/conn.php";
include("libchart/libchart/classes/libchart.php");

//Querying the database to get the "std_id" and "votes" it has received.
$rows=mysql_query("select * from student_posts");
//initialize the vertical bar chart
$chart=new Pie ChartColor(400,250); // here u can use your own lengths and width for the chart area.
$dataset=new XYDataSet();
while ($row = mysql_fetch_array($rows)) //looping through the rows found from query above and assigning each a dataset.
	{
$dataset->addPoint(new Point($row['std_id'],$row['votes']));
// the above is the same as $dataset->addPoint(new Point("Feb 2005",321));
	}
	$chart->setDataSet($dataset);
$chart->setTitle("Votes Results"); //CHART TITLE

//set the filename and where it will be stored. for my case:1. libchart>>>file in my project that stores my charts 2. statistics.png name of my rendered chart.
$chart->render('libchart/PoweredBy.png'); 
?>
<!-----now here call the image you rendered in the HTML page you want and where you want it------>
<img src='libchart/PoweredBy.png'>

<!-----HARRY MASIDZA 
HOPE THIS HELPS YOU COMRADE
2016------>
