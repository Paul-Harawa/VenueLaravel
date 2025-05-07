<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Product extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->userid = Auth::id();
        });


        
    }


    protected $fillable = [
        'code',
        'name',
        'price',
        'description',        
        'capacity',
        'function',
        'location',
        'offer',
        'catering',
        'image',
        'path',
        'extension',        
        'disability'
    ];


    
    public function setImageAttribute($image)
    {
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);

            // Automatically set model fields
            $this->attributes['image'] = $imageName;
            $this->attributes['path'] = $imagePath;
            $this->attributes['extension'] = $image->getClientOriginalExtension();
        }
    }


    

 
}