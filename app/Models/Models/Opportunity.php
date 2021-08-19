<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
   public function detail(){
       return $this->hasOne(OpportunityDetail::class);
   }
}
