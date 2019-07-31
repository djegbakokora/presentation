@extends('layouts.backend')

@section('title', 'Roles')

@section('css')
@endsection



@section('body')

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Modifier  Roles</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol> --}}
                            <a  href="{{ route('roles.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Liste des Roles</a>
                        </div>
                    </div>
                </div>


            <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Nouveau Role</h4>
                            </div>
                            <div class="card-body">
                        {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update',  $role->id ] ]) !!}
                        @include('roles._form')
                            <div class="card-body">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <a  href="{{url()->previous()}}" class="btn btn-primary">Cancel</a>
                                    </div>
                            </div>
                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

@endsection

    @section('js')
    @endsection

