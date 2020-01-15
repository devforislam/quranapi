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
    return view('welcome');
});


/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '1');

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');
