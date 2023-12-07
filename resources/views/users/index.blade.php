Hier komt een gebruikers overzicht

<x-layout>
    @foreach($users as $user)
    <div>
        <h1>{{$user}}</h1>
    </div>
    @endforeach
</x-layout>
