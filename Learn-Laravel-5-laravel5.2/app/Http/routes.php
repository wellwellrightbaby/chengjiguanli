<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('now', function () {
    return date("Y-m-d H:i:s");
});


Route::get('/', 'IndexController@index');

Route::get('stumessage', 'StumessageController@index');

Route::get('addstumessage', 'StumessageController@add');

Route::post('addstumessagestore', 'StumessageController@store');

Route::any('stumessagedel','StumessageController@del');

Route::any('stumessagechange','StumessageController@change');

Route::any('stumessageupdate','StumessageController@update');



Route::get('coursemessage', 'CoursemessageController@index');

Route::get('addcoursemessage', 'CoursemessageController@add');

Route::post('addcoursemessagestore', 'CoursemessageController@store');

Route::any('coursemessagedel','CoursemessageController@del');

Route::any('coursemessagechange','CoursemessageController@change');

Route::any('coursemessageupdate','CoursemessageController@update');



Route::get('coursemessage', 'CoursemessageController@index');

Route::get('addcoursemessage', 'CoursemessageController@add');

Route::post('addcoursemessagestore', 'CoursemessageController@store');

Route::any('coursemessagedel','CoursemessageController@del');

Route::any('coursemessagechange','CoursemessageController@change');

Route::any('coursemessageupdate','CoursemessageController@update');




Route::get('scoretable', 'ScoretableController@index');

Route::get('addscoretable', 'ScoretableController@add');

Route::post('addscoretablestore', 'ScoretableController@store');

Route::any('scoretabledel','ScoretableController@del');

Route::any('scoretablechange','ScoretableController@change');

Route::any('scoretableupdate','ScoretableController@update');
