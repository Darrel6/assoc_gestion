<form class="forms-sample" method="POST" action="{{ route('members.update', $member->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="modalUpdate{{ $member->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modifier</h5>
                    <button type="button" class="close" data-dismiss="modal" arial-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName1">Nom et Prénom</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="nom" value="{{ $member->nom }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputName1" name="email"  value="{{ $member->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Téléphone</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="telephone"  value="{{ $member->telephone }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Fonction</label>

                                    <select class="form-control" id="exampleSelectGender" name="fonction_id">
                                        @foreach ($fonctions as $fonction)
                                        <option value="{{ $fonction->id }}">{{ $fonction->nom }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Choisir une structure</label>

                                    <select class="form-control" id="exampleSelectGender" name="structure_id">
                                        @foreach ($members as $member)
                                        <option value="{{$member->structure->nom}}">{{$member->structure->nom}}</option>
                                        @endforeach

                                    </select>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Annuler')}}</button>
                    <button type="submit" class="btn btn-success mr-2">Sauvégarder</button>
                </div>
            </div>
        </div>
    </div>
</form>
@yield('editbook')
