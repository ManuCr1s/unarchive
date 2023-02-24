@extends('template.template')
@section('container')
<div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="full-page section-image" data-color="black" data-image="{{asset('assets/img/full-screen-image-2.jpg')}}" ;>
            <div class="content p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card table-with-links">
                                <div class="card-header">
                                    <h4 class="card-title">Codigos a buscar</h4>
                                    <p class="card-category">
                                        <div class="row">
                                            <span class="col-md-11" data-bs-toggle="modal" data-bs-target="#exampleModal">Administracion de codigos</span>
                                            <!--  Boton de apertura del modal  -->
                                            <a href="#" class="col-md-1 ml-auto" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus-circle"></i></a>    
                                            <!-- Fin Boton -->
                                            <!-- Modal para el ingreso de cero papel  -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese codigo</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label for="message-text" class="col-form-label">Asunto:</label>
                                                                            <input type="text" class="form-control" id="message-text">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="recipient-name" class="col-form-label">Codigo:</label>
                                                                            <input type="text" class="form-control font-weight-bold" id="ticket" pattern="^[0-9,$]*$" onkeypress="return onlyNumbers(event)">
                                                                        </div>  
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                    <button type="button" class="btn btn-primary">Ingresar codigo</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <!-- Fin Modal  -->
                                        </div>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">N°</th>
                                                    <th>Detalle</th>
                                                    <th>Codigo</th>
                                                    <th class="text-right">Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Andrew Mike</td>
                                                    <td>Develop</td>
                                                    <td class="td-actions text-right">
                                                       
                                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>John Doe</td>
                                                    <td>Design</td>
                                        
                                                    <td class="td-actions text-right">
                                                       
                                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Alex Mike</td>
                                                    <td>Design</td>
                                                  
                                                    <td class="td-actions text-right">
                                                        
                                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Mike Monday</td>
                                                    <td>Marketing</td>
                                             
                                                    <td class="td-actions text-right">
                                                        
                                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td>Paul Dickens</td>
                                                    <td>Communication</td>
                                                   
                                                    <td class="td-actions text-right">
                                                       
                                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
<script src="{{asset('assets/js/functions.js')}}"></script>
@endsection