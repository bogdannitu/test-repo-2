<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\GeneratedTraits\WheelTrait;

class Wheel extends EloquentModel
{
    use WheelTrait;
}
