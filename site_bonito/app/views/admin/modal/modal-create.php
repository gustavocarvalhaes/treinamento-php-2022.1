<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Dados do novo usuário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="formulario-adiciona">
                    <h2>Preencha o formulário para adicionar novos Usuários</h2>
                    <form action="/admin/usuarios/create" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome de usuário:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='nome' placeholder="Izuku Midoriya">
                            <small id="emailHelp" class="form-text text-muted">Indique o nome para o cadastro</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='email' placeholder="orumaito@email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name='senha' placeholder="Oru_Maito">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informações extras sobre o usuário:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='informacoes' placeholder="Vou ser o herói número 1!"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Foto de perfil:</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name='foto_perfil'>
                        </div> 
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning" id="conf-modal">Adicionar</button>
                        </div>
                    </form>
                    
                </div>
            </div>
    
          </div>
        </div>
      </div>
    </div>  
