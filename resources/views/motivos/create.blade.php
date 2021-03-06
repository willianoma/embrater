@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Motivos / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('motivos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('descricao')) has-error @endif">
                       <label for="descricao-field">Descricao</label>
                    <input type="text" id="descricao-field" name="descricao" class="form-control" value="{{ old("descricao") }}"/>
                       @if($errors->has("descricao"))
                        <span class="help-block">{{ $errors->first("descricao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('obs')) has-error @endif">
                       <label for="obs-field">Obs</label>
                    <input type="text" id="obs-field" name="obs" class="form-control" value="{{ old("obs") }}"/>
                       @if($errors->has("obs"))
                        <span class="help-block">{{ $errors->first("obs") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('motivos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection