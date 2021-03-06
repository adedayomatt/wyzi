<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
	protected $fillable = ['vendor_id','category_id','name','about','address','email','phone1','phone2','slug','cover','avatar'];

	public function vendor(){
		return $this->belongsTo('App\Vendor');
	}
	public function products(){
		return $this->hasMany('App\Product');
    }
    public function services(){
		return $this->hasMany('App\Service');
	}
	public function category(){
		return $this->belongsTo('App\Category');
		}

    public function tags(){
			return $this->belongsToMany('App\Tag');
		}
		
    public function photos(){
		return $this->hasMany('App\BusinessGallery');
	}

	public function settings(){
		return $this->hasOne('App\BizSetting');
	}

//check if the business belong to a particular vendor
	public function ownedBy($vendor_id){
		return $this->vendor_id === $vendor_id ? true : false;
	}

	public function avatar(){
		$image = array();
		$image['src'] = $this->avatar === null ? asset('storage/images/business/avatar/default.png') : asset('storage/images/business/avatar/'.$this->avatar);
		$image['alt'] = $this->name. ' on '.config('app.name');
		return $image;
	}
	public function cover(){
		$image = array();
		$image['src'] = $this->cover === null ? asset('storage/images/business/cover/default.png') : asset('storage/images/business/cover/'.$this->cover);
		$image['alt'] =  $this->name. ' on '.config('app.name');
		return $image;
	}

	public function gallery(){
		$image = array();
		$image['src'] = asset('storage/images/business/gallery/default.png');
		$image['alt'] = $this->name.' on '.config('app.name');
		return $image;
	}

	public function slug(){
		return '@'.$this->slug;
	}
	
	public function about($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->about == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': str_limit(strip_tags($this->about),200);
		}
		return $this->about == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': $this->about;
	}
}
