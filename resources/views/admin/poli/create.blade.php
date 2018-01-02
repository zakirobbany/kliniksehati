@extends('layouts.layout')

@section('content')
    <div class="">
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Tambah Poli</h2>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'poli.store', 'class'=>'form-horizontal']) !!}
                            @include('admin.poli._form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection