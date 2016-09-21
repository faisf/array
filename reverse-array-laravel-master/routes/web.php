<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('siswa', 'SiswaController@siswa');

/**
** create by andy natalino lihan
** no absen : 09
**/
