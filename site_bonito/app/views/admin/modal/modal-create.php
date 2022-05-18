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
                    <form action="/admin/create" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome de usuário:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='nome' placeholder=":)">
                            <small id="emailHelp" class="form-text text-muted">Indique o nome para o cadastro</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='email' placeholder="maromba@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name='senha' placeholder=" ">
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
