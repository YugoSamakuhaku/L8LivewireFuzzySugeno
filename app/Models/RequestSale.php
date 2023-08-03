<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSale extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'request_sales';
    protected $primaryKey = 'id_sale';

    protected $fillable = [
        'id_user',
        'qty_sale',
        'date_sale',
    ];

    public function users()
    {
        $this->belongsTo(User::class);
    }

    public function master_products()
    {
        return $this->belongsToMany(MasterProduct::class, 'detail_request_sales', 'id_sale', 'id_product')->withPivot('qty');
    }
}
