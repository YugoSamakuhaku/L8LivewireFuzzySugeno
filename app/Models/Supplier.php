<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'suppliers';
    protected $primaryKey = 'id_supplier';

    protected $fillable = [
        'name_supplier',
        'phone_supplier',
        'address_supplier',
        'description_supplier',
    ];

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class, 'id_supplier', 'id_supplier');
    }
}
