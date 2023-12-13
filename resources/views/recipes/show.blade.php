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
</x-layout>
