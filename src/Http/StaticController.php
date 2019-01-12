<?php

namespace IntermediaryClub\MortgagePrisoner\Http;

use Illuminate\Routing\Controller as BaseController;
use SEO;

class StaticController extends BaseController{
  public function index(){
      SEO::setTitle('Finance for Property Investors');
      return view('BespokeFinance::home');
  }
}
