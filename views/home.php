
<div class="container">

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
   
    <form action="" method="POST" class="d-flex justify-content-end mt-5">
           <div class="form-group col-4">
           <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="d-flex align-items-center mr-2"><i class="fas fa-search"></i></span>
  </div>
  <input style="background-color: #fff;" type="text" name="pesq" id="pesq" class="form-control form-control-sm" placeholder="Pesquisar usuário">
  </div>    
            </div>
       </form>
    <table class="table table-striped table-hover text-center">
       <thead>
           <tr>
               <th><i class="fas fa-user-circle"></i>  Nome</th>
               <th><i class="fas fa-globe-americas"></i>  Nacionalidade</th>
           </tr>
       </thead>
       <tbody id="respOne"> 
       </tbody>
       <caption> <span class="d-flex justify-content-center"><img id="respWait" alt=""> </span> </caption>
    </table>
    <div class="d-flex justify-content-start">  
    <p>Você pesquisou por : <span style="font-weight: bold;" id="resp"></span></p>
    </div>
    
    </div>
</div>
    <!--primeira linha-->
<!--<div class="row mt-5">

  <div class="col-sm-12 col-md-6 col-lg-3" style="min-height:100vh;">
  <div class="col-sm-12 col-md-12 col-lg-3 d-flex justify-content-center" style="min-height:30vh;min-width:100%;">
    <div class="card border-0 text-center">
    <img src="assets/imgs/alan_cesar.jpg" class="card-img-top" alt="">
    <div class="card-body">
        <h4 class="card-title">Alan Cesar</h4>
        <h6 class="card-subtitle">ID: 00000000</h6>
    </div>
    </div>
 </div>
 <div class="d-flex align-items-center justify-content-center">
 <ul class="nav flex-column mt-2 mb-5">
  <li class="nav-item">
    <a class="nav-link active" href="#"> <i class="fa fa-home"></i> Principal</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" href="#"> <i class="fas fa-map-marked-alt"></i> Instalados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fas fa-truck"></i> Frota</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fab fa-wpforms"></i> Formulários</a>
  </li>
</ul>
 </div>
 </div>
        
        <div class="col-sm-12 col-md-12 col-lg-3 p-2">
        <div class="card border-0" style="background-color: #1000;">
               <div class="card-body" >
                   <h6 class="card-title"  style="font-weight: bold; color:#B0C4DE;">
                     <span style="font-size: 19pt;">Usuário</span>
                     <div style="float:right;">
                   <i class="fas fa-user fa-2x"></i>
                   </div>
                   </h6>
               </div>
               <div class="card-bottom d-flex align-items-center justify-content-end" style="min-height: 7vh;background-color:#B0C4DE;">
                   <h6 class="card-text">
                      <a href="" style="color: #fff;"> <i class="fa fa-plus mr-3"> 150 </i> </a>
                   </h6>
               </div>
           </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3 p-2">
        <div class="card border-0" style="background-color: #1000;">
               <div class="card-body">
               <h6 class="card-title" style="font-weight: bold; color:#DDA0DD;">
               <span style="font-size: 19pt;">Estatística</span>
                   <div style="float:right;">
                   <i class="fas fa-project-diagram fa-2x"></i>
                   </div>
                   </h6>
               </div>
               <div class="card-bottom d-flex align-items-center justify-content-end" style="min-height: 7vh;background-color:#DDA0DD;">
                   <h6 class="card-text">
                      <a href="" style="color: #fff;"> <i class="fa fa-plus mr-3"> 300 </i> </a>
                   </h6>
               </div>
           </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3 p-2">
        <div class="card border-0" style="background-color: #1000;">
               <div class="card-body">
               <h6 class="card-title"  style="font-weight: bold; color:#7FFFD4;">
                   <span style="font-size: 19pt;">Aparelhos</span>
                   <div style="float:right;">
                   <i class="fas fa-mobile-alt fa-2x"></i>
                   </div>
                </h6>
               </div>

               <div class="card-bottom d-flex align-items-center justify-content-end" style="min-height: 7vh;background-color:#7FFFD4;">
                   <h6 class="card-text">
                      <a href="" style="color: #fff;"> <i class="fa fa-plus mr-3"> 500 </i> </a>
                   </h6>
               </div>
           </div>
        </div>  
     
    </div>
    </div> 
    
    -->

   <script>

    document.getElementById('pesq').addEventListener('keyup',()=>{
    document.getElementById('resp').innerHTML = document.getElementById('pesq').value
        resposta(document.getElementById('resp').innerHTML)
    });

    function resposta(resp){

        $(document).ready(function(){
            
        let dados = resp
        var wait =  document.getElementById('respWait')
        $.ajax({
            method:'POST',
            url:'home/buscar/'+resp,
            data:{'nome':resp},
            dataType:'json',
            beforeSend:()=>{
               wait.src="/assets/imgs/cloud.gif"
            },
            success:(data)=>{
            wait.src = ""
            document.getElementById('respOne').innerHTML = ""
            if(document.getElementById('pesq').value != ""){  
              for(let x=0;x<data.length;x++){   
               $('#respOne').append('<tr><td> <a href="/funcionario/'+data[x].nome+'">'+data[x].nome+'</td><td>'+data[x].nacionalidade+'</a></td></tr>')
             }
            }
        },
            error:(err)=>{
                console.log(err)
            }
        });
      });
    }
    
</script>

<div class="container">
    <div class="row mt-5">

        <div class="col-sm-12 col-md-8 col-lg-8">
           
            <div class="card text-center" id="diag1">
                <div class="card-body">
                    <h5 class="card-title">Diagrama 01</h5> <hr>
                    <p class="card-text"></p>
                </div>
               </div> 
        </div> 
        
        <div class="col-sm-12 col-md-4 col-lg-4">
            <a href="/dash">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title"> Diagrama 02</h5> <hr>
                    <p class="card-text"></p>
                </div>
            </div> 
            </a>
        </div> 
  </div>

  <div class="row mt-3">

  <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Diagrama 03 </h5> <hr>
                    <p class="card-text"></p>
                </div>
            </div> 
        </div>    


        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Diagrama 04 </h5> <hr>
                    <p class="card-text"></p>
                </div>
            </div> 
        </div>    
        
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Diagrama 05 </h5> <hr>
                    <p class="card-text"></p>
                </div>
            </div> 
        </div>    
  </div>

  <div class="row mt-3">

  <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Diagrama 06 </h5> <hr>
                    <p class="card-text"></p>
                </div>
            </div> 
        </div>  
        
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Diagrama 07 </h5> <hr>
                    <p class="card-text"></p>
                </div>
            </div> 
        </div>    
  </div>

  <div class="row mt-3">

  <div class="col-sm-12 col-md-12 col-lg-12">
      <a href="">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Diagrama 08 </h5> <hr>
                    <p class="card-text"></p>
                </div>
            </div> 
      </a>      
        </div>  
  </div>
</div>

<script>

   let diag1 = document.getElementById('diag1')

   diag1.addEventListener('click',()=>{
       alert('funcionou')

       
   })

</script>