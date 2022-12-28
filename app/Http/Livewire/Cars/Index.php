<?php

namespace App\Http\Livewire\Cars;

use Livewire\Component;
use App\Models\Car;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $color ='all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadCars()
     {
        $query = Car::orderBy('car_name')
            ->search($this->search);

        if ($this->color != 'all') {
            $query->where('color', $this->color);
        }

        $cars = $query->paginate(5);

        return compact('cars');
    }

    public function render()
    {
        return view('livewire.cars.index', $this->loadCars());
    }
}
