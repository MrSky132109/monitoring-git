<?php

require_once "core/init.php";

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
  include('koneksi.php');
  $data_pengunjung = mysqli_query($con,"SELECT bulan FROM jumlah GROUP BY bulan");
  $penjualan = mysqli_query($con,"SELECT pengunjung FROM jumlah GROUP BY bulan");
?>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.header {
  background-image : url("https://tse4.mm.bing.net/th?id=OIP.V3aOAgyEzdPjx6Puv-kKRAHaEK&pid=Api&P=0");
  background-size : cover ;
  padding: 10px;
  text-align: center;
  justify-content : center ;
  color : white;
}
 
@keyframes shine {
  from {
    background-position : center 0 ;
  }
  to {
    background-position : center 200%;
  }
}

.h1 {
  margin : 0;
  font-size: 30vh;
  letter-spacing : 1vw;
  color : white ;
  background-size: auto 200%;
  -webkit-background-clip : text ;
  -webkit-fill-text-color : transparent;
  animation : shine 8s linear infinite;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  text-align : center ;

}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.column {
  float: left;
  width: 33.33%;
  padding: 18px;
 background-size : 100% ;
  
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="header">
  <h1>MONITORING DATA</h1>
  <p>Selamat datang, <?php echo ucwords($_SESSION['username'])?></p>
</div>

<div class="topnav">
  <a href="gallery.html">Galeri</a>
  <a href="about.php">About</a>
  <a href="logout.php">Logout</a>
</div>

<div class="row">
  <div class="column"><div>
  <canvas id="youChart"></canvas></div>
  <script>
  const ctx4 = document.getElementById('youChart');
  new Chart(ctx4, {
    type: 'line',
    data: {
      labels: [<?php while($row = mysqli_fetch_array($data_pengunjung)) {echo '"'.$row['bulan'].'",';}?>],
      datasets: [{
        label: 'penjualan barang',
        data:  [<?php while($row = mysqli_fetch_array($penjualan)) {echo '"'.$row['pengunjung'].'",';}?>],
        backgroundColor : 'rgba(72,180,235)',
        borderColor : 'rgba(23,75,207)',
        borderWidth : 1,
       fill : true,
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
  </div>
  
  <div class="row">
  <div class="column">
  <div>
    <canvas id="chart1"></canvas>
  </div>
<script>
const labels = ["1am", "2am", "3am", "4am", "5am", "8am"];
var data_3 = {
  labels: labels,
  datasets: [{
    label: 'Cpu Usage',
    data: [20, 15, 25, 30, 10, 27],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};

var ctx1 = document.getElementById("chart1").getContext("2d");
var myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: data_3,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });


</script>
</div>

<div class="row">
  <div class="column">
  <div>
    <canvas id="chart2"></canvas>
  </div>
    <script>
  var data2 = {
  labels: ['1PM', '2PM', '3PM', '4PM' , '4PM'],
  datasets: [{
    label: 'RAM Usage',
    data: [20, 10, 40, 30,60],
    backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgba(54, 162, 235, 1)',
    borderWidth: 1,
    fill : true,
  }]
};
var ctx2 = document.getElementById("chart2").getContext("2d");
var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: data2,
    options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
});
</script>
  </div>
</body>
</html>


