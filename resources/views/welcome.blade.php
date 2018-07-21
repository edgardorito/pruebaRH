@extends('layouts.main') 

@section('content_css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">
            <h3>REGISTROS</h3>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-2">
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                                Launch demo modal
                                              </button>
                                    <!-- <button type="button" class="btn btn-outline-primary">NUEVO</button> -->
                                </div>
                                <div class="col-md-6">
                                    <form>
                                        <div class="input-group ">
                                            <input type="text" class="form-control " placeholder="PALABRA A BUSCAR">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">BUSCAR</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12" id="main_table">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1">

        </div>
    </div>

@endsection

@section('content_js')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection

@section('modals')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection