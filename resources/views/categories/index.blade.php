<x-layout>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>flag</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="categories/show/{{$category->id}}">{{ $category->name }}</a></td>
                    <td>{{ $category->flag }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
