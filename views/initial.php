<!--<div class="container-fluid" style="min-height: 100vh;background-image: url(assets/imgs/background.jpg);background-repeat:no-repeat;background-size: cover;background-position: center;">
  <div class="row d-flex justify-content-center align-items-center">
      <div class="col-sm-12 col-md-6 col-lg-6">
 <form action="" method="" class="mt-5">
   <div class="form-group">
       <input type="text" id="press" class="form-control form-control-sm">
    </div> 
    <div class="form-group">   
       <select name="" id="action" class="custom-select custom-select-sm">
           <option value="imprimir">Imprimir</option>
           <option value="cmd">CMD</option>
       </select>
    </div>
   <span id="up"></span>
   </form>
</div>
</div>
</div>
-->


<!--<script>  

    document.getElementById('press').addEventListener('keyup',()=>{
        console.log(event.keyCode)
        if(document.getElementById('press').value != " "){  
        
         let control = []
        
         if(event.ctrlKey){
            control[0] = 17
         }
         if(event.keyCode == 67){
             control[1] = 67
         }

        
         if((control[0]+control[1]) == 84) document.getElementById('up').innerHTML = 'Copiado'
         }
    })
      

</script>
-->
<!--<div class="container">
    <div class="row  d-flex justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mt-5 mb-5">
                <div class="card-body text-right">
                    <h5 class="card-title mr-3"><span class="text-info ">Calculator </span> <span class="text-warning"> 2020</span></h5>
                    <div class="card-text text-center">

                <div class="row pt-5 pb-5 ml-0">
                    <div id="cristal" style="border:2px solid #ccc;padding:20px;padding-top:40px;;min-width:95%;"></div>
                </div>

                <div class="row pb-1">
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5">9</button></div>
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5">8</button></div>
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5">7</button></div>
                    <div class="col-3"><button class="btn btn-outline-info btn-md p-4" id="plus">+</button></div>
                </div>

                <div class="row pb-1">
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5">6</button></div>
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5">5</button></div>
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5">4</button></div>
                    <div class="col-3"><button class="btn btn-outline-info btn-sm p-4">-</button></div>
                </div>

                <div class="row pb-1">
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5" id="tres">3</button></div>
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5" id="dois">2</button></div>
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5" id="hum">1</button></div>
                    <div class="col-3"><button class="btn btn-outline-info btn-sm p-4">*</button></div>
                </div>

                <div class="row pb-1">
                    <div class="col-3"><button class="btn btn-outline-danger btn-md p-4 pl-5 pr-5" id="clean"><span style="font-weight:bolder;">C</span></button></div>
                    <div class="col-3"><button class="btn btn-outline-secondary btn-md p-4 pl-5 pr-5">0</button></div>
                    <div class="col-3"><button class="btn btn-outline-success btn-md p-4 pl-5 pr-5">=</button></div>
                    <div class="col-3"><button class="btn btn-outline-info btn-md p-4">/</button></div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   
   let a = []
   let b =[]

    let cristal =  document.getElementById('cristal')
    let hum =  document.getElementById('hum')
    let dois =  document.getElementById('dois')
    let tres =  document.getElementById('tres')
    let clean =  document.getElementById('clean')

    hum.addEventListener('click',()=>{
        cristal.innerHTML += hum.innerHTML
    })
    dois.addEventListener('click',()=>{
        cristal.innerHTML += dois.innerHTML
    })
    tres.addEventListener('click',()=>{
        cristal.innerHTML += tres.innerHTML
    })
    plus.addEventListener('click',()=>{
        a = cristal.innerHTML
        cristal.innerHTML=" "
        b = cristal.innerHTML

        if(a != " " && b != " "){
            somar(a,b)
        }
    })
    clean.addEventListener('click',()=>{
        cristal.innerHTML = " "
    })

    somar = (a,b)=>{
       alert(a,b)
    }

  
</script>
-->



<div class="container">
    <div class="row mt-5">
<div class="col-sm-12 col-md-6 col-lg-6">
    <div class="card p-4 mb-1">
        <div class="card-body">
<form action="/funcionario/novoFuncionario" method="POST" enctype="multipart/form-data">
<legend><i class="fas fa-user-edit"></i> Inscrever Candidato</legend> <hr class="bg-success">
    <div class="form-group col-12">
        <input type="file" name="img" class="form-control-file">
    </div>
   <div class="form-group col-12">
       <input type="text" name="nome" class="form-control form-control-sm bg-none" placeholder="Nome">
   </div>
   <div class="form-group col-12">
       <input type="text" name="matricula" class="form-control form-control-sm" placeholder="Matricula">
   </div>
   <div class="form-group col-12">
       <select name="funcao" id="" class="custom-select custom-select-sm">
         <option value="administrador">Administrativo</option>
         <option value="analista">Analista</option>  
         <option value="eletricista">Eletricista</option>
         <option value="engenheiro">Engenheiro</option>
         <option value="tecnico">Técnico</option>
         <option value="rh">Rh</option>
       </select>
   </div>
   <div class="form-group col-12">
     <input type="date" name="data" class="form-control form-control-sm">
   </div>
   <div class="form-group col-12 d-flex justify-content-end">
       <button class="btn btn-sm btn-outline-success">Criar</button>
   </div>
</form>
    </div>
    </div>
</div>

    <div class="col-sm-12 col-md-6 col-lg-6">
    <div class="card p-4 pb-5" style="min-height:29vh;">
               <img src="" alt="" class="card-img-top">
               <div class="card-body">
               <div class="col-12">
        <form action="/funcionario/novoCandidato" method="POST">
        <legend><i class="fas fa-vote-yea"></i> Candidatura</legend> <hr class="bg-success">
        <div class="form-group col-12">
          <label for="">Confira sua disponibilidade</label>  
         <input type="text" name="matricula" id="matricula" class="form-control form-control-sm" placeholder="Matricula">
        </div>
        <div class="ml-3">
         <ul class="nav flex-column">  
         <img src="/assets/imgs/user.jpg" id="eFoto" alt="" width="50" height="50" style="border-radius: 50%;">
         <li class="nav-item" id="eNome"></li>
         <li class="nav-item" id="eMatricula"></li>
         <li class="nav-item" id="eFuncao"></li>
         </ul>
        </div>
        <div class="form-group col-6">
        <label for="">Escolha seu número</label>
        <input type="number" name="chapa" class="form-control form-control-sm col-5" min="0" max="99">
        </div> 
         <div class="form-group col-12 d-flex justify-content-end">
       <button class="btn btn-sm btn-outline-success">Candidatar-se</button>
        </div>
    
        </form>
    </div>
               </div>
           </div>
       
    </div>
</div>
    <div class="row mt-5">
        <div class="col-sm-12 col-md-6 col-lg-6">

           <div class="card mb-1 p-4" style="min-height:60vh;">
               <img src="" alt="" class="card-img-top">
               <div class="card-body">
                   <table class="table table-striped table-hover table-sm text-center">
                       <captions class="d-flex justify-content-end"> Candidatos &nbsp;&nbsp;<br><br><i class="fa fa-user-circle fa-2x"> </i></captions>
                       <thead>
                           <tr>
                               <th></th>
                               <th class="table-info">Matricula</th>
                               <th class="table-warning">Nome</th>
                               <th class="table-danger">Função</th>
                               <th >Número</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php foreach($candidato as $func):?>
                        <tr>
                        <td class="p-1"><img src="<?php echo $func['foto']?>" alt="" width="40" height="40" style="border-radius:50%;"></td>    
                        <td><?php echo $func['matricula'];?></td>    
                        <td><?php echo $func['nome'];?></td>
                        <td><?php echo ucwords($func['funcao']);?></td>
                        <td><?php echo ($func['num_candidato']);?></td>
                        </tr>
                        <?php endforeach;?>
                       </tbody>
                   </table>
               </div>
           </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
       
           <div class="card mb-1" style="min-height:29vh;">
            
           <div class="row">
               <div class="col-6">
               <div class="card border-0 p-3 pt-4 text-center">
               <img src="/assets/imgs/OIP.jpg" class="card-img-top img-fluid img-rounded float-left" id="fotocand" alt="">
               <div class="card-body">
                 <h5 class="card-title" id="nomecand"></h5>
                 <h6 class="card-subtitle" id="matcand"></h6>
             </div>
             </div>
            </div>
            <div class="col-6">
            <div class="card-body p-5">
                   <h5 class="card-title"><i class="fas fa-box-tissue"></i> Urna</h5><hr>
                   <form action="/funcionario/votarCandidato" method="POST" id="formvote">
                       <div class="form-group">
                           <label for="">Digite número :</label>
                           <input type="text" name="vote" id="vote" class="form-control form-control-md col-12">
                        </div>
                        <div class="form-group text-center">
                        <div id="respcand" style="font-weight:bold;font-size:9pt;"></div> 
                        </div>
                       <div class="form-group d-flex justify-content-end">
                           <button type="submit" id="votar" class="btn btn-md btn-block btn-outline-success"><i class="fas fa-plus" aria-hidden="true"></i> Confirmar </button>
                       </div>
                   </form>
               </div>
            </div>
           </div>
           

             
           </div>

           <div class="card mt-2" style="min-height:29vh;">
               <img src="" alt="" class="card-img-top">
               <div class="card-body">
               <captions class="d-flex justify-content-end"> Apuração &nbsp;&nbsp;<br><br><i class="fas fa-calculator fa-2x"></i></captions>
                   <table class="table table-striped table-hover table-sm text-center">
                       <thead>
                           <tr>
                               <th></th>
                               <th>Indice</th>
                               <th>Votos</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php  foreach($candidato as $voto):?>
                        <tr>
                        <td><img src="<?php echo $voto['foto']?>" alt="" width="40" height="40" style="border-radius:50%;"></td>    
                        <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $voto['voto'];?>" style="width:<?php echo $voto['voto'];?>%;"><?php echo $voto['voto'];?></div>
                        </div>
                        </td>
                        <td><span class="badge badge-info"><?php echo ($voto['voto']);?></span></td>
                        </tr>
                        <?php endforeach;?>
                       </tbody>
                   </table>
               </div>
           </div>

        </div>

    </div>
</div>

<script>

    $(document).ready(()=>{

        $("#formvote").submit(function() {
        $(this).submit(function() {
        return false;
        });
         return true;
        });
     
        $('#matricula').blur(()=>{
            let resp = $('#matricula').val()
            
            if(resp === ""){
                document.getElementById('eFoto').src = "/assets/imgs/OIP.jpg"
                document.getElementById('eNome').innerHTML = " "
                document.getElementById('eMatricula').innerHTML = " "
                document.getElementById('eFuncao').innerHTML = " "
            }else{
            $.ajax({
            method:'POST',
            url:'funcionario/list',
            data:{'matricula':resp},
            dataType:'json',
            success:(data)=>{
                  
                $('#eFoto').attr('src',data[0].foto)
                $('#eNome').html(data[0].nome)
                $('#eMatricula').html(data[0].matricula)
                $('#eFuncao').html(data[0].funcao)
            
                
            },
            error:(err)=>{
            console.log(err)
            }
        });
       }
            });


            $('#vote').keyup(()=>{
              let vote = $('#vote').val()
              if(vote === ""){
               document.getElementById('fotocand').src = "/assets/imgs/OIP.jpg"
               document.getElementById('nomecand').innerHTML = " "
               document.getElementById('matcand').innerHTML = " "
               document.getElementById('respcand').innerHTML=" "
               document.getElementById('respcand').classList.remove('alert')

              }else{
              $.ajax({
                method:'POST',
                url:'funcionario/listCandidato',
                data:{'num_candidato':vote},
                dataType:'json',
                success:(data)=>{
                    if(data.length > 0){
                       
                        $('#fotocand').attr('src',data[0].foto)
                        $('#nomecand').html(data[0].nome)
                        $('#matcand').html(data[0].matricula)
                        document.getElementById('respcand').innerHTML=" "
                        document.getElementById('respcand').classList.remove('alert')
                    }      
                },
                error:(err)=>{   
                      
                        document.getElementById('respcand').innerHTML="Candidato inexistente"
                        document.getElementById('respcand').className = "alert alert-danger"
                        document.getElementById('fotocand').src = "/assets/imgs/OIP.jpg"
                        document.getElementById('nomecand').innerHTML = " "
                        document.getElementById('matcand').innerHTML = " "
                }
              });
            }
            });

            $('#').keyup(()=>{
              $.getJSON({})
            });
    });
   
</script>