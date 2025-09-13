<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function company_profile(){
		$video = 'video/company_profile.mp4';
		return view('company_profile', compact('video'));
	}
}
