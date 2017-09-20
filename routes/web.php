<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if(App::environment('production')) {
    URL::forceScheme('https');
}
Route::get('/', function () {
    return view('main.landing');
});

Route::get('/login', function() {
    return view('dealer.login');
});

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/inquiry', function() {
    return view('main.dealer');
});

Route::get('/about', function() {
    return view('main.about');
});

Route::get('/contact', function() {
    return view('main.contact');
});

Route::get('/products', function() {
    return view('products.landing');
});

Route::get('/products/cat/{id}', function() {
    return view('products.landing');
});

Route::get('/products/product/{id}', function() {
    return view('products.product');
});

Route::get('/dealer', function() {
    return view('dealer.landing');
})->middleware('auth');

Route::get('/dealer/account', function() {
    return view('dealer.account');
})->middleware('auth');

Route::get('/dealer/orders', function() {
    return view('dealer.orders');
})->middleware('auth');

Route::get('/dealer/order/{id}', function() {
    return view( 'dealer.order');
})->middleware('auth');

Route::get('/dealer/tracking', function() {
    return view('dealer.tracking');
})->middleware('auth');

Route::get('/dealer/cart', function() {
    return view('dealer.cart');
})->middleware('auth');

Route::get('/locator', function() {
    return view('locator.landing');
});

Route::get('/dsadmin/login', function() {
    return view('admin.login');
});

Route::group(['prefix' => 'dsadmin', 'middleware' => ['auth', 'admin']], function() {

    Route::get('/', function() {
        return view('admin.landing');
    });

    Route::get('/applications', function() {
        return view('admin.applicants');
    });

    Route::get('/application/{id}', function() {
        return view('admin.application');
    });

    Route::get('/categories', function() {
        return view('admin.categories');
    });

    Route::get('/contacts', function() {
        return view('admin.contacts');
    });

    Route::get('/contact/{id}', function() {
        return view('admin.contact');
    });

    Route::get('/dealers', function() {
        return view('admin.dealers');
    });

    Route::get('/dealer/{id}', function() {
        return view('admin.dealer');
    });
    Route::get('/orders', function() {
        return view('admin.orders');
    });

    Route::get('/order/{id}', function() {
        return view('admin.order');
    });

    Route::get('/pricing', function() {
        return view('admin.pricing');
    });

    Route::get('/products', function() {
        return view('admin.products');
    });

    Route::get('/product/{id}', function() {
        return view('admin.product');
    });

    Route::get('/promotions', function() {
        return view('admin.promotions');
    });

    Route::get('/tracking', function() {
        return view('admin.tracking');
    });
});

Auth::routes();
