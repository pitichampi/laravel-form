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
<h2>{{__('messages.welcome')}}</h2>

{{-- Affichage des messages --}}


    @if(Session::has('message'))

        @component('alerte')
            @slot('status')
                {{Session::get('status')}}
            @endslot
            {{Session::get('message')}}
        @endcomponent
        @endif

