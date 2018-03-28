<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function storeImage(Request $request)
	{
		$request->file('image');
		return Storage::putFile('public',$request->file('image'));
	}
}
