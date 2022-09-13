
<form class="forms-sample" method="POST" action="{{ route('updateStructure', $structure->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="staticBackdrop{{ $structure->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modification de : {{ $structure->nom }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="exampleInputName1">Nom de la structure</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="nom"
                                        placeholder="Nom de la structure" value="{{ $structure->nom }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputName1" name="email"
                                        placeholder="Email" value="{{ $structure->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Téléphone</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="tel"
                                        placeholder="Telephone" value="{{ $structure->tel }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Domaines d'Activités</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="domaine_activite"
                                        placeholder="Domaine d'Activités" value="{{ $structure->domaine_activite }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">Adresse ou localisation</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" name="localisation"
                                        placeholder="Adresse ou localisation" value="{{ $structure->localisation }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Choisir Structure</label>
                          
                                    <select class="form-control" id="exampleSelectGender" name="positionnement">
                                        <option value="">Selectionez votre Positonnement</option>
                                        <option value="Pré-idéation">Pré-idéation</option>
                                        <option value="Idéation">Idéation</option>
                                        <option value="Prototypage">Prototypage</option>
                                        <option value="Incubation">Incubation</option>
                                        <option value="Accélération">Accélération</option>
                                       
                                    </select>
                          
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
@yield('editbook')
