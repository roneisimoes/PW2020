@extends('template') 

@section('conteudo') 
    <div class="alert alert-{{ $classe }}">{{$msg}} </div>
       
@endsection