<tr class="movie center-align">
    <td class="movie-cover">
        <div class="movie-info">
            <div class="movie-title">
                {{$film['titre']}}
            </div>
            <div class="movie-auteur">
                {{$film['auteur']}}
            </div>
            <div class="movie-genre">
                {{$film['genre']}}
            </div>
            <div class="movie-annee">
                {{$film['annee']}}
            </div>
        </div>
        <div>
            <img id="{{$film['id']}}" class="responsive-img"
                 src="{{ asset('img/'.$film['img']) }}"> {{-- asset est un helpeur qui pointe vers le répertoire public --}}
        </div>
    </td>
    <td>
        {{  $film['synopsys'] }}
    </td>
</tr>

@push('click-img')

    <script>
        document.getElementById('{{$film['id']}}').addEventListener('click', function () {
            console.log('id du film : {{$film['id']}}');
        });
    </script>

@endpush
