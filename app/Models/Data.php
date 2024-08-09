<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Data extends Model
{

    protected $table = 'gempa';

    protected $fillable = [
        "datetime",
        "lat",
        "lon",
        "mag",
        "dep",
    ];

    public static function getData()
    {
        return self::all();
    }
}
?>