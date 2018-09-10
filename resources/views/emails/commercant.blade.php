<div>
    Nouvelle demande de place sur un marché :<br>

    Nom: {{ $commercant->nom }}<br>
    Prénom: {{ $commercant->prenom }}<br>
    Email: {{ $commercant->email }}<br>
    
    {{-- Loop through activities and insert comma if needed --}}
    Activités:
    @foreach($commercant->activites as $key => $activite)
    
        @if( $key == ( count( $commercant->activites ) - 1 ) )
            {{ $activite->nom }}
        @else
            {{ $activite->nom }},
        @endif

    @endforeach

</div>