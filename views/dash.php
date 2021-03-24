<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><h6 class="text-center card-title m-0 p-0 animate__animated animate__rubberBand" style="font-weight: bold;font-family: 'Arvo', serif;"><span style="color:yellow">Book</span><span style="color:teal">Maker</span></h6></a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" style="color: #fff;" href="#"><i class="fa fa-home"></i> Principal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #fff;" href="#"> <i class="fas fa-money-bill-wave"></i> Apostas </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #fff;" href="#"> <i class="fas fa-trophy"></i> Ranking </a>
      </li>
    </ul>
  </div>
</div>

</nav>

<div class="container-fluid"> 
 <div class="row">

 <div class="col-sm-12 col-md-3 col-lg-3" style="background-color: white;min-height:100vh;">
  <div class="col-sm-12 col-md-3 col-lg-3 mt-5 d-flex justify-content-center" style="min-height:30vh;min-width:100%;">
    <div class="card border-0 text-center" style="background-color: none;">
    <img src="assets/imgs/alan_cesar.jpg" class="card-img-top" alt="" style="border-radius: 50%;">
    <div class="card-body">
        <h4 class="card-title">Alan Cesar</h4>
        <h6 class="card-subtitle">ID: 00000000</h6>
    </div>
    </div>
 </div>
 <div class="d-flex align-items-center justify-content-center">
 <ul class="nav flex-column mt-2 mb-5">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Disabled</a>
  </li>
</ul>
 </div>
 </div>
 <div class="col-sm-12 col-md-9 col-lg-9" style="background-color: #ccc;min-height:100vh;">
  <div class="container">
      <div class="row mt-5 d-flex justify-content-center">
         <div class="col-sm-12 col-md-7 col-lg-7">
             <div class="card p-1">
                 <div class="card-body">
                 <h4 class="card-title">Campeonatos <?php echo  $camp[0]->edicao_atual->temporada;?></h4> <hr class="bg-info">
                 <ul class="nav flex-column">
                     <?php for($x=0;$x<count($camp);$x++):?>
                      <?php if($camp[$x]->status === 'andamento'):?>
                         <li>
                            <p><?php echo $camp[$x]->nome . "<span class='' style='font-weight:bold;'> (". $camp[$x]->status.")</span>";?> <span class="ml-2"><img src="<?php echo $camp[$x]->logo ;?>" alt="" width="30" height="30"></span></p> 
                         </li>
                     <?php endif;?> 
                     <?php endfor;?>
                 </ul>
                 </div>
             </div>
         </div>
         
         <div class="col-sm-12 col-md-5 col-lg-5">
         <div class="card p-1">
            <div class="card-body">
            <h4 class="card-title">Tabela Brasileiro 2020</h4> <hr class="bg-info">
             
            <ul class="nav flex-column mt-2 mb-5">
            <?php for($i=0;$i<count($table);$i++):?>
                <li>
                <span style="border-bottom: 1px solid #CDCDC1;"><?php echo $table[$i]['posicao'] . " - <img src=".$table[$i]['time']['escudo']." width='20' height='20'> ".$table[$i]['time']['nome_popular']."<span class='d-flex justify-content-end'>".$table[$i]['pontos']."pts </span></span>";?>
                </li>
            <?php endfor;?>

            </ul>
             </div>
             </div>
         </div>
      </div>

      <div class="row">
      <?php for($i=0;$i<count($camp);$i++):?>
      <?php if($camp[$i]->status === 'andamento'):?>  
      <div class="col-sm-12 col-md-12 col-lg-3">
         <a href="" style="text-decoration: none;">
         <div class="card text-center m-1 p-4">
           <img src="<?php echo $camp[$i]->logo ;?>" alt="" class="card-img-top">
           <div class="card-body">
              <h5 class="card-title" style="font-size: 12pt;"><?php echo $camp[$i]->nome;?></h5>
           </div>
         </div>
         </a>
      </div>
      <?php endif;?>
      <?php endfor;?>
      </div>
  </div>
 </div>
</div>
</div>
