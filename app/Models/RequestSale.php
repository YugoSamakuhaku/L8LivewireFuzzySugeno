<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function users(): void
    {
        $this->belongsTo(User::class);
    }

    public function master_products()
    {
        return $this->belongsToMany(MasterProduct::class, 'detail_request_sales', 'id_sale', 'id_product')->withPivot('qty');
    }
}
