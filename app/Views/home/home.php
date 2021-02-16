<div class="container clearfix mb-5">
  <div class="row">
    <h1 class="display-6 text-center col-md-10">&nbsp;</h1>
  <div class="col-md-10">
    <div class="col text-center">
      <div class="row">
        <div class="container-fluid">
            <div class="row mb-5 mt-0">
                  
                <div class="col-md-12 col-sm-12 col-lg-12">
                      <div class="card mb-4 mt-2  mx-auto  w-100"  style="max-height: 25rem;">
                        <div class="card-header titulo-header-transmissao">
                          <h5>Últimas Notícias</h5>
                        </div>
                        <div class="card-body p-0">
                          <div id="slide-noticias" class="carousel slide carousel-fade position-relative" data-ride="carousel"  style="max-height: 25rem;">
                            <div class="carousel-inner">
							<?php
								$i = 0;
								foreach ($noticias as $noticia):
									setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
									date_default_timezone_set('America/Sao_Paulo');

									$data = $noticia->data;
									$dia = strftime( '%d', strtotime($data));
									$mes = strftime( '%b', strtotime($data));
									$ano = strftime( '%Y', strtotime($data));


									
								?>

							  <div class="carousel-item <?php
							  	$i++;
							  	if($i==1) echo 'active';

							  ?> w-100" style="max-height: 25rem;">
								 <div class="carousel-caption caption-noticias-top d-block">
									 <h5><?= $noticia->titulo ?></h5><br/>
								  </div>
								<a href="noticias/index/1/<?php echo $noticia->id; ?>?id=4">
								  <img class="d-block w-100" src="<?= base_url();?>content/noticias/destaque/<?=str_replace(' ','_',$noticia->foto)?>">
								  <div class="carousel-caption caption-slide-noticias d-block">
									<p class=" ml-3 mr-3"><span class="d-none d-md-block float-left"><?php
									echo substr("$noticia->texto", 0, 95);?>...</span><span class="d-block d-md-none btn btn-primary">Ver Noticia</span></p>
									<p><small class="float-right position-absolute" style="right: 5px; bottom: 3px;">Publicado em: <?= $dia." ".$mes." ".$ano?></small>
								  </div>
								</a>
							  </div>
							<?php endforeach; ?>
							</div>

							  <a class="carousel-control-prev" href="#slide-noticias" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#slide-noticias" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
						  </div>
                        </div>
                      </div>
                </div>
              </div>


 
          <div class="row" style="margin-top: -1rem;">

            <div class="card my-4  mx-auto"  style="width: 15rem; height: 12rem;">
              <div class="card-img-top"> 
                <img src="<?= base_url();?>content/imagens/icones/transparencia.png"  style="width:100%;">
              </div>
              <div class="card-body card-topo">
                <div class="card-text">
                  <a href="http://www.mgcidades.com.br/" target="_blank"class="btn btn-card-acess btn-info btn-lg">Acessar</a>
                </div>
              </div>
            </div>
 
               <div class="card my-4  mx-auto"  style="width: 15rem; height: 12rem;">
              <div class="card-img-top"> 
                <img src="<?= base_url();?>content/imagens/icones/projetos_executivos.png"  style="width:100%;">
              </div>
              <div class="card-body card-topo">
                <div class="card-text">
                  <a href="<?=base_url()?>executivo" class="btn btn-info btn-card-acess btn-lg">Acessar</a>
                </div>
              </div>
            </div>
 
           

            
             <div class="card mx-auto  my-4"  style="width: 15rem; height: 12rem;">
              <div class="card-img-top">
               <img src="<?= base_url();?>content/imagens/icones/regimento.png"  style="width:100%;">
              </div>
              <div class="card-body card-topo">
                <div class="card-text">
                  <div style='font-size:3em; color:Tomato;'>
                    <i class='fas fa-file-pdf fa-0x float-left ml-3'></i>
                    <a href="<?= base_url()?>content/pdf/regimento_interno.pdf" target="_blank" class="btn btn-info btn-lg float-right mr-0 btn-card-pdf">Baixar</a>
                  </div>
                </div>
              </div>
            </div>

			  <div class="card mx-auto  my-4"  style="width: 15rem; height: 12rem;">
				  <div class="card-img-top">
					  <img src="<?= base_url();?>content/imagens/icones/leiorganica.png"  style="width:100%;">
				  </div>
				  <div class="card-body card-topo">
					  <div class="card-text">
						  <div style='font-size:3em; color:Tomato;'>
							  <i class='fas fa-file-pdf fa-0x float-left ml-3'></i>
							  <a href="<?= base_url()?>content/pdf/lei_organica_municipal.pdf" target="_blank" class="btn btn-info btn-lg float-right mr-0 btn-card-pdf">Baixar</a>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="card my-4  mx-auto"  style="width: 15rem; height: 12rem;">
				  <div class="card-img-top">
					  <img src="<?= base_url();?>content/imagens/icones/projetos.png"  style="width:100%;">
				  </div>
				  <div class="card-body card-topo">
					  <div class="card-text">
						  <a href="#projetos" target="_blank"class="btn disabled btn-card-acess btn-info btn-lg">Acessar</a>
					  </div>
				  </div>
			  </div>
			  <div class="card my-4 mx-auto" style="width: 15rem;">
				  <div class="card-header titulo-clima">
					  Clima
				  </div>
				  <div class="card-body corpo-clima">
					  <div id="cont_918255309d1eefbfe16a0bc14c6a7adb"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/918255309d1eefbfe16a0bc14c6a7adb"></script></div>
				  </div>
			  </div>



		  </div>
		</div>

