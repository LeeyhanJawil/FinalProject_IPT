<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <select value="form-select" wire:model.lazy="color">
                    <option value="all">All</option>
                    <option hidden="true">Select Color</option>
                        <option selected disabled>Select Color</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                        <option value="red">Red</option>
                        <option value="pink">Pink</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
            </div>

        </div>

    </div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-info">
            <tr>
                <th>ID No</th>
                <th>Car Name</th>
                <th>Car Brand</th>
                <th>Price</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->car_name }}</td>
                    <td>{{ $car->car_brand }}</td>
                    <td>{{ $car->price }}</td>
                    <td>{{ $car->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['car' => $car->id]) }}" class="btn btn-primary" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['car' => $car->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
            @if($cars->count() == 0)
                        <td colspan="7" class="text-center">
                            No cars found in this table.
                        </td>
                    @endif
        </tbody>
    </table>
    {{$cars->links()}}
</div>