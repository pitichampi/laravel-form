@extends('../layout')
@section('title')
    Plateforme de films
@endsection


@section('content')
<h2>Liste des films proposés</h2>
@php

    // var_dump($films);

    @endphp

<table id="movies" class="table">

{{--    Pas de ; après une commande blade --}}
@each('Films.film',$films,'film','Films.nofilm')

</table>

@endsection
