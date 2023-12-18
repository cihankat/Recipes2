<x-layout>
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
                {{$ingredient->pivot->unity}}
            </li>
        @endforeach
    </ul>
</x-layout>

