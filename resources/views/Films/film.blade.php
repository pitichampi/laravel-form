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
            <img class="responsive-img" src="{{ asset('img/'.$film['img']) }}"> {{-- asset est un helpeur qui pointe vers le répertoire public --}}
        </div>
    </td>
    <td>
        {{  $film['synopsys'] }}
    </td>
</tr>
