<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $fillable = ['foto'];

    // method menampilkan image(foto)
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/service/' . $this->foto))) {
            return asset('images/service/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(foto) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/service/' . $this->foto))) {
            return unlink(public_path('images/service/' . $this->foto));
        }
    }
}
