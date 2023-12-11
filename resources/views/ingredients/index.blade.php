<x-layout>
    <h1>Lijst van ingredienten</h1>
    <ul>

        @foreach ($ingredients as $ingredient)
            <li>
                <a href="/ingredients/show/{{ $ingredient->id }}">{{ $ingredient->name }}</a>
            </li>
        @endforeach
    </ul>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</x-layout>
