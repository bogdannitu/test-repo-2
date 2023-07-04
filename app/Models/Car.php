<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\GeneratedTraits\CarTrait;

class Car extends EloquentModel
{
    use CarTrait;
}
