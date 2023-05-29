<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $fillable = ['foto'];

    // method menampilkan image(foto)
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/gallery/' . $this->foto))) {
            return asset('images/gallery/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(foto) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/gallery/' . $this->foto))) {
            return unlink(public_path('images/gallery/' . $this->foto));
        }
    }
}
