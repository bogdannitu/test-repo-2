<?php
namespace App\Http\Livewire\App\User\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Generated\User\User\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
