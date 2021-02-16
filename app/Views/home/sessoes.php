<div class="container-fluid clearfix" >
  <div class="row justify-content-center">  
    <div class="col-md-12"  ID="sessao">
      <div class="card my-4  mx-auto w-100" style="height: 30rem;">
        <div class="card-header titulo-header-transmissao">
          <h5>Sessões da câmara</h5>
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-Ordinarias-tab" data-toggle="pill" href="#pills-Ordinarias" role="tab" aria-controls="pills-Ordinarias" aria-selected="true">Sessões Ordinárias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-extra-tab" data-toggle="pill" href="#pills-extra" role="tab" aria-controls="pills-extra" aria-selected="false">Sessões Extraordinárias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-sole-tab" data-toggle="pill" href="#pills-sole" role="tab" aria-controls="pills-sole" aria-selected="false">
          Sessões Solenes</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Ordinarias" role="tabpanel" aria-labelledby="pills-Ordinarias-tab">

              <div id="accordion" role="tablist">

              <?php for($i = 0; $i < count($ano); $i++) : ?>
                <?php
                  // Declaração das variaveis

                  $id = $sessao[$i]['id'];
                  $anoarquivo = $ano[$i]['ano'];
                ?>

                  <div class="card">
                    <div class="card-header" id="headingOne<?= $id ?>">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?= $id ?>" aria-expanded="true" aria-controls="collapseOne<?= $id ?>">
                          <h5 class="sessao_title">Ano de <?=  $anoarquivo ?></h5>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseOne<?= $id ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne<?= $id ?>" data-parent="#accordion">
                      <div class="card-body p-0">

                          <?php for($j = 0; $j < $count; $j++) : ?>

                            <?php
                            // Declaração das variaveis

                              $categoria = $sessao[$j]['categoria'];
                              $datapublicacao = $sessao[$j]['data'];
                              $anos = date( 'Y', strtotime($datapublicacao));
                              $nome = $sessao[$j]['nome'];
                              $sessoes = $sessao[$j]['sessao'];
							  $arquivo = str_replace(" ", "_", $sessao[$j]['arquivo']);
                              $dataFormat = date("d/m/Y", strtotime($datapublicacao))
                            ?>

                            <?php if($categoria==1 && $anoarquivo == $anos) :?>

                              <div class="col-sm-auto mt-3 d-inline-block">
                                <div class="card text-center" style="width: 12rem;padding-top: 1rem;">
                                  <div style="font-size:2em; color:Tomato;">
                                    <i class="fas fa-file-pdf fa-1x"></i>
                                  </div>
                                <div class="card-body">
                                  <h6 class="card-title" style="font-size: 13px;">

                                    <?php
                                      if($sessoes == 0) echo  $nome." ".$anos;
                                      else  echo $sessoes." - S. Ordinárias de ".$anos;
                                    ?>
                                  </h6>
                                  <p class="card-text" style="font-size: 11px;">Publicado em: <?=  $dataFormat?></p>
                                    <a href="<?=base_url()?>content/sessoes/<?= $arquivo ?>" class="btn btn-info" target="_blank" style="width:  100%; border-radius:  inherit;"><i class="fas fa-cloud-download-alt"></i> Baixar</a>
                                </div>
                              </div>
                            </div>
                            <?php endif;?>

                          <?php endfor;?>
                      </div>
                    </div>
                  </div>  
                <?php endfor;?>

				</div>
			</div>
			<div class="tab-pane fade" id="pills-extra" role="tabpanel" aria-labelledby="pills-extra-tab">
				<div id="accordion2" role="tablist">

					<?php for($i = 0; $i < count($ano); $i++) : ?>
						<?php
						// Declaração das variaveis

						$id = $sessao[$i]['id'];
						$anoarquivo = $ano[$i]['ano'];
						?>

						<div class="card">
							<div class="card-header" id="headingTwo<?= $id ?>">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo<?= $id ?>" aria-expanded="true" aria-controls="collapseTwo<?= $id ?>">
										<h5 class="sessao_title">Ano de <?=  $anoarquivo ?></h5>
									</button>
								</h5>
							</div>
							<div id="collapseTwo<?= $id ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo<?= $id ?>" data-parent="#accordion2">
								<div class="card-body p-0">

									<?php for($j = 0; $j < $count; $j++) : ?>

										<?php
										// Declaração das variaveis

										$categoria = $sessao[$j]['categoria'];
										$datapublicacao = $sessao[$j]['data'];
										$anos = date( 'Y', strtotime($datapublicacao));
										$nome = $sessao[$j]['nome'];
										$sessoes = $sessao[$j]['sessao'];
										$arquivo = str_replace(" ", "_", $sessao[$j]['arquivo']);
										$dataFormat = date("d/m/Y", strtotime($datapublicacao))
										?>

										<?php if($categoria==2 && $anoarquivo == $anos) :?>

											<div class="col-sm-auto mt-3 d-inline-block">
												<div class="card text-center" style="width: 12rem;padding-top: 1rem;">
													<div style="font-size:2em; color:Tomato;">
														<i class="fas fa-file-pdf fa-1x"></i>
													</div>
													<div class="card-body">
														<h6 class="card-title" style="font-size: 13px;">

															<?php
															if($sessoes == 0) echo  $nome." ".$anos;
															else  echo $sessoes." - S. Extraordinárias de ".$anos;
															?>
														</h6>
														<p class="card-text" style="font-size: 11px;">Publicado em: <?=  $dataFormat?></p>
														<a href="<?=base_url()?>content/sessoes/<?= $arquivo ?>" class="btn btn-info" target="_blank" style="width:  100%; border-radius:  inherit;"><i class="fas fa-cloud-download-alt"></i> Baixar</a>
													</div>
												</div>
											</div>
										<?php endif;?>

									<?php endfor;?>
								</div>
							</div>
						</div>
					<?php endfor;?>

				</div>
			</div>

			<div class="tab-pane fade" id="pills-sole" role="tabpanel" aria-labelledby="pills-sole-tab">
				<div id="accordion3" role="tablist">

					<?php for($i = 0; $i < count($ano); $i++) : ?>
						<?php
						// Declaração das variaveis

						$id = $sessao[$i]['id'];
						$anoarquivo = $ano[$i]['ano'];
						?>

						<div class="card">
							<div class="card-header" id="headingThree<?= $id ?>">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree<?= $id ?>" aria-expanded="true" aria-controls="collapseThree<?= $id ?>">
										<h5 class="sessao_title">Ano de <?=  $anoarquivo ?></h5>
									</button>
								</h5>
							</div>
							<div id="collapseThree<?= $id ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree<?= $id ?>" data-parent="#accordion3">
								<div class="card- p-0">

									<?php for($j = 0; $j < $count; $j++) : ?>

										<?php
										// Declaração das variaveis

										$categoria = $sessao[$j]['categoria'];
										$datapublicacao = $sessao[$j]['data'];
										$anos = date( 'Y', strtotime($datapublicacao));
										$nome = $sessao[$j]['nome'];
										$sessoes = $sessao[$j]['sessao'];
										$arquivo = str_replace(" ", "_", $sessao[$j]['arquivo']);
										$dataFormat = date("d/m/Y", strtotime($datapublicacao))
										?>

										<?php if($categoria==3 && $anoarquivo == $anos) :?>

											<div class="col-sm-auto mt-3 d-inline-block">
												<div class="card text-center" style="width: 12rem;padding-top: 1rem;">
													<div style="font-size:2em; color:Tomato;">
														<i class="fas fa-file-pdf fa-1x"></i>
													</div>
													<div class="card-body">
														<h6 class="card-title" style="font-size: 13px;">

															<?php
															if($sessoes == 0) echo  $nome." ".$anos;
															else  echo $sessoes." - S. Solenes de ".$anos;
															?>
														</h6>
														<p class="card-text" style="font-size: 11px;">Publicado em: <?=  $dataFormat?></p>
														<a href="<?=base_url()?>content/sessoes/<?= $arquivo ?>" class="btn btn-info" target="_blank" style="width:  100%; border-radius:  inherit;"><i class="fas fa-cloud-download-alt"></i> Baixar</a>
													</div>
												</div>
											</div>
										<?php endif;?>

									<?php endfor;?>
								</div>
							</div>
						</div>
					<?php endfor;?>

				</div>
			</div>

		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
