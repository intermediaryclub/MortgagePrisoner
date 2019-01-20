<?php
//Force HTTPS

Route::namespace('IntermediaryClub\MortgagePrisoner\Http')->middleware('web')->group( function () {
	Route::get('/', 'StaticController@index')->name("home");
	Route::get('overpaymentcalculator', 'StaticController@calculatoroverpayment')->name("calculator.overpayment");
	Route::get('whatami', 'StaticController@whatami')->name("whatami");
	Route::get('solutions', 'StaticController@solutions')->name("solutions");
	Route::get('enquiry', 'StaticController@enquiry')->name("enquiry");
	Route::get('enquiry/{type}', 'StaticController@enquiry')->name("enquiry2");
	Route::post('enquiry', 'StaticController@enquirydo');
});
