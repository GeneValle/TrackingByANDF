<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descartados extends Model
{
    use HasFactory;

    public function contacto()
    {
        return $this->belongsTo(Contactos::class, 'contactos_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
