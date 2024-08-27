@extends('communs.main')
@section('content')
    
<body>
    <div class="mb-5">
        <div class="card m-0">
            <div class="card-header" style="background-color: rgb(188, 188, 188)">
                <h4 class="text-white text-center ">Enregistrement des elèves</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-6">
                            <p class="text-center">Les informations sur elève</p>
                        </div>
                        <div class="col-6">
                            <p class="text-center">Les informations sur la filiation</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="border rounded rounded-3 p-3" style="border: rgb(188, 188, 188)">
                                <div class="form-group">
                                    <label for="#">Matricule</label>
                                    <input type="text" name="matricule" id="matricule" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Prénom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Date naissance</label>
                                    <input type="date" name="dateNaiss" id="dateNaiss" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Lieu de naissance</label>
                                    <input type="text" name="lieuNaiss" id="lieuNaiss" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Photo</label>
                                    <input type="file" name="photo" id="photo" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label for="#">Filiation</label>
                                    <select name="filiation_id" id="filiation_id" class="form-control">
                                        <option value="#"></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="#">Classe</label>
                                    <select name="classe_id" id="classe_id" class="form-control">
                                        <option value="#"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded rounded-3 p-3" style="border: rgb(188, 188, 188)">
                                <div class="form-group">
                                    <label for="#">Père</label>
                                    <input type="text" name="pere" id="pere" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Profession</label>
                                    <input type="text" name="profession_pere" id="profession_pere" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Nom complet de la mère</label>
                                    <input type="text" name="mere" id="mere" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Profession</label>
                                    <input type="text" name="profession_mere" id="profession_mere" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Tuteur</label>
                                    <input type="text" name="tuteur" id="tuteur" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="#">Contact</label>
                                    <input type="text" name="contact" id="contact" class="form-control">
                                </div>
                               </div>
                        </div>
                    </div>
                   
                </form>
                <div class="row mt-3">
                    <div class="col-6 form-group">
                        <input type="submit" value="Enregistrer" class="btn bg-success form-control">
                    </div>
                    <div class="col-6 form-group">
                        <input type="submit" value="Annuler" class="btn bg-warning form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection