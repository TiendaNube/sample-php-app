<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', ['before' => 'auth', function(){
    $store = Auth::user();
    
    $api = new TiendaNube\API($store->tiendanube_id, $store->access_token, 'Awesome App (contact@awesome.com)');
    $response = $api->get("products");
    
    return View::make('hello')
        ->with('products', $response->body)
        ->with('lang', $response->main_language);
}]);


Route::get('/auth', function(){
    //Obtain access token
    $code = Input::get('code');
    $auth = new TiendaNube\Auth(Config::get('tiendanube.client_id'), Config::get('tiendanube.client_secret'));
    $store_info = $auth->request_access_token($code);

    //Create or edit existing store with the provided access token
    $store = Store::where('tiendanube_id', $store_info['store_id'])->first();
    
    if ($store == null){
        $store = new Store();
        $store->tiendanube_id = $store_info['store_id'];
    }

    $store->access_token = $store_info['access_token'];
    $store->save();

    //Login and redirect to homepage
    Auth::login($store);
    return Redirect::to('/');
});
