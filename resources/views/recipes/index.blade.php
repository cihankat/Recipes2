<x-layout>
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
                    <td>{{ $recipe->category }}</td>
                    <td>
                        <ul class="list-group">
                            @foreach ($recipe->ingredients as $ingredient)
                                <li class="list-group-item">{{ $ingredient->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a href="/recipes/edit/{{ $recipe->id }}">Edit</a>
                        <a href="/recipes/show/{{ $recipe->id }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
