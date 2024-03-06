<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    /**
     * Get all of the files related to the article.
     */
    public function files()
    {
        return $this->belongsToMany(
            File::class, 'files_related_morphs','related_id','file_id')
                ->where('related_type', 'api::program.program');
       
    }
}
