@extends('../layout')
@section('title')
    Plateforme de films
@endsection

@hello('pierre')
@section('content')
<h2>Liste des films proposés</h2>
@php

    // var_dump($films);

    @endphp

<table id="movies" class="table">

{{--    Pas de ; après une commande blade --}}
@each('Films.film',$films,'film','Films.nofilm')

</table>

@component('bootstrap::modal')


    @slot('title')
        This is the title
    @endslot
    @slot("id")
        mymodal
    @endslot
    This is the content of the modal

    @slot('footer')
        This is the footer
    @endslot
@endcomponent


@endsection
