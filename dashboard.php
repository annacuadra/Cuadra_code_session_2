<?php
    require('config/config.php');
    require('config/db.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Top 5 Expensive Products</h4>
                                <p class="category">Products</p>
                            </div>
                            <div class="content">
                            <canvas id="chart01"></canvas>

                            <?php
                                $query01= "SELECT ProductName AS 'Product Name', UnitPrice AS 'Price' FROM northwind.products ORDER BY UnitPrice DESC LIMIT 5";
                                $result01= mysqli_query($conn, $query01);
                                    if(mysqli_num_rows($result01) > 0){
                                        $Count_Order = array();
                                        $label_chart = array();
                                            while ($row = mysqli_fetch_array($result01)){
                                                $Count_Order[] = $row['Price'];
                                                $label_chart[] = $row['Product Name'];
                                            }
                                            mysqli_free_result($result01);
                                            // mysqli_close($conn);
                                    }else{
                                        echo "No records matching your query were found.";
                                    }     
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Number of Assisted Orders by every Employee</h4>
                            </div>
                            <div class="content">
                            <canvas id="chart02"></canvas>
                            <?php
                                $query02= "SELECT concat(LastName, ', ', FirstName) as 'Employee Name', count(orders.OrderID) as 'Order Count' FROM northwind.employees, orders 
                                where northwind.employees.EmployeeID = northwind.orders.EmployeeID group by concat(LastName, ' ', FirstName)";
                                $result02= mysqli_query($conn, $query02);
                                if(mysqli_num_rows($result02) > 0){
                                $Count_Orders02 = array();
                                $label_chart02 = array();
                                while ($row = mysqli_fetch_array($result02)){
                                $Count_Order02[] = $row['Order Count'];
                                $label_chart02[] = $row['Employee Name'];
                                }
                                mysqli_free_result($result02);
                               // mysqli_close($conn);
                                }else{
                                echo "No records matching your query were found.";
                                }     
                                ?>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Customers' total count of orders with more than 15 orders</h4>
                            </div>
                            <div class="content">
                            <canvas id="chart03"></canvas>
                            <?php
                                $query03= "SELECT CustomerID, COUNT(OrderID) AS 'Order Count' FROM orders GROUP BY CustomerID HAVING COUNT(OrderID) >= 15";
                                $result03= mysqli_query($conn, $query03);
                                if(mysqli_num_rows($result03) > 0){
                                    $Count_Orders03 = array();
                                    $label_chart03 = array();
                                        while ($row = mysqli_fetch_array($result03)){
                                            $Count_Order03[] = $row['Order Count'];
                                            $label_chart03[] = $row['CustomerID'];
                                        }
                                    mysqli_free_result($result03);
                                    // mysqli_close($conn);
                                }else{
                                    echo "No records matching your query were found.";
                                }     
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Number of Products in Each Category</h4>
                            </div>
                            <div class="content">
                            <canvas id="chart04"></canvas>
                            <?php
                                $query04= "SELECT categories.CategoryName AS 'Category',COUNT(products.ProductName) AS 'Number of Products' FROM northwind.categories, northwind.products WHERE products.CategoryID = categories.CategoryID GROUP BY products.CategoryID;;";
                                $result04= mysqli_query($conn, $query04);
                                if(mysqli_num_rows($result04) > 0){
                                    $Count_Orders04 = array();
                                    $label_chart04 = array();
                                        while ($row = mysqli_fetch_array($result04)){
                                            $Count_Order04[] = $row['Number of Products'];
                                            $label_chart04[] = $row['Category'];
                                        }
                                    mysqli_free_result($result04);
                                    // mysqli_close($conn);
                                }else{
                                    echo "No records matching your query were found.";
                                }     
                            ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"> </script>

<script>
// <!-- setup block -->
const Count_Order = <?php echo json_encode($Count_Order); ?>;
const label_chart = <?php echo json_encode($label_chart); ?>;
const data1 = {
labels: label_chart,
datasets: [{
label: 'Price',
data: Count_Order,
backgroundColor: [ '#FFB9B9', '#FFDDD2', '#FFACC7', '#FF8DC7', '#FFD6EC' ],
hoverOffset: 4
}]
};
// <!-- config block -->
const config = {
    type: 'bar',
        data: data1,
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
};
// <!-- render block -->
const chart01 = new Chart(
document.getElementById('chart01'),
config
);

</script>

<script>
// <!-- setup block -->
const Count_Order02 = <?php echo json_encode($Count_Order02); ?>;
const label_chart02 = <?php echo json_encode($label_chart02); ?>;
const data2 = {
labels: label_chart02,
datasets: [{
label: 'Number of Assisted Orders',
data: Count_Order02,
backgroundColor: [ '#937DC2', '#C689C6', '#E8A0BF', '#FCC5C0', '#DFBB9D', '#F7E2D6', '#9DD6DF', '#A084CF', '#C2DED1' ],
hoverOffset: 4
}]
};
// <!-- config block -->
const config2 = {
type: 'bar',
data: data2,

options: {
    indexAxis: 'y',
    scales: {
        y: {
            beginAtZero: true
        }
    }
}
};
// <!-- render block -->
const chart02 = new Chart(
document.getElementById('chart02'),
config2
);
</script>

<script>
// <!-- setup block -->
const Count_Order03 = <?php echo json_encode($Count_Order03); ?>;
const label_chart03 = <?php echo json_encode($label_chart03); ?>;
const data3 = {
labels: label_chart03,
datasets: [{
label: 'Number of Assisted Orders by every Employee',
data: Count_Order03,
backgroundColor: [ '#FFB9B9', '#FFDDD2', '#FFACC7', '#FF8DC7', '#FFD6EC', '#937DC2', '#C689C6', '#E8A0BF', '#FCC5C0', '#DFBB9D', '#F7E2D6', '#9DD6DF', '#A084CF'],
hoverOffset: 4
}]
};
// <!-- config block -->
const config3 = {
    type: 'doughnut',
        data: data3,
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
};
// <!-- render block -->
const chart03 = new Chart(
document.getElementById('chart03'),
config3
);
</script>

<script>
// <!-- setup block -->
const Count_Order04 = <?php echo json_encode($Count_Order04); ?>;
const label_chart04 = <?php echo json_encode($label_chart04); ?>;
const data4 = {
labels: label_chart04,
datasets: [{
label: 'Number of Assisted Orders by every Employee',
data: Count_Order04,
backgroundColor: [ '#495371', '#74959A', '#98B4AA', '#5F7464', '#243D25', '#417D7A', '#1D5C63', '#1A3C40'],
hoverOffset: 4
}]
};
// <!-- config block -->
const config4 = {
    type: 'pie',
        data: data4,
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
};
// <!-- render block -->
const chart04 = new Chart(
document.getElementById('chart04'),
config4
);
</script>


    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
