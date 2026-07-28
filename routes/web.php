<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [PageController::class, 'index'])->name('index');

// Artists
Route::get('/artists', [ArtistController::class, 'artists'])->name('artists.index');
// Route::get('/artists/details', [ArtistController::class, 'artistsDetails'])->name('artists.details');
Route::get('/artists{artist}', [ArtistController::class, 'artistsDetails'])->name('artists.details');
// Albums
Route::get('/albums', [AlbumController::class, 'albums'])->name('albums.index');
Route::get('/albums{album}', [AlbumController::class, 'albumsDetails'])->name('albums.details');
// Songs
Route::get('/songs', [SongController::class, 'songs'])->name('songs.index');
Route::get('/songs/{song}', [SongController::class, 'songsDetails'])->name('songs.details');
// Playlists
Route::get('/playlists', [PlaylistController::class, 'playlists'])->name('playlists.index');
Route::get('/playlists/{playlist}', [PlaylistController::class, 'playlistsDetails'])->name('playlists.details');
// Events
Route::get('/events', [EventController::class, 'events'])->name('events.index');
// Shop
Route::get('/shop/merchandise', [ShopController::class, 'shopMerchandise'])->name('shop.merchandise');
Route::get('/shop/music-sheets', [ShopController::class, 'shopMusicSheets'])->name('shop.music-sheets');
// Gallery
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery.index');
// Blog
Route::get('/blog', [BlogController::class, 'blog'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'blogSingle'])->name('blog.single');
// More
Route::get('/about', [MoreController::class, 'moreAbout'])->name('more.about');
Route::get('/contact', [MoreController::class, 'moreContact'])->name('more.contact');
Route::get('/faq', [MoreController::class, 'moreFAQ'])->name('more.faq');
Route::get('/subscriptions', [MoreController::class, 'moreSubscriptions'])->name('more.subscriptions');
Route::get('/testimonials', [MoreController::class, 'moreTestimonials'])->name('more.testimonials');
// Auth
Route::get('/email-verification', [AuthController::class, 'emailVerificataion'])->name('auth.email-verification');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/privacy-policy', [AuthController::class, 'privacyPolicy'])->name('auth.privacy-policy');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('auth.reset-password');
Route::get('/terms', [AuthController::class, 'terms'])->name('auth.terms');



