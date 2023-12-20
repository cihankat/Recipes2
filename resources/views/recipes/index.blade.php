<x-layout>
<<<<<<< HEAD
    <a href="/recipes/create/">Create Recipe</a>
=======
    @auth
    <a href="/recipes/create">Create Recipe</a>
    @endauth

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
>>>>>>> upstream/main

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Kooktijd</th>
                <th>Categorie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recipes as $recipe)
                <tr>
                    <td>{{ $recipe->name }}</td>
                    <td>{{ $recipe->description }}</td>
                    <td>{{ $recipe->cook_time }}</td>
                    <td>{{ $recipe->category->name }}</td>
                    <td>
<<<<<<< HEAD
                        <a href="/recipes/edit/{{ $recipe->id }}">Edit</a>
                        <a href="/recipes/show/{{ $recipe->id }}">Show</a>
                        <a href="/recipes/delete/{{ $recipe->id }}">Delete</a>
=======
                        @auth

                            <a href="/recipes/edit/{{ $recipe->id }}">Edit</a>
                            <a href="/recipes/show/{{ $recipe->id }}">Show</a>
                            <a href="/recipes/delete/{{ $recipe->id }}">Delete</a>
                        @endauth
>>>>>>> upstream/main
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</x-layout>
