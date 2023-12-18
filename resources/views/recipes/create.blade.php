<x-layout>
    <form action="/recipes/store" method="post">
        @csrf
        <div class="form-group">
            <label for="nameRecipe">Naam recept</label>
            <input type="text" name="nameRecipe" id="nameRecipe" class="form-control">
        </div>
        <div class="form-group">
            <label for="descriptionRecipe">Beschrijving</label>
            <textarea name="descriptionRecipe" id="descriptionRecipe" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="cookTime">Kooktijd</label>
            <input type="number" name="cookTime" id="cookTime" class="form-control">
        </div>
        <div class="form-group">
            <label for="category">Categorie</label>
            <select name="category" id="category" class="form-select">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-1">Maak recept!</button>

    </form>
</x-layout>
