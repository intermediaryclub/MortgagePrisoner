<?php
//Force HTTPS

Route::namespace('IntermediaryClub\MortgagePrisoner\Http')->middleware('web')->group( function () {
	Route::get('/', 'StaticController@index')->name("home");
});