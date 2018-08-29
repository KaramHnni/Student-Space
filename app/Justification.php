<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{



    public function getStatusAttribute(){
        if($this->status == 0){
            return "refused";
        }

        if($this->status == 1){
            return "under study";
        }

        if($this->status == 2 ){
            return "accepted";
        }
    }
    public function absence(){
        return $this->BelongsTo('App\Absence');
    }

    public function store($request){
        $justification =new self;
        $justification->absence_id=$request->absence_id;
        $justification->subject = $request->subject;
        $justification->body = $request->body;
        $justification->status = 1 ;
        $justification->absence->status = 2;
        $justification->absence->save();
        $justification->save();

        return $justification;
    }

}
