<?php
namespace App\Http\Livewire\Generated\Backoffice\Car;

use App\Models\Car;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Backoffice\Car\Create`
*/
trait CreateTrait
{
    public Car $car;

    
    public function mount(Car $car)
    {
        $this->car = $car;
            }

    public function render()
    {
        return view('livewire.generated.backoffice.car.create');
    }

    public function submit()
    {
        $this->validate();

        $this->car->save();
        
        return redirect()->route('laragen.admin.car.index');
    }

    public function rules(): array
    {
        return [
                                                                    'car.name' => [
                                                                                    'required'
                                ],
                    ];
    }
}
