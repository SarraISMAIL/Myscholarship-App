<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpportunityDetail extends Model
{
   public function opportunity($opportunity){
       return $this ->belongsTo(Opportunity::class);
   }
}
