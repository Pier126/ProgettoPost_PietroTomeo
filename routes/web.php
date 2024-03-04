<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


//Rotta GET per la VISTA di index
Route::get('/article/index' , [ArticleController::class , 'index'])->name('article.index');
//Rotta GET per la VISTA dell'articolo
Route::get('/article/show/{article:slug}' , [ArticleController::class , 'show'])->name('article.show');
//Rotta GET per la VISTA del filtro per categorie
Route::get('/article/category/{category}' , [ArticleController::class , 'byCategory'])->name('article.byCategory');
//Rotta GET per la VISTA del filtro per utente
Route::get('/article/user/{user}' , [ArticleController::class , 'byUser'])->name('article.byUser');
//Rotta GET per la VISTA del lavora con noi
Route::get('/careers',  [PublicController::class, 'careers'])->name('careers');
//Rotta POST per richiedere dati dal form e inviarli sul db.
Route::post('/careers/submit',  [PublicController::class, 'careersSubmit'])->name('careers.submit');
//Rotta GET per gestire i dati inseriti nella barra di ricerca.
Route::get('/article/search' , [ArticleController::class, 'articleSearch'])->name('article.search');
//Rotta GET per la VISTA del chi siamo
Route::get('/about-us' , [PublicController::class , 'aboutUs'])->name('aboutus');


//Rotte per il Middleware dell'Admin
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard' , [AdminController::class , 'dashboard'])->name('admin.dashboard');
    Route::patch('/admin/{user}/set-admin' , [AdminController::class , 'setAdmin'])->name('admin.setAdmin');
    Route::delete('/admin/{user}/delete-admin' , [AdminController::class , 'deleteAdmin'])->name('admin.deleteAdmin');
    Route::patch('/admin/{user}/set-revisor' , [AdminController::class , 'setRevisor'])->name('admin.setRevisor');
    Route::delete('/admin/{user}/delete-revisor' , [AdminController::class , 'deleteRevisor'])->name('admin.deleteRevisor');
    Route::patch('/admin/{user}/set-writer' , [AdminController::class , 'setWriter'])->name('admin.setWriter');
    Route::delete('/admin/{user}/delete-writer' , [AdminController::class , 'deleteWriter'])->name('admin.deleteWriter');
    Route::put('/admin/edit/{tag}/tag' , [AdminController::class , 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/{tag}/tag' , [AdminController::class , 'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/{category}/category' , [AdminController::class , 'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/{category}/category' , [AdminController::class , 'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store' , [AdminController::class , 'storeCategory'])->name('admin.storeCategory');
});



//Rotte per il Middleware del Revisor
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard' , [RevisorController::class , 'dashboard'])->name('revisor.dashboard');
    Route::post('/revisor/{article}/accept' , [RevisorController::class , 'acceptArticle'])->name('revisor.acceptArticle');
    Route::post('/revisor/{article}/reject' , [RevisorController::class , 'rejectArticle'])->name('revisor.rejectArticle');
    Route::post('/revisor/{article}/undo' , [RevisorController::class , 'undoArticle'])->name('revisor.undoArticle');

});

//Rotte per il Middleware del Writer
Route::middleware('writer')->group(function(){
    //Rotta GET per la VISTA Create
Route::get('/article/create', [ArticleController::class , 'create'])->name('article.create');
//Rotta POST per la creazione dell'articolo
Route::post('/article/create', [ArticleController::class , 'store'])->name('article.store');
//Rotta GET per la dashboard del redattore
Route::get('/writer/dashboard' , [WriterController::class , 'dashboard'])->name('writer.dashboard');
//Rotta GET alla pagina di edit dell'articolo
Route::get('/article/{article}/edit' , [ArticleController::class , 'edit'])->name('article.edit');
//Rotta PUT per l'aggiornamento dell'articolo
Route::put('/article/{article}/update' , [ArticleController::class , 'update'])->name('article.update');
//Rotta DELETE per cancellare l'articolo
Route::delete('/article/{article}/destroy' , [ArticleController::class , 'destroy'])->name('article.destroy');
});