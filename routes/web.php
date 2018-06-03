<?php

Route::auth();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/{id?}', 'HomeController@index')->name('home')->where('id', '[0-9]+');

    Route::get('stats', 'StatController@monthStat')->name('stats.monthStat');
    Route::get('stats/unique-visit', 'StatController@uniqueVisit')->name('stats.uniqueVisit');
    Route::get('stats/portal-visit', 'StatController@portalVisit')->name('stats.portalVisit');
    Route::get('stats/user-birthday', 'StatController@userBirthday')->name('stats.userBirthday');
});
