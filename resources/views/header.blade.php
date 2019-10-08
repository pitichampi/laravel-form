<p>
    Vous avez visité cette page {{$count}}
</p>
<p>
    {{HelloFunction('Pierre')}}

</p>
<p>
    {{Hello2Function('Pierre')}}

</p>
<p>
    {{DummyFunction()}}

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

