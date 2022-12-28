<?php

namespace App\Http\Livewire\Cars;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Car;

class Create extends Component
{
    public $car_name, $car_brand, $price, $color;

    public function addCar() {
        $this->validate([
            'car_name'             =>          ['required', 'string', 'max:255'],
            'car_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        Car::create([
            'car_name'             =>      $this->car_name,
            'car_brand'            =>      $this->car_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Added Car ' .$this->car_name;
        event(new UserLog($log_entry));

        return redirect('/car')->with('car', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.cars.create');
    }
}
