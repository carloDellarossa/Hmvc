<!-- 
<ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-shopping-cart" aria-hidden="true"> Carro de compra </i>&nbsp;<span class="badge"><div style="color : #0275d8;"><?php echo $this->cart->total_items(); ?></div></span>
                        </a>
                          <ul class="dropdown-menu animated slideInRight scroll">
                            <div class="lista-carro" >
                              
    <div class="contenedor-producto-carro container">

    </div>
                            </div>
                          </ul>
                        </li>
                </ul>
 -->



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Caro de compra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
        if($this->cart->total_items() != 0){
            foreach ($carro as $p) {
    ?>

                
                    <div class="producto-carro-info">
                        <div class="row">
                            <div class="nombre col col-12">
                                <?php echo $p['name']; ?>
                            </div>
                            <?php if ($this->config->item('precio')) { ?>
                            <div class="precio col col-6">
                                Precio <br>$ <?php echo number_format($p['price'],'0',',','.')?>
                            </div>
                            <?php } ?>
                            <div class="cantidad col col-6">
                                Cantidad  <?php echo $p['qty']; ?>
                                <a href="<?php echo site_url('index.php/Carro/remove/'.$p['rowid'].'') ?>"> <i class="fa fa-trash-o" aria-hidden="true"></i>X<span class="hidden-tablet"></span></a>
                            </div>
                        </div>
                    </div>
                
            <?php
            } 
            ?>
            <div class="carroextras">
           
                <div class="info-carro text-right">
                    <div class="info-carro-total">
                        <br>
                        <span>Total:</span>
                        <span>$ <?php echo number_format($this->cart->total(),'0',',','.'); ?></span>
                    </div>
                </div>

                <div class="ir-a-carro">
                    <h4> <a href="<?php echo site_url('index.php/Carro');?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Ir al carro de compra</a>
                </div>

                <div>
                    <h4><i class="glyphicon glyphicon-ok"></i><?php echo anchor('Orden', 'Finalizar la compra') ?></h4>
                </div>
     
            </div>
        <?php 
        }else{
        ?>
           
                <h2>No hay productos en el carro<h2>
            
        <?php 
        } 
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Seguir comprando</button>
        <button type="button" class="btn btn-primary">Pagar</button>
      </div>
    </div>
  </div>
</div>