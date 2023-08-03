<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InggridientHistory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'inggridients_history';
    protected $primaryKey = 'id_history';

    protected $fillable = [
        'id_inggridient',
        'date',
        'stok_in',
        'stok_out',
        'last_stok',
    ];

    public function master_inggridients()
    {
        return $this->belongsTo(MasterInggridient::class);
    }
}
