<?php

namespace App\Models;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsTo(Purchase::class);
    }
}
