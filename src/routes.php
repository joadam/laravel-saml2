<?php


Route::group([
    'prefix' => config('saml2_settings.routesPrefix'),
    'middleware' => config('saml2_settings.routesMiddleware'),
], function () {

    Route::get('/logout', array(
        'as' => 'saml_logout',
        'uses' => 'Clevyr\Saml2\Http\Controllers\Saml2Controller@logout',
    ));

    Route::get('/login', array(
        'as' => 'saml_login',
        'uses' => 'Clevyr\Saml2\Http\Controllers\Saml2Controller@login',
    ));

    Route::get('/metadata', array(
        'as' => 'saml_metadata',
        'uses' => 'Clevyr\Saml2\Http\Controllers\Saml2Controller@metadata',
    ));

    Route::post('/consume', array(
        'as' => 'saml_consume',
        'uses' => 'Clevyr\Saml2\Http\Controllers\Saml2Controller@consume',
    ));

    Route::get('/sls', array(
        'as' => 'saml_sls',
        'uses' => 'Clevyr\Saml2\Http\Controllers\Saml2Controller@sls',
    ));
});
