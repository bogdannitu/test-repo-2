<?php
    namespace App\Http\Livewire\Generated\Backoffice\Car\Wheel;

use App\Models\Wheel;
use Illuminate\Http\RedirectResponse;
use Livewire\Redirector;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Backoffice\Wheel\Index`
*/
trait IndexTrait
{
            use \Hehecoding\LaragenUiKit\Traits\WithConfirmation;
        public int $perPage = 10;
//asdasdasd
            public bool $hideEditAction = true;

        public bool $hideShowAction = true;

        public bool $hideDeleteAction = false;
        public bool $hideDefaultActions = false;

    public function render()
    {
                    return view('livewire.generated.backoffice.car.wheel.index', [
                'items' => $this->getQuery()
            ]);
            }

    protected function getQuery(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Wheel::paginate($this->perPage);
    }

            public function delete(Wheel $wheel): null|Redirector|RedirectResponse
        {
                                        
            $wheel->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.car.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
