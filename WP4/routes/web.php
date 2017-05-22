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

Route::get('/', function () {
    return redirect("/login");
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/klantenoverzicht', function () {
    $users = DB::table('klanten')->get();
    return view('klantenoverzicht')->with('users',$users);
});
Route::get('/users', function () {
    return App\User::all();
});
Route::get('/klantedit/{userid}', function ($userid) {
    $users = DB::table('klanten')->where("klantid","=",$userid)->get();
    return view('klantbewerken')->with('users',$users);
});
Route::get('/klantremove/{userid}', function ($userid) {
    DB::delete('delete from klanten WHERE klantid=?',array($userid));
    $users = DB::table('klanten')->get();
    return view('klantenoverzicht')->with('users',$users);
});
Route::post('submit', function () {
    App\User::create([
        'name'=> $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['pass']
    ]);
    return view('saved');
});
Route::post('nieuweklant', function () {
    $users = DB::table('klanten')->where("email",'<>',$_POST['email'])->count();if($users<1) {
        DB::insert("INSERT INTO `klanten`( `Naam`, `Voornaam`, `email`, `gemeente`, `postcode`, `straat`, `telefoon`, `gsm`) VALUES (?,?,?,?,?,?,?,?)", array($_POST['name'],$_POST['vname'],$_POST['email'],$_POST['gemeente'],$_POST['postcode'],$_POST['straat'],$_POST['tel'],$_POST['gsm']));
    }
    return redirect("/login");
});
Route::post('/klantedit/editklant', function () {
    DB::update("UPDATE `klanten` SET `Naam`=?, `Voornaam`=?, `email`=?, `gemeente`=?, `postcode`=?, `straat`=?, `telefoon`=?, `gsm`=?", array($_POST['name'],$_POST['vname'],$_POST['email'],$_POST['gemeente'],$_POST['postcode'],$_POST['straat'],$_POST['tel'],$_POST['gsm']));
    $users = DB::table('klanten')->get();
    return view('home');
});
Route::get('/klanttoevoegen', function () {
    return view('klanttoevoegen');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
