<x-layout>
    <form action="/ingredients/update/{{ $ingredient->id }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name_ingredient">Name</label>
            <input type="text" name="name_ingredient" id="name_ingredient" value="{{ $ingredient->name }}">
        </div>
        <button type="submit" class="btn btn-warning mt-2">Update ingredient</button>
    </form>
</x-layout>
