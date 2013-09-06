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

Route::any('/', array(
    'as' => 'home',
    'uses' => 'HomeController@showAllPosts'
));

Route::any('postDetail/{id}', array(
    'as' => 'post/detail',
    'uses' => 'PostController@getPostDetail'
));

Route::group(array('before' => 'guest'), function()
{
    Route::any('login', array(
        'as' => 'user/login',
        'uses' => 'UserController@loginAction'
    ));

    Route::any('register', array(
        'as' => 'user/register',
        'uses' => 'UserController@registerAction'
    ));
});

Route::group(array('before' => 'auth'), function() {

    Route::any('profile',array(
        'as' => 'user/profile',
        'uses' => 'UserController@profileAction'
    ));

    Route::any('logout', array(
        'as' => 'user/logout',
        'uses' => 'UserController@logoutAction'
    ));

    Route::any('newPost', array(
        'as' => 'post/new',
        'uses' => 'PostController@newPostAction'
    ));

    Route::any('userPost', array(
        'as' => 'post/user',
        'uses' => 'PostController@showUserPostAction'
    ));

    Route::any('comment/{id}', array(
        'as' => 'post/comment',
        'uses' => ''
    ));

    Route::any('editPost/{id}', array(
        'as' => 'post/edit',
        'uses' => 'PostController@editPostAction'
    ));

    Route::any('testAjax', array(
        'as' => 'post/editAjax',
        'uses' => 'PostController@postHelloAction'
    ));
});

