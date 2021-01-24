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
            <div class="window__nav__left">
              <input type="text" placeholder="&#xf002; Search for a name" />
            </div>
            <div class="window__nav__right">
              <div class="ordering">
                <table>
                  <tr>
                    <td>Sort by</td>
                    <td>
                      <select name="product" id="product">
                        <option>Name</option>
                        <option id="TLX">TLX</option>
                        <option id="FLX">FLX</option>
                        <option id="MLX">MLX</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="window__main">


          <?php include 'data.php';
       
                for($i=0;$i<count($data);$i++){
                  $image=array($data[$i]['image']);
                  $name=array($data[$i]['name']);
                  $birthday=array($data[$i]['birthday']);
                  echo '<div class="card">';
                
                foreach($image  as $k  => $v){
                  echo '<img class="card-img-top" src="'.$v.'" alt="Sample Title">';
                }
                foreach($name  as $k  => $v){
                  echo '<h4>'.$v.'</h4>';
                }  
                foreach($birthday as $k  => $v){
                  echo '<p>'.$v.'</p>'; 
                  echo '<button><a href="traineePage.php?id='.$i.'" class="btn prof">Profile </a></button';
                  echo '</div></div>';
                } 
                }
         ?>





          </div>
        </div>
      </main>
    </div>
  </body>
</html>
