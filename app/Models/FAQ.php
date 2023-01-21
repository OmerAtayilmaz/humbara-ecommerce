<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //Mass assignment
    //erişilebilir
   // protected $fillable=['question','answer','status'];
    protected $fillable=['question','answer','status','created_by','priority'];
    //erişilemez
    protected $guarded=['id'];


    /*
    protected $table= 'saygaAdı'; tablo adı farklı ise
    protected $primaryKey='id'; id farklı ise
    public $timestamps=false; zaman damgaları olmasın
    */
    use HasFactory;
    public function user(){ //fonksiyon adı tablo modeli adı olmak zorundadır!
        return $this->belongsTo(User::class,'created_by','id'); //birinci parametre Faq'dak isim, diğer ise user'daki id
    }

    public function scopeActiveFaqs($query){
        return $query->where('status','active');
    }
    public function scopeFaqsForStorefront($query){
        return $query->ActiveFaqs()->select("id","question","answer","priority");
    }
}
