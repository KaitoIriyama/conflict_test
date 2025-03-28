<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('last_name', 'like', '%' . $keyword . '%')
                    ->orwhere('first_name', 'like', '%' . $keyword . '%')
                    ->orwhere('email', 'like', '%' . $keyword . '%');
        }
    }

    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
    }

    public function scopeCategorySearch($query, $category_id)
    {
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }

    public function scopeDateSearch($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at', 'like',  $date . '%');
        }
    }

    public function scopeTest5($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at', 'like',  $date . '%');
        }
    }

    public function scopeTest4($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at', 'like',  $date . '%');
        }
    }

    public function scopeTest3($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at', 'like',  $date . '%');
        }
    }

    public function scopeTest2($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at', 'like',  $date . '%');
        }
    }

    public function scopeTest1($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at', 'like',  $date . '%');
        }
    }

    public function scopeSample4($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at',  $date);
        }
    }
    public function scopeSample3($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at',  $date);
        }
    }
    public function scopeSample2($query, $date)
    {
        if (!empty($date)) {
            $query->where('created_at', 'like',  $date . '%');
        }
    }
    public function scopeSample1($query, $date)
    {
        if (!empty($date)) {
            $query->where('updated_at', 'like',  $date . '%');
        }
    }
}
