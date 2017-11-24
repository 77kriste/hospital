@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

                  @if (Auth::check())
                  @if(Auth::user()->isBoss())
                  <a href="{{route('pForm') }}" class="btn btn-lg btn-block btn-info">Įvesti paciento duomenis</a>

                  @elseif(Auth::user()->isDoctor())
                  <a href="{{route('prForm') }}" class="btn btn-lg btn-block btn-info">Išrašyti receptą</a>

                  @elseif(Auth::user()->isSam())
                  <a href="{{route('dForm') }}" class="btn btn-lg btn-block btn-info">Įregistruoti receptinį vaistą</a>
                  @endif
                  @endif
        </div>
    </div>
</div>
@endsection
