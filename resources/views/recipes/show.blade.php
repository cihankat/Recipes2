<x-layout>
<<<<<<< HEAD
<h1>{{ $recipe->name }}</h1>
<p>
    {{ $recipe->decription }}
</p>
<p>Cooktime: {{ $recipe->cook_time }}</p>
<code>
    <p>
        Category name:
        {{ $recipe->category->name }}
    </p>
    <p>
        Category flag:
        {{ $recipe->category->flag }}
    </p>
</code>
    <ul>
        @foreach ($recipe->ingredients as $ingredient)
            <li>
                {{ $ingredient->name }} | 
                {{$ingredient->pivot->quantity}}
=======
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
>>>>>>> upstream/main
                {{$ingredient->pivot->unity}}
            </li>
        @endforeach
    </ul>
<<<<<<< HEAD
</x-layout>

=======

</x-layout>
>>>>>>> upstream/main
