<ul class="pro col col-12 ">
      <?php
      $i =0;
      foreach ($productos as $p){
        $file = 'https://www.libreriagiorgio.cl/assets/img/productos_antiguos/' .$p['pro_codprod']. '.jpg';
        $file_headers = @get_headers($file); ?>
      <li class="lista-productos col col-xl-3 col-lg-3 col-md-6 col-sm-12">
      <div class="productos col col-12">
        <a href="<?php echo site_url('index.php/Producto?codigo='.urlencode($p['pro_codprod']).'')?>">
          <div class="row justify-content-center">
              <div class="codigo col col-12">
                <h6><?php echo $p['pro_codprod']?></h6>
              </div>
              <div class="proImg col col-12 text-center">
              <?php 
								if (file_exists('img/500x500/'.$p['pro_codprod'] .'-1.jpg')) { ?>
									<img class="img-fluid" src="<?php echo site_url('img/500x500/'.$p['pro_codprod'])?>-1.jpg" class="rounded img-fluid" alt="...">
								<?php }elseif(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found'){ ?>
									<img class="img-fluid" src="http://via.placeholder.com/350" class="rounded img-fluid" alt="...">
								<?php }else{ ?>
									<img class="img-fluid" src="https://www.libreriagiorgio.cl/assets/img/productos_antiguos/<?php echo $p['pro_codprod'] ?>.jpg" class="img-responsive" alt="Responsive image"/>
								<?php } ?>
              </div>
              <div class="proInfo col col-12">
                <div class="row">
                  <div class="proDes col col-12 align-self-center text-center">
                    <h6><?php echo ucfirst(strtolower($p['pro_desc']))?></h6><br>
                  </div>
                  <?php if ($this->config->item('precio')) { ?>
                    <div class="proPrecio col col-12 align-self-center text-center">
                      $<?php echo number_format($p['precio_bajo'],'0',',','.')?> <h6 class="infoPrecio">Precio mayorista - comerciante</h6><br>
                    </div>
                  <?php } ?>
                </div>
              </div>
              </a>
              <div class="col col-12 btnAgregar text-center">
                <button <?php echo"id='$i'" ?> type="button" class="btnModal btn btn-primary" <?php echo"data-target='#modal$i'" ?> data-toggle="modal">
                    Agregar al carro
                </button>
              </div>
          </div>
     
      </div>
      </li>

<!-- Modal -->
  
<div class="modal fade" data-backdrop="false" <?php echo"id='modal$i'" ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog " role="document">  
<div class="modal-content">
  <!-- Modal Header -->
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Agrege Cantidad</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span style="color : red" aria-hidden="true">&times;</span>
    </button>
  </div>
  
  <!-- Modal Body -->
  <div class="modal-body">
    <div class="container-fluid">                 
      <div class="row justify-content-center">
        <div class="col col-12">               
          <table class="rangoModal table table-hover">
            <thead>
              <tr>
                <th>Rango minimo</th>
                <th>Rango maximo</th>
                <th>Precio</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        
        <div class="col col-12">
          <?php 
          $form = array('id' => $i);
          echo form_open('index.php/Carro/agregar',$form);
            $id= array(
              'type'  => 'hidden',
              'name'  => 'cod',
              'id'    => 'cod'.$i,
              'value' => $p['pro_codprod'],
              'class' => 'cod'
            );
            echo form_input($id);
            echo form_hidden('name', $p['pro_desc']); 
            echo form_hidden('price', $p['precio_bajo']);
          ?>       
        </div>

        <div class="col col-3">
          <?php
            echo form_label('Cantidad ', 'username');
          ?>
          <br>
          <?php 
            $cantidad = array('class' => 'cantidad','id' => 'cantidad'.$i); 
            echo form_input('qty', "1" ,$cantidad);
          ?>
        </div> 
        <div class="col col-3">   
                      <h3>$<span <?php echo"id='pU$i'" ?>></span></h3>
          <h3>$<span <?php echo"id='pS$i'" ?>></span></h3>
        </div> 
        <div class="col col-3 text-center"> 
          <?php
            $btnAdd = array(
              'name' => 'button',
              'id' => 'button',
              'value' => 'true',
              'type' => 'submit',
              'class'=>'btn btn-outline-primary',
              'content' => '<i class="fa fa-cart-plus" aria-hidden="true"> Agregar </i>'
            );
            echo form_button($btnAdd);
            echo form_close(); 
          ?>
        </div> 
        <div class="col col-12"> 

        </div> 
      </div>
    </div>     
  </div>

  <!-- Modal Footer -->
  <div class="modal-footer">
    <a href="<?php echo site_url('index.php/Producto?codigo='.urlencode($p['pro_codprod']).'')?>" class="btn btn-outline-info" role="button" aria-pressed="true">Ir al Producto</a>
    <a href="<?php echo site_url('index.php/Carro')?>" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-shopping-cart" aria-hidden="true"> Ir al carro</i></a> 
  </div>

</div>
</div>
</div>

  <?php $i++;
  }
  ?>
</ul>




