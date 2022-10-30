<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function mark()
    {
        $this->status = $this->status ? false : true;
        $this->save();
    }
}
