    <div class="modal fade" id="modal-edit-<?=$function->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edição de usuário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="formulario-adiciona">
                  <h2>Altere os dados desejados</h2>
                  <form action="/admin/usuarios/update" method="POST">
                    <input type="hidden" value="<?= $function->id ?>" name="id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome de usuário:</label>
                        <input type="text" class="form-control" id="nameFormInput" name='nome' value="<?=$function->nome?>" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name='email' value="<?=$function->email?>" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name='senha' value="<?=$function->senha?>" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Informações extras sobre o usuário:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name='informacoes' value="<?=$function->informacoes?>" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Foto de perfil:</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name='foto_perfil' value="<?=$function->foto_perfil?>">
                    </div> 
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-warning" id="conf-modal">Salvar Alterações</button>
                    </div>  
                  </form>                 
                </div>
            </div>
          </div>
        </div>
    </div>  
