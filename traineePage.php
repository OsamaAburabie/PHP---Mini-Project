<?php include 'data.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="vv.css" />
    <link rel="stylesheet" href="./fontawesome/css/all.min.css" />
    <script
      src="https://kit.fontawesome.com/c20e40a942.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="sidebar__icons">
          <i class="fas fa-clock"></i>
          <i class="fas fa-address-card"></i>
          <i class="fab fa-staylinked"></i>
          <i class="fal fa-draw-circle"></i>
          <i class="fal fa-calendar-check"></i>
          <i class="fas fa-user-alt"></i>
          <i class="fal fa-balance-scale-left"></i>
        </div>
      </div>
      <nav>
        <div class="nav__logo">
          <h1>Students</h1>
        </div>
        <div class="nav__mid">
          <div><a href="index.php">Home</a></div>
          <div><a href="dashboard.php">Dashboard</a></div>
          <div><a href="attendance.php">Attendance</a></div>
        </div>
        <div class="nav__icons">
          <i class="fal fa-search"></i>
          <i class="fal fa-bell"></i>
          <i class="fas fa-user-alt"></i>
        </div>
      </nav>
      <main>
        <div class="window">
          <div class="window__nav">
            <h1>Trainees Page</h1>
          </div>
          <div class="window__main">


          <?php 
          

          $id = $_GET['id'];
          echo '<div class="p_card">';
          echo '<img class="card-img-top" src="'.$data[$id]['image'].'" alt="Sample Title">';
          echo '<h4>'.$data[$id]['name'].'</h4>';
          echo '<p>'.$data[$id]['birthday'].'</p>'; 
          
          for($j=0;$j<count($data[$id]['projects']);$j++){
            if($data[$id]['projects'][$j]['is_compleated']=='yes'|| $data[$id]['projects'][$j]['is_compleated']=='yes')
            {  
              $project=array($data[$id]['projects'][$j]['project_name']);
                foreach($project as $k  => $v){
                echo '<h4> Projects: '.$v.'</h4>';
                }
               }
           else{
             echo '<h4></h4>';
           }
            }
          
          
          
          
          ?>





          </div>
        </div>
      </main>
    </div>
  </body>
</html>
