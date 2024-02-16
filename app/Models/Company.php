<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = [
        'logo_full_path',
    ];

    /**
     * Get the company employees.
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    /**
     * Store file for logo and save file hash.
     */
    public function storeLogo($file)
    {
        $name = $file->hashName();

        $upload = Storage::disk('public')->put("logos", $file);

        $this->logo = $name;
    }

    /**
     * Retrieve file path as an attribute.
     */
    public function getLogoFullPathAttribute()
    {
        return url("storage/logos/{$this->logo}");
    }
}
