<form class="forms-sample" method="POST" action="{{ route('activite.update', $activite['idact']) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="modalUpdate{{ $activite['idact'] }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modifier {{ $activite['nom'] }}</h5>
                    <button type="button" class="close" data-dismiss="modal" arial-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nom de l'évenement</label>
                                    <input type="text" class="form-control" name="nom" placeholder="" value="{{ $activite['nom'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Date de l'activité</label>
                                    <input type="date" class="form-control" name="date_event" placeholder="" value="{{ $activite['date_event'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lieu de l'evenement</label>
                                    <input type="text" class="form-control" name="lieu" placeholder="lieu de l'evenement" value="{{ $activite['lieu'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Photos ou videos de l'evement</label>
                                    <input type="file" class="form-control" name="visuel[]" multiple
                                        placeholder="Entrer le numero de télephone" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Les structures</label>
                                    <select multiple="multiple" class="js-example-basic-multiple  form-control"
                                        id="exampleSelectGender" name="structure_id[]">
                                        @foreach ($structures as $structure)
                                            <option value="{{ $structure->id }}">{{ $structure->nom }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Description de l'evenement</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10" >{{ $activite['description'] }}</textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary"
                        data-dismiss="modal">{{ _('Annuler') }}</button>
                    <button type="submit" class="btn btn-success mr-2">Sauvégarder</button>
                </div>
            </div>
        </div>
    </div>
</form>
