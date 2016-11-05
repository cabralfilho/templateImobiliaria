<p>
<section class="col-md-8">
	<div class="row">
  <div class="col-xs-6 col-md-3">
    
      <?php 
	  		
	  		if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
				?>
                	<div class="row">
					  <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="<?php $row['caminho_foto'].$row['foto'];?>" alt="<?php $row['nome'];?>">
                            </a>
                       </div>
                          ...
					</div>
					<?php 
					}
				}
	  ?>
    
  </div>
  Aqui
</div>
</section>
</p>