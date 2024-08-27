@extends('communs.main')
@section('content')
    
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="background-color: rgb(201, 201, 201)">
                <h4 class="text-white text-center ">La liste des elèves</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5 form-group">
                        <input type="text" name="rechercher" id="" class="form-control">
                    </div>
                    <div class="col-3 form-group">
                        <input type="submit" name="" id="" class="btn bg-primary form-control">
                    </div>
                    <div class="col-3 form-group">
                        <input type="submit" name="" id="" class="btn bg-primary form-control">
                    </div>
                    <div class="col-1 form-group">
                       <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>MATRICULE</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>DATE DE NAISSANCE</th>
                            <th>LIEU DE NAISSANCE</th>
                            <th>CLASSE</th>
                            <th>PHOTO</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2204136329</td>
                            <td>Cissé</td>
                            <td>Sory</td>
                            <td>01/01/2000</td>
                            <td>Yendè Millimou</td>
                            <td>CM1</td>
                            <td>Photo</td>
                            <td>
                                <a href="#" class="btn btn-sm bg-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm bg-warning"><i class="fa fa-trush"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2204136329</td>
                            <td>Cissé</td>
                            <td>Sory</td>
                            <td>01/01/2000</td>
                            <td>Yendè Millimou</td>
                            <td>CM1</td>
                            <td>Photo</td>
                            <td>
                                <a href="#" class="btn btn-sm bg-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm bg-warning"><i class="fa fa-trush"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="Col-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection