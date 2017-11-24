@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <a href="{{route('prForm')}}" class= "btn btn-lg btn-block btn-info">
        Išrašyti naują receptą
      </a>
    </div>

    <div class="row">
      <h2>Išrašyti receptai</h2>
      <hr>
    </div>
    <div class="row">
      <div class="panel panel-default">
        <table class="table">
          <thead>
            <th>#</th>
            <th>Asmens kodas</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Gyvenamoji vieta</th>
            <th>Skiriamas medikamentas</th>
            <th>Recepto išrašymo data</th>
            <th>Recepto galiojimo data</th>
            <th>Gydytojo vardas</th>
            <th>Gydytojo pavardė</th>
            <th>Gydytojo tel. Nr.</th>
          </thead>
          <tbody>

            @foreach($prescriptions as $prescription)
            <tr>
              <th scope="row">{{$prescription->id}}</th>
              <td>{{$prescription->p_code}}</td>
              <td>{{$prescription->name}}</td>
              <td>{{$prescription->surname}}</td>
              <td>{{$prescription->address}}</td>
              <td>{{$prescription->drug}}</td>
              <td>{{$prescription->p_date}}</td>
              <td>{{$prescription->p_valid}}</td>
              <td>{{$prescription->d_name}}</td>
              <td>{{$prescription->d_surname}}</td>
              <td>{{$prescription->d_phone}}</td>
            </tr>
            @endforeach
          </tbody>

      </table>

    </div>

  </div>

</div>

@endsection
