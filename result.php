 

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

head();


if ($_GET['type']=="time") {
	search_by_time_result($cn);
 }
	elseif($_GET['type']=="engage"){
	gen_date_search_result($cn);
 }
 	elseif($_GET['type']=="date"){
	search_by_date_result($cn);
 }
  	elseif($_GET['type']=="day"){
	search_by_day_result($cn);
 }
  	elseif($_GET['type']=="stat"){
	brand_stat_result($cn);
 }

function head(){
    $ct .= '<head>';
    $ct .= '<meta charset="utf-8">';
    $ct .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
    $ct .= ' <meta name="description" content="">';
    $ct .= '    <meta name="author" content="">';
    $ct .= '  <meta name="author" content="">';
    $ct .= '   <link href="../final/startbootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">';
    $ct .= '<link href="../final/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">';
    $ct .= ' <link href="../final/startbootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">';
    $ct .= '<link href="../final/startbootstrap/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">';
    $ct .= ' <link href="../final/startbootstrap/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">';
    $ct .= '<link href="../final/startbootstrap/dist/css/sb-admin-2.css" rel="stylesheet">';
    $ct .= ' <link href="../final/startbootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
    $ct .= '  </head>';

       $ct .= '<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">';
    $ct .= '<div class="navbar-header">';
    $ct .= '<div class="navbar-default sidebar" role="navigation">';
    $ct .= '            <div class="sidebar-nav navbar-collapse">';
 
    $ct .= ' <ul class="nav navbar-top-links navbar-right">';
   // $ct .= ' <div class="navbar-default sidebar" role="navigation">';
        $ct .= ' <li>';
    $ct .= '<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home </a>';
    $ct .= '</li>';
   $ct .= ' <li>';
    $ct .= '<a href=#><i class="fa fa-dashboard fa-fw"></i> Summary </a>';
    $ct .= '</li>';

    $ct .= '</ul>';
        $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '     </nav>';

echo $ct;

}

function body(){
    $ct .= '<body>';

    $ct .= '<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">';
    $ct .= '<div class="navbar-header">';
    $ct .= '<div class="navbar-default sidebar" role="navigation">';
    $ct .= '            <div class="sidebar-nav navbar-collapse">';
 
    $ct .= ' <ul class="nav navbar-top-links navbar-right">';
   // $ct .= ' <div class="navbar-default sidebar" role="navigation">';

    $ct .= ' <li>';
    $ct .= '<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home </a>';
    $ct .= '</li>';
    $ct .= '</ul>';
        $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '     </nav>';
   

  $ct .= '<div class="panel-body">';
   brand_stat_result($cn);
    $ct .= ' </div></form>';



    $ct .= ' </div>';
    $ct .= '  </div>';
    $ct .= ' <script src="../final/startbootstrap/bower_components/jquery/dist/jquery.min.js"></script>';
    $ct .= '<script src="../final/startbootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>';
    $ct .= '<script src="../final/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>';
    $ct .= '<script src="../final/startbootstrap/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>';
    $ct .= '<script src="../final/startbootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>';
    $ct .= '<script src="../final/startbootstrap/dist/js/sb-admin-2.js"></script>';
    $ct .= "<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>";

    $ct .='</ul>';
    $ct .='<div>';
    $ct .='</div>';


    $ct .= '</body>';


    echo $ct;
}


function brand_stat_result($cn){

	$page_id =  $_POST['page_id'];
	$category = $_POST['category'];
	$name = $_POST['name'];

	
	$query = "SELECT * FROM statistics s
				WHERE page_id LIKE '%$page_id%' 
				AND name LIKE '%$name%' 
				AND category LIKE '%$category%' ";
	$result = mysqli_query($cn,$query);
	echo '<div class="text-center">'; 
	$content .= '<table>'."\n";
	$content .= '  <thead><th>page_id</th><th>name</th><th>fans</th><th>mention</th></thead>'."\n";
	$content .= '  <tbody>'."\n";
	$ar=array();
	while($row = mysqli_fetch_array($result)){
		$ar[]=$row;
		$content .= "<tr><td>{$row['page_id']}</td>"."\n";
		$content .= "<td>{$row['name']}</td>"."\n";
		$content .= "<td>{$row['fans']}</td>"."\n";
		$content .= "<td>{$row['mention']}".'</td>'."\n";

		$fans = $row['fans'];
		$name = $row['name'];
		$mention = $row['mention'];
		$fans = $row['fans'];


		// echo "PAGE NAME : $name    | \t";
		// echo "MENTIONED BY USERS : $mention     | <br>";
		// echo "FANS : $fans     | \t";

$query1 = "SELECT post_id
			FROM post p, statistics s
			WHERE p.page_id=s.page_id 
				AND p.page_id LIKE '%$page_id%' 
				AND s.name LIKE '%$name%' 
				AND s.category LIKE '%$category%'  ";
	$result1 = mysqli_query($cn,$query1);
	$num_rows=mysqli_num_rows($result1);

	// echo "POST : $num_rows     | \t";


	$query2 = "SELECT name, SUM(like_count) as sum 
FROM post p, statistics s
WHERE p.page_id=s.page_id 
				AND p.page_id LIKE '%$page_id%' 
				AND s.name LIKE '%$name%' 
				AND s.category LIKE '%$category%' ";
	$result2 = mysqli_query($cn,$query2);
	$row2 = mysqli_fetch_array($result2);
	$total_like=$row2['sum'];
	$engage_post= (int)$total_like/(int)$num_rows;
	$engage_fans=(int)$total_like*100/(int)$fans;
	$mention_fan=(int)$mention*100/(int)$fans;
	// echo "TOTAL ENGAGEMENT : $total_like     |<br> ";
	// echo "ENGAGEMENT PER POST : $engage_post |<br>"; 
	// echo "ENGAGEMENT AS % OF FANS : $engage_fans %     |<br>";
	// echo "PEOPLE TALKING ABOUT THIS AS % OF FANS : $mention_fan %<br>";
	// echo "-----------------------------------------------------------------<br>";
	}
	$content .= "</tbody></table>";
	

	
	$jsonarray= json_encode($ar);

		echo '<div class="text-center">'; 
		echo "<h1> AIRLINE STATISTICS  </h1>\t";

		echo '</div>';
	
	echo "<div id='divname'></div>";
	echo "<script type='text/javascript'>

	var json= ($jsonarray) ;
    new Morris.Bar({
  element: 'divname',
  axes: true,

  data: json,
 
  xkey: ['name'],

  ykeys: ['fans'],

  labels: ['Fans']
});


   	</script>";
echo '</div>';

}

function search_by_time_result($cn){
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
				AND s.category LIKE '%$category%' 
				ORDER BY p.post_time";
	$result = mysqli_query($cn,$query);
	$content = '<table>'."\n";
	$content .= '  <thead><th>page_id</th><th>name</th><th>category</th><th>post_id</th><th>post_day</th><th>post_time</th><th>like_count</th></thead>'."\n";
	$content .= '  <tbody>'."\n";
	$ar=array();
	while($row = mysqli_fetch_array($result)){
		$ar[]=$row;
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
		echo '<div class="text-center">'; 
		echo "<h1> $name   </h1>\t";
		echo "<h2>$category   </h2>\t";
		echo '</div>';
    	//echo $content;

	$jsonarray= json_encode($ar);
	
	echo "<div id='divname'></div>";
	echo "<script type='text/javascript'>

	var json= ($jsonarray) ;
    new Morris.Bar({
  element: 'divname',
  axes: true,

  data: json,
 
  xkey: ['post_time'],

  ykeys: ['like_count'],

  labels: ['Post Likes']
});
   	</script>";


}

function search_by_date_result($cn){
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
				AND s.category LIKE '%$category%' 
				ORDER BY p.post_day";
	$result = mysqli_query($cn,$query);
	$content = '<table>'."\n";
	$content .= '  <thead><th>page_id</th><th>name</th><th>category</th><th>post_id</th><th>post_day</th><th>post_time</th><th>like_count</th></thead>'."\n";
	$content .= '  <tbody>'."\n";
	$ar=array();
	while($row = mysqli_fetch_array($result)){
		$ar[]=$row;
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
	echo '<div class="text-center">'; 
	echo "<h1> Jae Oh's Top Date for Engagement </h1>\t";
		// echo "<h1> $name </h1>\t";
			echo "<h2>$category   </h2>\t";
		echo '</div>';
	//echo $content;
	$jsonarray= json_encode($ar);
	
	echo "<div id='divname'></div>";
	echo "<script type='text/javascript'>

	var json= ($jsonarray) ;
    new Morris.Bar({
  element: 'divname',
  axes: true,

  data: json,
 
  xkey: ['post_day'],

  ykeys: ['like_count'],

  labels: ['Post Likes']
});
   	</script>";


}

function search_by_day_result($cn){
	$page_id =  $_POST['page_id'];
	$category = $_POST['category'];
	$name = $_POST['name'];

	
	$query = "SELECT DAYNAME(post_day)as Day, like_count  FROM post p , statistics s
				WHERE p.page_id=s.page_id 
				AND p.page_id LIKE '%$page_id%' 
				AND s.name LIKE '%$name%' 
				AND s.category LIKE '%$category%' 
				GROUP BY Day
				ORDER BY 
     CASE
          WHEN Day = 'Sunday' THEN 1
          WHEN Day = 'Monday' THEN 2
          WHEN Day = 'Tuesday' THEN 3
          WHEN Day = 'Wednesday' THEN 4
          WHEN Day = 'Thursday' THEN 5
          WHEN Day = 'Friday' THEN 6
          WHEN Day = 'Saturday' THEN 7
     END ASC ";


	$sql = "SELECT MAX(vs.like_count ) 
				FROM (
				SELECT DAYNAME( post_day ) AS 
				DAY , like_count
				FROM post p, statistics s
				WHERE p.page_id=s.page_id 
				AND p.page_id LIKE '%$page_id%' 
				AND s.name LIKE '%$name%' 
				AND s.category LIKE '%$category%' 
				GROUP BY DAY
				) vs";
	$result1 = mysqli_query($cn,$sql);
	//var_dump($result1);


	
	$result = mysqli_query($cn,$query);
	$content = '<table>'."\n";
	$content .= '  <thead><th>day</th><th>like/th></thead>'."\n";
	$content .= '  <tbody>'."\n";
	$ar=array();
	while($row = mysqli_fetch_array($result)){
		$ar[]=$row;
		//$content .= "<tr><td>{$row['page_id']}</td>"."\n";
		//$content .= "<td>{$row['name']}</td>"."\n";
		//$content .= "<td>{$row['category']}</td>"."\n";
		//$content .= "<td>{$row['post_id']}".'</td>'."\n";
    	//$content .= "<td>{$row['post_day']}</td>"."\n";
    	$content .= "<td>{$row['Day']}</td>"."\n";
    	$content .= "<td>{$row['like_count']}</td>"."\n";
    	

	}
	$content .= "</tbody></table>";
	echo '<div class="text-center">'; 
		// echo "<h1> $name  </h1>\t";
			echo "<h1> Hershey's Top Day for Engagement  </h1>\t";
			echo "<h2>$category   </h2>\t";
		echo '</div>';
	//echo $content;
	$jsonarray= json_encode($ar);
	
	echo "<div id='divname'></div>";
	echo "<script type='text/javascript'>

	var json= ($jsonarray) ;
    new Morris.Bar({
  element: 'divname',
  axes: true,

  data: json,
 
  xkey: ['Day'],

  ykeys: ['like_count'],

  labels: ['Post Likes']
});
   	</script>";


}

function gen_date_search_result($cn){
	$post_day =  $_POST['post_day'];
	$category = $_POST['category'];

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
echo '<div class="text-center">'; 
		echo "<h1> $name  </h1>\t";
			echo "<h2>$category   </h2>\t";
		echo '</div>';
	
	//echo $content;
	$jsonarray= json_encode($ar);
	
	echo "<div id='divname'></div>";
	echo "<script type='text/javascript'>

	var json= ($jsonarray) ;
    new Morris.Bar({
  element: 'divname',
  axes: true,

  data: json,
 
  xkey: ['name'],

  ykeys: ['likes'],

  labels: ['Post Likes']
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
