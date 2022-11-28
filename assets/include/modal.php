<!-- Modal -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div role="document" style="width: 100vw; height: 100vh;">
        <div class="modal-body">
          <div class="modal-content black-opacity-bg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <div class="flex-row" style="display: flex; overflow-y: auto;">
              <?php
                //$caminho = rawurldecode($_REQUEST['g']);
                $caminho = "./assets/img/home/";
                    $img = glob($caminho."*.jpg", GLOB_BRACE);
                    
                $contador = count($img);
                
                foreach($img as $img){
                  echo '<img src="'.$img.'" alt="" class="imgAmpliar" style="height:90vh"/>';
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>