<?php

echo '<div class="text-center">';
echo ' <div id="wrapper">';
echo "<h1>   </h1>";
echo "</div>";

 echo '<header role="banner">';
echo '<a href="#"> ';
echo '<img src="blogo.png" alt="Waffle Inc." /> '; 

echo '</a> ';
echo '</header>';
echo '<div>';
head();
body();

function head(){
    $ct .= '<head>';
    $ct .= '<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">';
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
//external js
    $ct .= '<script type="text/javascript" src="file.js"></script>';
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
    $ct .= '<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home </a>';
    $ct .= '</li>';


    $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '      </div>';
    $ct .= '     </nav>';



//result
 //   $ct .= '<h1 class="page-header">Tables</h1>';



    $ct .= '<div class="panel-body">';
    brand_stat(); 
    $ct .= ' </div></form>';
    $ct .= '<div class="panel-body">';
    search_by_time(); 
    $ct .= ' </div></form>';
    $ct .= '<div class="panel-body">';
    search_by_date(); 
    $ct .= ' </div></form>';
       $ct .= '<div class="panel-body">';
    search_by_day(); 
    $ct .= ' </div></form>';
       $ct .= '<div class="panel-body">';
    gen_date_search(); 
    $ct .= ' </div></form>';
          $ct .= '<div class="panel-body">';
    add_new_page(); 
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
    $ct .= ' <select name="category">'."\n";
   
       $ct .= '   <option value="" disabled="disabled" selected="selected">Please select </option>'."\n";
    $ct .= '  <option type="text" value="car">car</option>'."\n";
    $ct .= '  <option type="text" value="airline">airline</option>'."\n";
    $ct .= '  <option type="text" value="alcohol">alcohol</option>'."\n";
    $ct .= '  <option type="text" value="beer">beer</option>'."\n";
    $ct .= '  <option type="text" value="brandy">brandy</option>'."\n";
    $ct .= '  <option type="text" value="champagne">champagne</option>'."\n";
    $ct .= '  <option type="text" value="gin"">gin</option>'."\n";
    $ct .= '  <option type="text" value="rum">rum</option>'."\n";
    $ct .= '  <option type="text" value="vodka">vodka</option>'."\n";
    $ct .= '  <option type="text" value="tequilla">tequilla</option>'."\n";
    $ct .= '  <option type="text" value="whiskey">whiskey</option>'."\n";
    $ct .= '  <option type="text" value="baby-food">baby food</option>'."\n";
    $ct .= '  <option type="text" value="bakery">bakery</option>'."\n";
    $ct .= '  <option type="text" value="bath-product">bath product</option>'."\n";
    $ct .= '  <option type="text" value="beverage">beverage</option>'."\n";
    $ct .= '  <option type="text" value="candy">candy</option>'."\n";
    $ct .= '  <option type="text" value="chips">chips</option>'."\n";
    $ct .= '  <option type="text" value="chocolate">chocolate</option>'."\n";
    $ct .= '  <option type="text" value="clothing">clothing</option>'."\n";
    $ct .= '  <option type="text" value="cosmetics">cosmetics</option>'."\n";
    $ct .= '  <option type="text" value="detergent">detergent</option>'."\n";
    $ct .= '  <option type="text" value="headphones">headphones</option>'."\n";
    $ct .= '  <option type="text" value="energy_drink">energy drink</option>'."\n";
    $ct .= '  <option type="text" value="fast-food">fast food</option>'."\n";
    $ct .= '  <option type="text" value="mobile-phone">mobile phone</option>'."\n";
    $ct .= '  <option type="text" value="watch">watch</option>'."\n";
     //  $ct .= '  <option type="text" value="'.$category.'"> watch</option>'."\n";

    $ct .= ' </select>'."\n";
   // $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
 // $ct .= '   <input type="text" value="'.$category.'" name="category" style="margin-left: -203px;" width: 200px; height: 1.2em; border: 0;" />'."\n";

    $ct .= '  </div>'."\n";
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
    $ct .= '  </div></form>'."\n";
    $ct .= ' <div>';
    echo $ct; 
}

function search_by_time(){
   $ct.='<div class="text-center">';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=time">'."\n";
    $ct.= "<h2>Top Time for Engagement</h2>";
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
    $ct .= ' <select name="category">'."\n";
   
         $ct .= '   <option value="" disabled="disabled" selected="selected">Please select </option>'."\n";
    $ct .= '  <option type="text" value="car">car</option>'."\n";
    $ct .= '  <option type="text" value="airline">airline</option>'."\n";
    $ct .= '  <option type="text" value="alcohol">alcohol</option>'."\n";
    $ct .= '  <option type="text" value="beer">beer</option>'."\n";
    $ct .= '  <option type="text" value="brandy">brandy</option>'."\n";
    $ct .= '  <option type="text" value="champagne">champagne</option>'."\n";
    $ct .= '  <option type="text" value="gin"">gin</option>'."\n";
    $ct .= '  <option type="text" value="rum">rum</option>'."\n";
    $ct .= '  <option type="text" value="vodka">vodka</option>'."\n";
    $ct .= '  <option type="text" value="tequilla">tequilla</option>'."\n";
    $ct .= '  <option type="text" value="whiskey">whiskey</option>'."\n";
    $ct .= '  <option type="text" value="baby-food">baby food</option>'."\n";
    $ct .= '  <option type="text" value="bakery">bakery</option>'."\n";
    $ct .= '  <option type="text" value="bath-product">bath product</option>'."\n";
    $ct .= '  <option type="text" value="beverage">beverage</option>'."\n";
    $ct .= '  <option type="text" value="candy">candy</option>'."\n";
    $ct .= '  <option type="text" value="chips">chips</option>'."\n";
    $ct .= '  <option type="text" value="chocolate">chocolate</option>'."\n";
    $ct .= '  <option type="text" value="clothing">clothing</option>'."\n";
    $ct .= '  <option type="text" value="cosmetics">cosmetics</option>'."\n";
    $ct .= '  <option type="text" value="detergent">detergent</option>'."\n";
    $ct .= '  <option type="text" value="headphones">headphones</option>'."\n";
    $ct .= '  <option type="text" value="energy_drink">energy drink</option>'."\n";
    $ct .= '  <option type="text" value="fast-food">fast food</option>'."\n";
    $ct .= '  <option type="text" value="mobile-phone">mobile phone</option>'."\n";
    $ct .= '  <option type="text" value="watch">watch</option>'."\n";
    $ct .= ' </select>'."\n";
        $ct .= '  </div>'."\n";
    // $ct .= '  <div >'."\n";
    //  $ct .= '    <span style="width:70px;" > Other (please specify)</span>'."\n";
    // $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    // $ct .= '  </div>'."\n";
 
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
    $ct .= '  </div></form>'."\n";
        $ct .= ' <div>';

    echo $ct; 
}

function search_by_date(){
      $ct.='<div class="text-center">';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=date">'."\n";
    $ct.= "<h2>Top Date for Engagement</h2>";
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
    $ct .= ' <select name="category">'."\n";
   
    $ct .= '   <option value="" disabled="disabled" selected="selected">Please select </option>'."\n";
    $ct .= '  <option type="text" value="car">car</option>'."\n";
    $ct .= '  <option type="text" value="airline">airline</option>'."\n";
    $ct .= '  <option type="text" value="alcohol">alcohol</option>'."\n";
    $ct .= '  <option type="text" value="beer">beer</option>'."\n";
    $ct .= '  <option type="text" value="brandy">brandy</option>'."\n";
    $ct .= '  <option type="text" value="champagne">champagne</option>'."\n";
    $ct .= '  <option type="text" value="gin"">gin</option>'."\n";
    $ct .= '  <option type="text" value="rum">rum</option>'."\n";
    $ct .= '  <option type="text" value="vodka">vodka</option>'."\n";
    $ct .= '  <option type="text" value="tequilla">tequilla</option>'."\n";
    $ct .= '  <option type="text" value="whiskey">whiskey</option>'."\n";
    $ct .= '  <option type="text" value="baby-food">baby food</option>'."\n";
    $ct .= '  <option type="text" value="bakery">bakery</option>'."\n";
    $ct .= '  <option type="text" value="bath-product">bath product</option>'."\n";
    $ct .= '  <option type="text" value="beverage">beverage</option>'."\n";
    $ct .= '  <option type="text" value="candy">candy</option>'."\n";
    $ct .= '  <option type="text" value="chips">chips</option>'."\n";
    $ct .= '  <option type="text" value="chocolate">chocolate</option>'."\n";
    $ct .= '  <option type="text" value="clothing">clothing</option>'."\n";
    $ct .= '  <option type="text" value="cosmetics">cosmetics</option>'."\n";
    $ct .= '  <option type="text" value="detergent">detergent</option>'."\n";
    $ct .= '  <option type="text" value="headphones">headphones</option>'."\n";
    $ct .= '  <option type="text" value="energy_drink">energy drink</option>'."\n";
    $ct .= '  <option type="text" value="fast-food">fast food</option>'."\n";
    $ct .= '  <option type="text" value="mobile-phone">mobile phone</option>'."\n";
    $ct .= '  <option type="text" value="watch">watch</option>'."\n";
    $ct .= ' </select>'."\n";
        $ct .= '  </div>'."\n";
    // $ct .= '  <div >'."\n";
    //  $ct .= '    <span style="width:70px;" > Other (please specify)</span>'."\n";
    // $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    // $ct .= '  </div>'."\n";
   
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
    $ct .= '  </div></form>'."\n";
        $ct .= ' <div>';
    echo $ct; 
}

function search_by_day(){
     $ct.='<div class="text-center">';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=day">'."\n";
    $ct.= "<h2>Top Day for Engagement</h2>";
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
    $ct .= ' <select name="category">'."\n";
   
  $ct .= '   <option value="" disabled="disabled" selected="selected">Please select </option>'."\n";
    $ct .= '  <option type="text" value="car">car</option>'."\n";
    $ct .= '  <option type="text" value="airline">airline</option>'."\n";
    $ct .= '  <option type="text" value="alcohol">alcohol</option>'."\n";
    $ct .= '  <option type="text" value="beer">beer</option>'."\n";
    $ct .= '  <option type="text" value="brandy">brandy</option>'."\n";
    $ct .= '  <option type="text" value="champagne">champagne</option>'."\n";
    $ct .= '  <option type="text" value="gin"">gin</option>'."\n";
    $ct .= '  <option type="text" value="rum">rum</option>'."\n";
    $ct .= '  <option type="text" value="vodka">vodka</option>'."\n";
    $ct .= '  <option type="text" value="tequilla">tequilla</option>'."\n";
    $ct .= '  <option type="text" value="whiskey">whiskey</option>'."\n";
    $ct .= '  <option type="text" value="baby-food">baby food</option>'."\n";
    $ct .= '  <option type="text" value="bakery">bakery</option>'."\n";
    $ct .= '  <option type="text" value="bath-product">bath product</option>'."\n";
    $ct .= '  <option type="text" value="beverage">beverage</option>'."\n";
    $ct .= '  <option type="text" value="candy">candy</option>'."\n";
    $ct .= '  <option type="text" value="chips">chips</option>'."\n";
    $ct .= '  <option type="text" value="chocolate">chocolate</option>'."\n";
    $ct .= '  <option type="text" value="clothing">clothing</option>'."\n";
    $ct .= '  <option type="text" value="cosmetics">cosmetics</option>'."\n";
    $ct .= '  <option type="text" value="detergent">detergent</option>'."\n";
    $ct .= '  <option type="text" value="headphones">headphones</option>'."\n";
    $ct .= '  <option type="text" value="energy_drink">energy drink</option>'."\n";
    $ct .= '  <option type="text" value="fast-food">fast food</option>'."\n";
    $ct .= '  <option type="text" value="mobile-phone">mobile phone</option>'."\n";
    $ct .= '  <option type="text" value="watch">watch</option>'."\n";
    $ct .= ' </select>'."\n";
        $ct .= '  </div>'."\n";
    // $ct .= '  <div >'."\n";
    //  $ct .= '    <span style="width:70px;" > Other (please specify)</span>'."\n";
    // $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    // $ct .= '  </div>'."\n";

    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
    $ct .= '  </div></form>'."\n";
        $ct .= ' <div>';
    echo $ct; 
}

function gen_date_search(){
    $ct.='<div class="text-center">';
    $ct .= '<form method ="post" action="/testgraph/result.php?mode=search&type=engage">'."\n";
    $ct.= "<h2>Total User Engagement</h2>";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Post Day</span>'."\n";
    $ct .= '    <input type="text" value="'.$post_day.'" name="post_day"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Brand Category</span>'."\n";
    $ct .= ' <select name="category">'."\n";
   
    $ct .= '   <option value="" disabled="disabled" selected="selected">Please select </option>'."\n";
    $ct .= '  <option type="text" value="car">car</option>'."\n";
    $ct .= '  <option type="text" value="airline">airline</option>'."\n";
    $ct .= '  <option type="text" value="alcohol">alcohol</option>'."\n";
    $ct .= '  <option type="text" value="beer">beer</option>'."\n";
    $ct .= '  <option type="text" value="brandy">brandy</option>'."\n";
    $ct .= '  <option type="text" value="champagne">champagne</option>'."\n";
    $ct .= '  <option type="text" value="gin"">gin</option>'."\n";
    $ct .= '  <option type="text" value="rum">rum</option>'."\n";
    $ct .= '  <option type="text" value="vodka">vodka</option>'."\n";
    $ct .= '  <option type="text" value="tequilla">tequilla</option>'."\n";
    $ct .= '  <option type="text" value="whiskey">whiskey</option>'."\n";
    $ct .= '  <option type="text" value="baby-food">baby food</option>'."\n";
    $ct .= '  <option type="text" value="bakery">bakery</option>'."\n";
    $ct .= '  <option type="text" value="bath-product">bath product</option>'."\n";
    $ct .= '  <option type="text" value="beverage">beverage</option>'."\n";
    $ct .= '  <option type="text" value="candy">candy</option>'."\n";
    $ct .= '  <option type="text" value="chips">chips</option>'."\n";
    $ct .= '  <option type="text" value="chocolate">chocolate</option>'."\n";
    $ct .= '  <option type="text" value="clothing">clothing</option>'."\n";
    $ct .= '  <option type="text" value="cosmetics">cosmetics</option>'."\n";
    $ct .= '  <option type="text" value="detergent">detergent</option>'."\n";
    $ct .= '  <option type="text" value="headphones">headphones</option>'."\n";
    $ct .= '  <option type="text" value="energy_drink">energy drink</option>'."\n";
    $ct .= '  <option type="text" value="fast-food">fast food</option>'."\n";
    $ct .= '  <option type="text" value="mobile-phone">mobile phone</option>'."\n";
    $ct .= '  <option type="text" value="watch">watch</option>'."\n";
    $ct .= ' </select>'."\n";
        $ct .= '  </div>'."\n";
    $ct .= '  <div >'."\n";
     $ct .= '    <span style="width:70px;" > Other (please specify)</span>'."\n";
    $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    $ct .= '  </div>'."\n";
  
    // $ct .= ' <li>';
    // $ct.= '<a href="http://www.facebook.com" class="btn btn-block btn-social btn-facebook">';
    // $ct.= '<i class="fa fa-facebook"></i> Go to Facebook </a>';
    // $ct .= ' </li>'; 
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
    $ct .= '  </div></form>'."\n";
        $ct .= ' <div>';
    echo $ct; 

}

function add_new_page(){
    $ct.='<div class="text-center">';
    $ct .= '<form action="/testgraph/add_DB.html" method="GET">'."\n";
    $ct.= '<h2>Add New Page</h2>';
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Page ID</span>'."\n";
    $ct .= '    <input type="text" value="'.$page_id.'" name="page_id"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= '  <div>'."\n";
    $ct .= '    <span style="width:70px;" >Brand Category</span>'."\n";
    $ct .= '    <input type="text" value="'.$category.'" name="category"/>'."\n";
    $ct .= '  </div>'."\n";
    $ct .= ' <li>';
    $ct.= '<a href="http://www.facebook.com" class="btn btn-block btn-social btn-facebook">';
    $ct.= '<i class="fa fa-facebook"></i> Go to Facebook </a>';
    $ct .= ' </li>'; 
    $ct .= '  <div >'."\n";
    $ct .= '    <input type="submit" value="Search" name="search_button"/>'."\n";
    $ct .= '  </div></form>'."\n";
    $ct .= '</form>';
    $ct .= ' <div>';
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