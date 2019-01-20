<?php

namespace IntermediaryClub\MortgagePrisoner\Http;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SEO;

class StaticController extends BaseController{
  public function index(){
      SEO::setTitle('Mortgage Prisoner Advice', FALSE);
      return view('MortgagePrisoner::home');
  }
  public function calculatoroverpayment(){
      SEO::setTitle('Mortgage Overpayment Calculator');
      return view('MortgagePrisoner::calculatoroverpayment');
  }
  public function whatami(){
      SEO::setTitle('Am I A Mortgage Prisoner?');
      return view('MortgagePrisoner::whatami');
  }
  public function solutions(){
      SEO::setTitle('20 Solutions for Mortgage Prisoners');
      return view('MortgagePrisoner::solutions');
  }
  public function enquiry($type = NULL){
      SEO::setTitle('Free Enquiry');
      return view('MortgagePrisoner::enquiry', ["type" => $type]);
  }
  public function enquirydo(Request $request){
    $callback = $request->only('callback')['callback'];
    //print_r($callback);
    //dd($callback);
    $br = "<br/>\r\n";
    //$content = 'Name: '.$callback["name"].$br;
    $content = 'Name: '.$callback['name'].$br;
    $content .= 'Email: '.$callback["email"].$br;
    $content .= 'Phone: '.$callback["telmobile"].$br;
    $content .= 'Type: '.$callback["type"].$br;
    $content .= 'Notes: '.$callback["notes"].$br;

    $title = 'Mortgage Prisoner: New Enquiry';


    Mail::send('MortgagePrisoner::emails.send', ['title' => $title, 'content' => $content], function ($message) use ($title)
    {
        $message->from('leads@bespokefinance.co', 'Mortgage Prisoner');
        $message->to('leads@bespokefinance.info');
        $message->subject($title);

    });
    $request->session()->flash('callback', TRUE);
    return back();
  }

}
