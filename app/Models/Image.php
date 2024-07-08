<?php

namespace App\Models;

use App\Models\Register;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['imageID', 'imagePath', 'NIK'];

    public function applicant(){
        return $this->belongsTo(Register::class, 'NIK');
    }
}
