<form action="{{route('activite.destroy', $activite['idact'])}}" method="post">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="modalDelete{{$activite['idact']}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Suppimer</h5>
            <button type="button" class="close" data-dismiss="modal" arial-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
          </div>
          <div class="modal-body">
            Voulez-vous supprimé <b>{{ $activite['nom'] }}</b>  ?
          </div>
          <div class="modal-footer">
          <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Annuler')}}</button>
            <button class="btn btn-danger" type="submit">Delete</button>
          </div>
        </div>
      </div>
    </div>

</form>

