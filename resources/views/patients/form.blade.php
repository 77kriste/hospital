@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Paciento registracijos kortelė</div>
        <div class="panel-body">
          <form class="form-horizontal" action="{{ route('storePatient') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="p_code" class="col-md-4 control-label">Paciento asmens kodas:</label>
              <div class="col-md-6"><input id="p_code" type="text" name="p_code" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <label for="name" class="col-md-4 control-label">Paciento vardas:</label>
              <div class="col-md-6"><input id="name" type="text" name="name" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <label for="surname" class="col-md-4 control-label">Paciento pavardė:</label>
              <div class="col-md-6"><input id="surname" type="text" name="surname" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <label for="address" class="col-md-4 control-label">Paciento gyvenamoji vieta:</label>
              <div class="col-md-6"><input id="address" type="text" name="address" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-info">Patvirtinti</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
