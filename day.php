
<?php echo "hello";

echo ' <div id="wrapper">';
echo "<h1>Brand Database </h1>";
 echo' <div>';
head();
body();

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
    $ct .= '<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Brand Statistics</a>';
    $ct .= '</li>';
    $ct .= ' <li>';
    $ct .= '<a href="day.php"><i class="fa fa-dashboard fa-fw"></i>Top Day for Engagement</a>';
    $ct .= '</li>';
    $ct .= ' <li>';
    $ct .= '<a href="time.php"><i class="fa fa-dashboard fa-fw"></i> Top Time for Engagement</a>';
    $ct .= '</li>';
    $ct .= ' <li>';
    $ct .= '<a href="date.php"><i class="fa fa-dashboard fa-fw"></i> Post History</a>';
    $ct .= '</li>';

    $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '     </nav>';



//result
 //   $ct .= '<h1 class="page-header">Tables</h1>';



    $ct .= '<div class="panel-body">';
 search_by_day()

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
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';
    // $ct .= '';

    echo $ct;
}


// gen_employee_search();
function brand_stat(){

    $ct.='<div class="text-center">';

    // $ct .= '<div class="panel panel-default">';

    // $ct .= ' <div id="wrapper">';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=stat">'."\n";
      $ct.= "<h2>Brand statistics</h2>";
     $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Brand ID</span>'."\n";
    $ct .= '    <input type="text" value="'.$page_id.'" name="page_id"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Brand Name</span>'."\n";
    $ct .= '    <input type="text" value="'.$name.'" name="name"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Category</span>'."\n";
    $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= ' <li>';
    $ct.= '<a href="www.Facebook.com" class="btn btn-block btn-social btn-facebook">';
    $ct.= '<i class="fa fa-facebook"></i> Go to Facebook </a>';
    ;

   
    $ct .= ' </li>'; 
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
   // $ct .= '<a href="/add_entity.php?type=student&mode=add">Add New brand</a>';

    $ct .= '  </div></form>'."\n";
        $ct .= ' <div>';
 
 //   $ct .= '</div>';
 // $ct.='</div>';
    echo $ct; 
}

function search_by_time(){
    echo "<h2>Total likes on post by Time</h2>";
    //$ct = '<a href="/school/add_entity.php?type=student&mode=add">Add New Student</a>';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=time">'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Brand ID</span>'."\n";
    $ct .= '    <input type="text" value="'.$page_id.'" name="page_id"/>'."\n";
    $ct .= '    <span style="width:70px;" >Brand Name</span>'."\n";
    $ct .= '    <input type="text" value="'.$name.'" name="name"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Category</span>'."\n";
    $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;">Last Name</span>'."\n";
    // $ct .= '    <input type="text" value="'.$lastname.'" name="lastname"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n"; 
    // $ct .= '    <span style="width:70px;" >Year   </span>'."\n";
    // $ct .= '    <input type="text" value="'.$year.'" name="year"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;" >GPA   </span>'."\n";
    // $ct .= '    <input type="text" value="'.$gpa.'" name="gpa"/>'."\n";
    // $ct .= '  </div>'."\n"; 
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
   // $ct .= '<a href="/add_entity.php?type=student&mode=add">Add New brand</a>';
    $ct .= '  </div></form>'."\n";
   

    echo $ct; 
}

function search_by_date(){
    echo "<h2>Total likes on post by Date</h2>";
    //$ct = '<a href="/school/add_entity.php?type=student&mode=add">Add New Student</a>';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=date">'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Brand ID</span>'."\n";
    $ct .= '    <input type="text" value="'.$page_id.'" name="page_id"/>'."\n";
    $ct .= '    <span style="width:70px;" >Brand Name</span>'."\n";
    $ct .= '    <input type="text" value="'.$name.'" name="name"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Category</span>'."\n";
    $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;">Last Name</span>'."\n";
    // $ct .= '    <input type="text" value="'.$lastname.'" name="lastname"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n"; 
    // $ct .= '    <span style="width:70px;" >Year   </span>'."\n";
    // $ct .= '    <input type="text" value="'.$year.'" name="year"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;" >GPA   </span>'."\n";
    // $ct .= '    <input type="text" value="'.$gpa.'" name="gpa"/>'."\n";
    // $ct .= '  </div>'."\n"; 
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
   // $ct .= '<a href="/add_entity.php?type=student&mode=add">Add New brand</a>';
    $ct .= '  </div></form>'."\n";
   

    echo $ct; 
}

function search_by_day(){
    echo "<h2>Total likes on post by Day</h2>";
    //$ct = '<a href="/school/add_entity.php?type=student&mode=add">Add New Student</a>';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=day">'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Brand ID</span>'."\n";
    $ct .= '    <input type="text" value="'.$page_id.'" name="page_id"/>'."\n";
    $ct .= '    <span style="width:70px;" >Brand Name</span>'."\n";
    $ct .= '    <input type="text" value="'.$name.'" name="name"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Category</span>'."\n";
    $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;">Last Name</span>'."\n";
    // $ct .= '    <input type="text" value="'.$lastname.'" name="lastname"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n"; 
    // $ct .= '    <span style="width:70px;" >Year   </span>'."\n";
    // $ct .= '    <input type="text" value="'.$year.'" name="year"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;" >GPA   </span>'."\n";
    // $ct .= '    <input type="text" value="'.$gpa.'" name="gpa"/>'."\n";
    // $ct .= '  </div>'."\n"; 
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
   // $ct .= '<a href="/add_entity.php?type=student&mode=add">Add New brand</a>';
    $ct .= '  </div></form>'."\n";
   

    echo $ct; 
}

function gen_date_search(){
    echo "<h2>Total user engagement ( vs competitors )</h2>";
  //  $ct = '<a href="/search/add_entity.php?type=course&mode=add">Add New Course</a>';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=competitors">'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Date</span>'."\n";
    $ct .= '    <input type="text" value="'.$post_day.'" name="post_day"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span  style="width:70px; " >Brand category</span>'."\n";
    $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;">Academic Year</span>'."\n";
    // $ct .= '    <input type="text" value="'.$academic_year.'" name="academic_year"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;" >Semester </span>'."\n";
    // $ct .= '    <input type="text" value="'.$sem.'" name="sem"/>'."\n";
    // $ct .= '  </div>'."\n";
    // $ct .= '  <div>'."\n";
    // $ct .= '    <span style="width:70px;" >Section</span>'."\n";
    // $ct .= '    <input type="text" value="'.$sec.'" name="sec"/>'."\n";
    // $ct .= '  </div>'."\n";
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
    $ct .= '  </div></form>'."\n";
   
    echo $ct; 
}
// function gen_employee_search(){
//     echo "<h2>Employee Information</h2>";
//     $ct = '<a href="/school/add_entity.php?type=employee&mode=add">Add New Employee</a>';
//     $ct .= '<form method ="post" action="/school/result.php?mode=search&type=employee">'."\n";
//     $ct .= '  <div>'."\n";
//     $ct .= '    <span style="width:70px;" >Employee ID</span>'."\n";
//     $ct .= '    <input type="text" value="'.$eid.'" name=eid/>'."\n";
//     $ct .= '  </div>'."\n";
//     $ct .= '  <div>'."\n";
//     $ct .= '    <span  style="width:70px; " >First Name</span>'."\n";
//     $ct .= '    <input type="text" value="'.$first_name.'" name="first_name"/>'."\n";
//     $ct .= '  </div>'."\n";
//     $ct .= '  <div>'."\n";
//     $ct .= '    <span style="width:70px;">Last Name</span>'."\n";
//     $ct .= '    <input type="text" value="'.$last_name.'" name="last_name"/>'."\n";
//     $ct .= '  </div>'."\n";
//     $ct .= '  <div>'."\n";
//     $ct .= '    <span style="width:70px;" >Contact</span>'."\n";
//     $ct .= '    <input type="text" value="'.$contact.'" name="contact"/>'."\n";
//     $ct .= '  </div>'."\n";
//     $ct .= '  <div>'."\n";
//     $ct .= '    <span style="width:70px;" >Salary</span>'."\n";
//     $ct .= '    <input type="text" value="'.$salary.'" name="salary"/>'."\n";
//     $ct .= '  </div>'."\n";
//     $ct .= '  <div>'."\n";
//     $ct .= '    <span style="width:70px;" >Office Room</span>'."\n";
//     $ct .= '    <input type="text" value="'.$office_room.'" name="office_room"/>'."\n";
//     $ct .= '  </div>'."\n";
//      $ct .= '  <div>'."\n";
//     $ct .= '    <span style="width:70px;" >Office Building</span>'."\n";
//     $ct .= '    <input type="text" value="'.$office_building.'" name="office_building"/>'."\n";
//     $ct .= '  </div>'."\n";
//     $ct .= '  <div >'."\n";
//     $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
//     $ct .= '  </div></form>'."\n";
   
//     echo $ct; 
// }


?>