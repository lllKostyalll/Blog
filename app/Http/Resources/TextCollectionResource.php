<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TextCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
	    $out=[];
	    /*
	foreach($request as $resource){
	//foreach($resource as $this){
		$out[]=['text'=>$resource->text];
	}
	     */
	    //return $out;
	return ['text'=>$request];
	//return $this;
        //return parent::toArray($request);
    }
}
