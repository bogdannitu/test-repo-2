<?php
    namespace App\Http\Livewire\Generated\User\User;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Livewire\Redirector;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\User\User\Index`
*/
trait IndexTrait
{
            use \Hehecoding\LaragenUiKit\Traits\WithConfirmation;
        public int $perPage = 10;

    public bool $hideDefaultActions = false;

    public function render()
    {
        return view('livewire.generated.user.user.index', [
            'items' => $this->getQuery()
        ]);
    }

    protected function getQuery(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return User::paginate($this->perPage);
    }

            public function delete(User $user): null|Redirector|RedirectResponse
        {
            
            $user->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.users.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
