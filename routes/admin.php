<?php


Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth:admin'] ,function (){


    Route::resource('teams','TeamController');
    Route::resource('partners','partnerController');
    Route::resource('clients','ClientController');
    Route::resource('services','serviceController');
    Route::resource('companies','CompanyController');
    Route::resource('trainings','TrainingController');

    Route::resource('certifications','CertificationController');
    Route::get('certification/request','CertificationController@cerification_request');
    Route::get('add/certificate/{id?}','CertificationController@add_certificate');
    Route::post('add/certificate/','CertificationController@save_certificate')->name('saveCertificate');
    Route::get('generate/serial/{id}','CertificationController@generate_serial');
    Route::get('show/certificate/pdf/{id}','CertificationController@certificate_show')->name('certificate.show');
    Route::get('edit/certificate/{id}','CertificationController@certificate_Edit')->name('certificate.edit');
    Route::post('update/certificate/{id}','CertificationController@Update_certificate')->name('certificate.update');





    Route::resource('tags','TagController');
    Route::get('branch','BranchController@index');
    Route::post('branch','BranchController@update')->name('branch.update');
    Route::get('dashboard','adminController@dashboard')->name('homePage');

    Route::get('our/values','settingController@Our_Values');
    Route::post('our/values','settingController@Our_Values_Update')->name('ourValue.update');

    Route::get('contactus','settingController@contactus');
    Route::post('contactus','settingController@ContactUs_update')->name('contact.update');

    Route::get('logout','adminController@Logout')->name('Logout');

});



Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'guest:admin'] ,function (){
    Route::get('login','adminController@ShowLogin');
    Route::post('login','adminController@doLogin')->name('doLogin');

});
