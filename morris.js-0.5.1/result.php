

<?php
echo "<link rel='stylesheet' href='morris.js-0.5.1/morris.css'>";
echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>";
echo "<script type='text/javascript' src='morris.js-0.5.1/morris.min.js'></script>";
echo "<script src='//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>";
echo "<link type='text/css' rel='stylesheet' href='style.css'/>";


$cn = @mysqli_connect("localhost", "root", "Tstcrxhi0");
if(!$cn){
	echo "Cannot connect to MySQL server<br>";
	exit;
}
mysqli_select_db($cn, "branalysis_db");


if ($_GET['type']=="brand") {
	gen_brand_search_result($cn);
 }
	elseif($_GET['type']=="date"){
	gen_date_search_result($cn);
 }
 //elseif($_GET['type']=="employee"){

// }elseif($_GET['type']=="department"){

// }

// if ($_GET['mode']=="delete"){
// 	delete_entity($_GET['type'],$cn);
// }


function gen_brand_search_result($cn){
	$page_id =  $_POST['page_id'];
	$category = $_POST['category'];
	$name = $_POST['name'];
	// $last_name =  $_POST['lastname'];
	// $year = $_POST['year'];
	// $gpa = $_POST['gpa'];
	
	$query = "SELECT * FROM post p , statistics s
				WHERE p.page_id=s.page_id 
				AND p.page_id LIKE '%$page_id%' 
				AND s.name LIKE '%$name%' 
				AND s.category LIKE '%$category%' ";
	$result = mysqli_query($cn,$query);
	$content = '<table>'."\n";
	$content .= '  <thead><th>page_id</th><th>name</th><th>category</th><th>post_id</th><th>post_day</th><th>post_time</th><th>like_count</th></thead>'."\n";
	$content .= '  <tbody>'."\n";
	while($row = mysqli_fetch_array($result)){
		$content .= "<tr><td>{$row['page_id']}</td>"."\n";
		$content .= "<td>{$row['name']}</td>"."\n";
		$content .= "<td>{$row['category']}</td>"."\n";
		$content .= "<td>{$row['post_id']}".'</td>'."\n";
    	$content .= "<td>{$row['post_day']}</td>"."\n";
    	$content .= "<td>{$row['post_time']}</td>"."\n";
    	$content .= "<td>{$row['like_count']}</td>"."\n";
    	//$content .= '<td><a href="/show_entity.php?type=student&sid='.$row['page_id'].'"> View </a>';
    	//$content .= '<a href="/add_entity.php?type=brand&mode=edit&page_id='.$row['sid'].'"> Edit </a>';
    	// $content .= '<a href="/result.php?type=student&mode=delete&sid='.$row['sid'].'" 
    	// 			onclick="return confirm(\'Are you sure you want to delete this?\');"> Delete </a></td></tr>';

	}
	$content .= "</tbody></table>";
	echo $content;


}
function gen_date_search_result($cn){
	$post_day =  $_POST['post_day'];
	$category = $_POST['category'];
	//$academic_year =  $_POST['academic_year'];
	//$sem = $_POST['sem'];
	//$sec = $_POST['sec'];
	
$query = "SELECT name, SUM( like_count )AS likes
FROM post p, statistics s
WHERE p.page_id = s.page_id
AND p.category LIKE  '%$category%'
AND p.post_day LIKE '%$post_day%'
GROUP BY name ";

	$result = mysqli_query($cn,$query);
	$content = '<table>'."\n";
	$content .= '  <thead><th>Name</th><th>engagement from users(likes)</th></thead>'."\n";
	$content .= '  <tbody>'."\n";
	$ar=array();
	while($row = mysqli_fetch_array($result)){
		$ar[]=$row;
		$content .= "<tr><td>{$row['name']}</td>"."\n";
		$content .= "<td>{$row['page_id']}</td>"."\n";
    	$content .= "<td>{$row['likes']}</td>"."\n";




    	

    	// $height=$rows['likes'];
    	// $output .= "<li><img=src="greenbar.png" height=" '.$height' "></li>"
    	//$content .= "<td>{$row['sem']}</td>"."\n";
    	//$content .= "<td>{$row['sec']}</td>"."\n";
    //	$content .= '<td><a href="/school/show_entity.php?type=course&course_no='.$row['course_no'].'"> View </a>';
    //	$content .= '<a href="/school/add_entity.php?type=course&mode=edit&course_no='.$row['course_no'].'"> Edit </a>';
    //	$content .= '<a href="/school/result.php?type=course&mode=delete&course_no='.$row['course_no'].'" 
    //				onclick="return confirm(\'Are you sure you want to delete this?\');"> Delete </a></td></tr>';


	}

	$content .= "</tbody></table>";

	
	echo $content;
	$jsonarray= json_encode($ar);
	echo $jsonarray;
	echo "<div id='divname'></div>";
	echo "<script type='text/javascript'>

	var json= ($jsonarray) ;
    new Morris.Line({
  element: 'divname',

  data: json,
 
  xkey: '0',

  ykeys: ['likes'],

  labels: ['Value']
});
   	</script>";


	//print json_encode($ar, JSON_FORCE_OBJECT);


	//echo "<script type='text/javascript' src='chart.js'></script>";
	//echo <div id="morris-line-chart"></div>


// <script language="Javascript" src="/schoo/FusionCharts/js/FusionCharts.charts.js"></script>
// // Loading necessary libraries.
// include "/schoo/FusionCharts/export-handlers/PHP-export-handler/index.php";
 
// // Creating the appropriate object.
// $FC = new FusionCharts("Column2D", "800", "400");
 
// // Populating the data.
// $DataGrid=$this->get_template_vars('DataGrid');
// foreach ($DataGrid['Rows'] as $row)
//     $FC->addChartData($row['DataCells']['likes']['Data'], "Label=".$row['DataCells']['name']['Data']);
 
// // Adding the chart to the webpage.
// $FC->setRenderer('javascript');
// $FC->renderChart();


	}
// function delete_entity($type, $cn){
// 	if($type == "student"){
// 		$sid = $_GET['sid'];
// 		$query = "DELETE FROM student WHERE sid = $sid";
// 		$result = mysqli_query($cn,$query);
// 		if($result){
// 			echo '<meta http-equiv="refresh" content= "0;URL=?type=student&page=stop" />';
// 		}
// 	}elseif($type=="course"){
// 		$course_no = $_GET['course_no'];
// 		$query = "DELETE FROM course WHERE course_no = '$course_no'";
// 		$result = mysqli_query($cn,$query);
// 		if($result){
// 			echo '<meta http-equiv="refresh" content= "0;URL=?type=course&page=stop" />';
// 		}
// 	}

// }
mysqli_close($cn);
?>
