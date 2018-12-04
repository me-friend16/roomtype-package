<?php

Route::group(['namespace'=>'Sameer\Roompkg\Http\Controllers'],function(){
    
    Route::resource('room','RoomController');

});

