    <div class="modal fade" id="modal-delete-<?=$function->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Deseja excluir este usuário?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Vou sentir saudade da tropa de exploração :(</p>
              <div class="modal-footer">
                <form id="form_deleta" action="/admin/usuarios/delete" method="POST">
                  <input type="hidden" value="<?= $function->id ?>" name="id">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-warning" id="conf-modal">Excluir</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
