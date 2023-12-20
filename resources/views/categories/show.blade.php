<x-layout>
    <h1>Category: {{$category->name}}</h1>

    <div class="recipes">
        @foreach($category->recipes as $recipe)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> {{$recipe->name}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">{{$recipe->description}}</p>
              <a href="/recipes/show/{{$recipe->id}}" class="card-link">Show</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>

        @endforeach
    </div>


</x-layout>
