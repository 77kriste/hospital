@extends('layouts.app')

@section('content')
<div class="container">
  @if(Auth::check())
  @if(Auth::user()->isSam())
  <div class="row">
    <a href="{{route('dForm')}}" class= "btn btn-lg btn-block btn-info">
      Registruoti naują medikamentą
    </a>
  </div>
  @endif
  @endif
  <div class="row">
    <h2>Medikamentų sąrašas ({{$count}})</h2>
    <hr>
  </div>
  <div class="row">
    <div class="panel panel-default">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Medikamento pavadinimas</th>
          <th>Medikamento įregistravimo data</th>

        </thead>
        <tbody>

          @foreach($drugs as $drug)
            <tr>
              <th scope="row">{{$drug->id}}</th>
              <td>{{$drug->name}}</td>
              <td>{{$drug->r_date}}</td>

              @if(Auth::check())
              @if(Auth::user()->isSam())
              <td>
                <a href="{{route('deleteDrug', $drug->id)}}"><button type="button" class= "btn btn-info" name="delete">Trinti įrašą</button></a>
              </td>
              @elseif(Auth::user()->isDoctor())
              <td>
                <a href="{{route('byName', $drug->id)}}">Pasirinkti</a>
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
