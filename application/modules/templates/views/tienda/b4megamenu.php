<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/b4megamenu.css">
<title>Bootstrap 4 mega menu</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
        $keys = array_keys($categorias);
 
        for($i = 0; $i < count($categorias); $i++) {

        ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $keys[$i] ;?>
          </a>
          <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
              <div class="row">
                <div class="col-md-2">
                   <img src="img/flower1.jpg" alt="flower" class="img-fluid"> 
                  <h4 style="color: orangered;"><?php echo $keys[$i] ;?></h4>
                  <p>Articulos de <?php echo $keys[$i] ;?></p>
                </div>
                
                <?php
                  foreach($categorias[$keys[$i]] as $k => $value) {
                    
                ?>
                
                <div class="col-md-2">
                  <p><h6><strong class="sub-menu-heading"><?php echo $k ;?></h6></strong></p>
                  <?php
                        foreach ($value as $s => $p){ 
                        
                  ?>
                  <p><h6><a href="#"><?php echo $p;?></a></h6></p>
                  <?php
                        }
                  ?>
                </div>
                
                <?php
                  }
                ?>
              </div> 
          </div>
        </li>
      <?php
       }
      ?>

    </ul>
  </div>

</nav>
  
<div>


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>


