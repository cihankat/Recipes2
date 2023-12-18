<h1>Recept {{ $recipe->name }}</h1>
<form action="/recipes/update/{{ $recipe->id }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nameRecipe">Naam recept</label>
        <input type="text" name="nameRecipe" id="nameRecipe" value="{{ $recipe->name }}">
    </div>
    <div class="form-group">
        <label for="descriptionRecipe">Beschrijving</label>
        <textarea name="descriptionRecipe" id="descriptionRecipe" cols="30" rows="10">{{ $recipe->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="cookTime">Kooktijd</label>
        <input type="number" name="cookTime" id="cookTime" value="{{ $recipe->cook_time }}">
    </div>
    <div class="form-group">
        <label for="category">Categorie</label>
        {{-- <input type="text" name="category" id="category" value="{{$recipe->category->name}}"> --}}
        <select name="category" id="">
            <option value="" selected disabled>Huidige: {{ $recipe->category->name }}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Update recept!</button>

</form>
