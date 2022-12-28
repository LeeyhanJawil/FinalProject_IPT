<?php

namespace App\Http\Livewire\Cars;

use App\Events\UserLog;
use App\Models\Car;
use Livewire\Component;

class Edit extends Component
{

    public $carId;
    public $car_name, $car_brand, $price, $color;
    public function mount() {
        $this->car_name = $this->car->car_name;
        $this->car_brand = $this->car->car_brand;
        $this->price = $this->car->price;
        $this->color = $this->car->color;

    }

    public function editCar() {
        $this->validate([
            'car_name'             =>          ['required', 'string', 'max:255'],
            'car_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->car->update([
            'car_name'             =>      $this->car_name,
            'car_brand'            =>      $this->car_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Update Car: "' .$this->car->car_name . '" with and ID: ' . $this->car->id;
        event(new UserLog($log_entry));

        return redirect('/car')->with('car', 'Updated Successfully');
    }

    public function back() {
        return redirect('/car');
    }
    public function getCarProperty() {
        return Car::find($this->carId);
    }

    public function render()
    {
        return view('livewire.cars.edit');
    }
}
