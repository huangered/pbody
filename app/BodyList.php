<?php

namespace pbody;

use Illuminate\Database\Eloquent\Model;

class BodyList extends Model
{
	protected $table = 'bodylists';
	protected $fillable = ['bust', 'waist', 'upperarm'];
    //
	public function user() {
		return $this->belongsTo('pbody\User');
	}
}
