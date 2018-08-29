<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
    public function absence(){
        return $this->BelongsTo('App\Absence');
    }

    public function store($request){
        $justification =new self;
        $justification->absence_id=$request->absence_id;
        $justification->subject = $request->subject;
        $justification->body = $request->body;
        $justification->absence->status = 2;
        $justification->absence->save();
        $justification->save();

        return $justification;
    }

}
