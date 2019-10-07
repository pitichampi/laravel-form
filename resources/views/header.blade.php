<p>
    Vous avez visité cette page {{$count}}
</p>

{{-- Affichage des messages --}}


    @if(Session::has('message'))

        @component('alerte')
            @slot('status')
                {{Session::get('status')}}
            @endslot
            {{Session::get('message')}}
        @endcomponent
        @endif

