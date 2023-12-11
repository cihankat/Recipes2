<x-layout>
    <h1>
        Ingredient: {{ $ingredient->name }}
    </h1>
    <div>
        <a href="/ingredients/edit/{{ $ingredient->id }}" class="btn btn-warning">Edit</a>
        <a href="/ingredients/delete/{{ $ingredient->id }}" class="btn btn-danger">Verwijder</a>
    </div>
</x-layout>
