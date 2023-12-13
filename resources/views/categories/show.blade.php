<x-layout>

    <h1>
        Category: {{ $category->name }}
    </h1>



      <div class="recipes">
        @foreach($category->recipes as $recipe)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        <h5 class="card-title">{{$recipe->name}}</h5>
              <p class="card-text">{{$recipe->description}}</p>
              <a href="/recipes/show/{{$recipe->id}}" class="card-link">Show Recipe</a></a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        @endforeach
      </div>

</x-layout>
