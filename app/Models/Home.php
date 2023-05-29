<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    public $fillable = ['foto','foto2','fotoheader'];

    // method menampilkan image(foto)
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/home/' . $this->foto))) {
            return asset('images/home/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(foto) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/home/' . $this->foto))) {
            return unlink(public_path('images/home/' . $this->foto));
        }
    }
    public function image2()
    {
        if ($this->foto2 && file_exists(public_path('images2/home/' . $this->foto2))) {
            return asset('images2/home/' . $this->foto2);
        } else {
            return asset('images2/no_image.jpg');
        }
    }
    // mengahupus image(foto2) di storage(penyimpanan) public
    public function deleteImage2()
    {
        if ($this->foto2 && file_exists(public_path('images2/home/' . $this->foto2))) {
            return unlink(public_path('images2/home/' . $this->foto2));
        }
    }
    public function imageheader()
    {
        if ($this->fotoheader && file_exists(public_path('imagesheader/home/' . $this->fotoheader))) {
            return asset('imagesheader/home/' . $this->fotoheader);
        } else {
            return asset('imagesheader/no_image.jpg');
        }
    }
    // mengahupus image(fotoheader) di storage(penyimpanan) public
    public function deleteImageheader()
    {
        if ($this->fotoheader && file_exists(public_path('imagesheader/home/' . $this->fotoheader))) {
            return unlink(public_path('imagesheader/home/' . $this->fotoheader));
        }
    }
}
