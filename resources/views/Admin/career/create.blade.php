@extends('templates.templateDashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Carreras
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-md-10 col-lg-12">
            <form id="formulario">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Formulario de registro
                    </li>
                </ol>
                <div class="form-group">
                    <label>Nombre de carrera</label>
                    <input class="form-control" placeholder="nombre de la carrera a registrar.">
                </div>
                <button type="submit" class="btn btn-success">Registrar Carrera</button><br><br>

                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Lista de carreras
                    </li>
                </ol>

                <h2>Lista de carreras</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Nombre carrera</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Tecnologia en sistematizacion de datos</th>
                            <th><button style="width:100%" type="submit" class="btn btn-success">Editar</button></th>
                            <th><button style="width:100%" type="submit" class="btn btn-danger">Eliminar</button></th>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </form>
        </div>
    </div>





    </div>
    </div>

@endsection