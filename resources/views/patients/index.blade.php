@extends('layouts.app')

@section('content')
  <div class="container">

    @if(Auth::check())
    @if(Auth::user()->isBoss())
    <div class="row">
      <a href="{{route('pForm')}}" class= "btn btn-lg btn-block btn-info">
        Registruoti naują pacientą
      </a>
    </div>
    @endif
    @endif
    <div class="row">
      <h2>Pacientų sąrašas ({{$count}})</h2>
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
          </thead>
          <tbody>

            @foreach($patients as $patient)
              <tr>
                <th scope="row">{{$patient->id}}</th>
                <td>{{$patient->p_code}}</td>
                <td>{{$patient->name}}</td>
                <td>{{$patient->surname}}</td>
                <td>{{$patient->address}}</td>

                @if(Auth::check())
                @if(Auth::user()->isBoss())
                <td>
                  <a href="{{route('editPatient', $patient->id)}}"><button type="button" class= "btn btn-info" name="edit">Koreguoti duomenis</button></a>
                  <a href="{{route('deletePatient', $patient->id)}}"><button type="button" class= "btn btn-info" name="delete">Trinti įrašą</button></a>
                </td>
                @elseif(Auth::user()->isDoctor())
                <td>
                  <a href="{{route('byCode', $patient->id)}}">Pasirinkti</a>
                </td>
                @endif
                @endif
              </tr>
            @endforeach
          </tbody>

        </table>

      </div>

    </div>

  </div>




@endsection
