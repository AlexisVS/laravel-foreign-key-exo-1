@extends("template.index")
@section('content')
    <div class="d-flex">
        <div class="d-flex flex-column align-items-center w-50 mt-5">
            <h2>Ajouter une categorie</h2>
            <form action="/category" method="POST">
                @csrf
                @method("POST")
                <input type="text" name="name">
                <input type="submit" value="Sauver">
            </form>
        </div>
        <div class="d-flex flex-column align-items-center w-50 mt-5">
            <h2>Ajouter un film</h2>
            <form class="d-flex flex-column" action="/film" method="POST">
                @csrf
                @method("POST")
                <input class="my-2" type="text" name="name">
                <select class="mb-2" name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Sauver">
            </form>
        </div>
    </div>
    <hr class="my-5">

    <div class="container">
        <h2 class="text-center">Les films</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">category</th>
                    <th scope="col">film</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            @foreach ($films as $film)
                                @if ($film->category_id == $category->id)
                                    <p>{{ $film->name }}</p>
                                @endif
                            @endforeach
                        </td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
