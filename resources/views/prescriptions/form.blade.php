@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Receptas</div>
        <div class="panel-body">
          <form class="form-horizontal" action="{{ route('storePrescription') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label for="p_code" class="col-md-4 control-label">Paciento asmens kodas:</label>
              <div class="col-md-6">
                @if(isset($patient))
                <input id="p_code" type="text" name="p_code" value="{{$patient->p_code}}" class="form-control {{$errors->has('p_code') ? 'is-invalid' : ''}}">
                @else
                <input id="p_code" type="text" name="p_code" value="{{old('p_code')}}" class="form-control {{$errors->has('p_code') ? 'is-invalid' : ''}}">
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">Paciento vardas:</label>
              <div class="col-md-6">
                @if(isset($patient))
                <input id="name" type="text" name="name" value="{{$patient->name}}" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
                @else
                <input id="name" type="text" name="name" value="{{old('name')}}" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="surname" class="col-md-4 control-label">Paciento pavardė:</label>
              <div class="col-md-6">
                @if(isset($patient))
                <input id="surname" type="text" name="surname" value="{{$patient->surname}}" class="form-control {{$errors->has('surname') ? 'is-invalid' : ''}}">
                @else
                <input id="surname" type="text" name="surname" value="{{old('surname')}}" class="form-control {{$errors->has('surname') ? 'is-invalid' : ''}}">
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="address" class="col-md-4 control-label">Paciento gyvenamoji vieta:</label>
              <div class="col-md-6">
                @if(isset($patient))
                <input id="address" type="text" name="address" value="{{$patient->address}}" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}">
                @else
                <input id="address" type="text" name="address" value="{{old('address')}}" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}">
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="drug" class="col-md-4 control-label">Skiriamas medikamentas:</label>
              <div class="col-md-6">
                @if(isset($drug))
                <input id="drug" type="text" name="drug" value="{{$drug->name}}" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
                @else
                <input id="drug" type="text" name="drug" value="{{old('name')}}" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
                @endif
              </div>
              <a href="{{route('drugs')}}" class="btn btn-info">Pasirinkti iš sąrašo</a>
            </div>

            <div class="form-group">
              <label for="p_valid" class="col-md-4 control-label">Recepto galiojimo data:</label>
              <div class="col-md-6"><input id="p_valid" type="text" name="p_valid" value="" class="form-control"></div>
            </div>
            <hr>

            <div class="form-group">
              <label for="d_name" class="col-md-4 control-label">Gydytojo vardas:</label>
              <div class="col-md-6"><input id="d_name" type="text" name="d_name" value="" class="form-control"></div>
            </div>

            <div class="form-group">
              <label for="d_surname" class="col-md-4 control-label">Gydytojo pavardė:</label>
              <div class="col-md-6"><input id="d_surname" type="text" name="d_surname" value="" class="form-control"></div>
            </div>

            <div class="form-group">
              <label for="d_phone" class="col-md-4 control-label">Gydytojo tel. Nr.:</label>
              <div class="col-md-6"><input id="d_phone" type="text" name="d_phone" value="" class="form-control"></div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-info">Paskirti</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
