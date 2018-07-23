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
                                @include('flash::message')
                                <div class="col-md-1">
                                    <button type="button" data-toggle="modal" id="newDebtorMaster" data-target="#exampleModal" class="btn btn-outline-primary">NUEVO</button>
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
                    <div id="msgDeleteEdit"></div>
                    <div class="col-md-12" id="main_table">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1">

        </div>
    </div>

@endsection

@include('modals.modal-basic')

@section('content_js')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery_debtorsMaster-add-edit.js') }}"></script>
    
@endsection

