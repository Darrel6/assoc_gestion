<form action="{{route('deleteStructure',$structure->id)}}" method="post">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="exampleModalToggle{{ $structure->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">{{ $structure->nom_struct }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Do you really want to delete  {{ $structure->nom_struct }} ?
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger"  data-bs-toggle="modal">Delete</button>
          </div>
        </div>
      </div>
    </div>
  
</form>

