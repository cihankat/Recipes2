<x-layout>
    <h1>{{ $recipe->name }}</h1>
    <p>
        {{ $recipe->decription }}
    </p>
    <p>{{ $recipe->cook_time }}</p>
    <code>
        {{ $recipe->category->name }}
        {{ $recipe->category->flag }}
    </code>


    <ul>

        @foreach ($recipe->ingredients as $ingredient)
            <li>
                {{ $ingredient->name }} |
                {{$ingredient->pivot->quantity}} 
                {{$ingredient->pivot->unity}}
            </li>
        @endforeach
    </ul>

</x-layout>
