<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $fillable = [
        'logo_img',
        'number',
        'address',

      'welcome_text',
      'welcome_img',

      'conductor_text',
      'conductor_img',

        'musem_text',
        'musem_img',

        'pred_footer_text',
    ];
}
