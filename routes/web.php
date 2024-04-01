<?php

use App\Http\Controllers\attributionController;
use App\Http\Controllers\bienController;
use App\Http\Controllers\employeController;
use App\Http\Middleware\authentification;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function(){
    Route::get('/showinfo',[bienController::class,'showInfo']);
    Route::get('/ajouterBien',[bienController::class,'showFormBien']);
    Route::post('/ajouterBien-traiter',[bienController::class, 'AddBien']);
    Route::get('/modifierBien/{id}', [bienController::class, 'updateBien']);
    Route::get('/supprimerBien/{id}', [bienController::class, 'DeleteBien']);
    Route::post('/modifierBien-traiter', [bienController::class, 'updateBienTraiter']);
    
    
    Route::get('/ajouterEmploye',[employeController::class,'showFormEmploye']);
    Route::post('/ajouterEmploye-traiter',[employeController::class,'AddEmploye']);
    Route::get('/modifierEmploye/{id}', [employeController::class, 'updateEmploye']);
    Route::get('/supprimerEmploye/{id}', [employeController::class, 'DeleteEmploye']);
    Route::post('/modifierEmploye-traiter', [employeController::class, 'updateEmployeTraiter']);
    
    Route::get('/attribuer', [attributionController::class, 'showAttribution']);
    Route::post('/attribuer-traiter', [attributionController::class, 'attribution']);
    Route::get('/attributions', [attributionController::class, 'show'])->name('attributions.index');
    Route::post('/attributions/{id}/return', [AttributionController::class, 'return'])->name('attribution.return');
    
    
    Route::get('/recherche', [attributionController::class, 'recherche']);
    Route::post('/recherche-resultat', [attributionController::class, 'rechercheResultat']);
    
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





