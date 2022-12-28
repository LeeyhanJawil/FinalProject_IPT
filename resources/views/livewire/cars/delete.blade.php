<div>

    <div class="card shadow border border-light">
        <div class="card-header bg-danger">
            <h5 class="text-white text-center mt-2">Delete Car?</h5>
        </div>
        <div class="card-body">
            <div class="col-md-4 offset-md-4">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid mb-3 rounded-circle mt-3 img-responsive center-block d-block mx-auto" style="width: 90px;">
            </div>
            <table class="table">
                <tr>
                    <th >
                        Car Name
                    </th>
                    <td>
                        {{ $this->car->car_name }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Car Brand
                    </th>
                    <td>
                        {{ $this->car->car_brand }}
                    </td>
                </tr>
                <tr>
                    <th >
                         Price
                    </th>
                    <td>
                        {{ $this->car->price }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Color
                    </th>
                    <td>
                        {{ $this->car->color }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-info mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>

