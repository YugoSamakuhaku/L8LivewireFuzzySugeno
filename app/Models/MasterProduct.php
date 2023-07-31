<?php

namespace App\Models;

use App\Models\RequestSale;
use App\Models\MasterInggridient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterProduct extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'master_products';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'name_product',
        'unit_product',
        'price_product',
    ];

    public function master_inggridients()
    {
        return $this->belongsToMany(MasterInggridient::class, 'product_inggridients', 'id_product', 'id_inggridient')->withPivot('usage_amount');
    }

    public function request_sales()
    {
        return $this->belongsToMany(RequestSale::class, 'detail_request_sales', 'id_product', 'id_sale')->withPivot('qty');
    }
}
