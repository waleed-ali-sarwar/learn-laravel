<?php
// learning routes in laravel same page of prefixing it to same thing well not repeating

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// function of user data
function getData()
{
    $data = [
        1 => ["name" => "waleed", "phone" => "92-346-7493423"],
        2 => ["name" => "ali", "phone" => "92-346-7493423"],
        3 => ["name" => "sarwar", "phone" => "92-346-7493423"],
        4 => ["name" => "hammad", "phone" => "92-346-7493423"],
        5 => ["name" => "adnan", "phone" => "92-346-7493423"],
        6 => ["name" => "mehmooad", "phone" => "92-346-7493423"],
    ];

    return $data;
}
Route::get('/backend', function () {
    return view('welcome');
})->name('backend');

Route::get('/', function () {
    return view('index');
})->name('home');


Route::prefix('page')->group(function () {
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/gallary', function () {
        return "<h1>Gallary is here </h1>";
    });
    Route::get('/blade-template', function () {
        return view('blade-template');
    })->name('blade');
});
// Services View
Route::get('/services', function () {
    return view('services');
})->name('services');
// feedback View
Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');


// user page operation -  Pass Data Route to View
// this is a basic guide for passing data in to route to view
Route::prefix('users')->group(function () {
    Route::get('/index', function () {
        $user = "waleed";
        $city = "rwp";
        return view('users.index', ['names' => $user, 'city' => $city]);
    });
    Route::get('/', function () {
        $user = "waleed";
        $city = "rwp";
        return view('users.index')
            ->with('names', $user)
            ->with('city', $city);
    });
    // data by function
    Route::get('/data', function () {
        $data = getData();
        return view('users.data', ['data' => $data]);
    })->name('data');
    // data by id 
    Route::get('/data/{id}', function (string $id) {
        $user = getData();
        if (abort_if(!isset($user[$id]), 404)) {
            return view('not-found');
        }
        $data_byID = $user[$id];
        return view('users.databyID', ['userArray' => $data_byID]);
    })->name('dataByID');
});


// COntroller sections 
// Route::get('/user', [UserController::class, 'index'])->name('user'); // Index From UserControler
// Route::get('/user/welcome', [UserController::class, 'welcome'])->name('welcome-user'); // Welcome From UserControler
// Route::get('/user/{id}', [UserController::class, 'getUser'])->name('get-user'); // getUser From UserControler
// Route::get('/blog', [UserController::class, 'blog'])->name('user-blog'); // getUser From UserControler

// Now learning a group class for every controller -common controller in one place
// Laravel Controller Tutorial 
Route::controller(UserController::class)->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user'); // Index From UserControler
    Route::get('/user/welcome', [UserController::class, 'welcome'])->name('welcome-user'); // Welcome From UserControler
    Route::get('/user/{id}', [UserController::class, 'getUser'])->name('get-user'); // getUser From UserControler
    Route::get('/blog', [UserController::class, 'blog'])->name('user-blog'); // getUser From UserControler
});

// Admin Controller
Route::get('/admin',AdminController::class);

// Custom Route for error page
Route::fallback(function () {
    return view('not-found');
});
