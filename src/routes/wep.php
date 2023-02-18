<?php

use Illuminate\Support\Facades\Route;
use prodCoders\RolesPermissions\RoleTest;

Route::group(['prefix' => 'role'], function () {
    Route::get('/{name}', function($sName) {
        $oGreetr = new RoleTest();
        return $oGreetr->greet($sName);
    });
});
