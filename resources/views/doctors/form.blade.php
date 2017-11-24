@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Gydydojo registracijos kortelė</div>
        <div class="panel-body">
          <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
              <label for="name" class="col-md-4 control label">Vardas</label>
              <div class="col-md-6"><input id="name" type="text" name="name" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <label for="surname" class="col-md-4 control label">Pavardė</label>
              <div class="col-md-6"><input id="name" type="text" name="name" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <label for="l_number" class="col-md-4 control label">Licencijos numeris</label>
              <div class="col-md-6"><input id="name" type="text" name="name" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <label for="l_date" class="col-md-4 control label">Licencijos išdavimo data</label>
              <div class="col-md-6"><input id="name" type="text" name="name" value="" class="form-control"></div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Patvirtinti</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
