<?php
namespace App\Http\Livewire\App\Backoffice\Car;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Generated\Backoffice\Car\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
