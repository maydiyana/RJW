<?php

namespace App\Models;

use App\Http\Controllers\KeluarController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id', 'catagory_id', 'exc', 'slug', 'pengirim', 'penerima', 'tanggal', 'tanggalkeluar', 'image'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return  $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });
        $query->when($filters['catagory'] ?? false, function ($query, $catagory) {
            return $query->whereHas('catagory', function ($query) use ($catagory) {
                $query->where('slug', $catagory);
            });
        });
        $query->when($filters['authors'] ?? false, function ($query, $authors) {
            return $query->whereHas('authors', function ($query) use ($authors) {
                $query->where('username', $authors);
            });
        });
    }

    public function catagory()
    {
        return $this->belongsTo(Catagory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function authors()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
