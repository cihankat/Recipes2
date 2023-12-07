<x-layout>
    <form action="/ingredients/store" method="post">
        @csrf
        <div class="form-group">
            <label for="name_ingredient">Name</label>
            <input type="text" name="name_ingredient" id="name_ingredient">
        </div>
        <button type="submit" class="btn btn-success mt-2">Maak ingredient</button>
    </form>
</x-layout>
