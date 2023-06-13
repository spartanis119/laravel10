<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
use Illuminate\Support\Facades\Route;

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

/* ESTA ES LA RUTA DEL INDEX DE TODA LA PAGINA, SE REALIZA UN RETURN YA QUE ACA SOLO ESE MANEJRARA LOS RUTAS Y LO QUE SE HACE USUALMETE ES RETORNAR UNA VISTA */
Route::get('/', function () {
    return view("welcome");
});

/* EN CASO DE QUERER REALIZAR UNA RUTA ESPECIFICA SE REALIZAR UN / Y SE PONDE LA RUTA CON SU RESPECTIVA VISTA */

/* Route::get('/usuario/', function(){
    return "Inicio Usuario:";
}); */

/* 
ACA SE USARA RUTA CON CONTROLADOR, PARA ELLO SE PONE:
1.Route::
2.controller()
3.nombre del controlardor osea la clase creada -> UserController::class
4.OPCIONAL...... En caso de que esa ruta perteneza a algo en especifico como las cosas del usuario o algo en especifico se puede agrupar -> group(function (){

})

Ejemplo:

Route::controller(UserController::class)->group(function () {

    Route::get('/usuarios', 'index');

    Route::get('/usuarios/{id}', 'show')->where('id', '[0-9]+');
    
    Route::get('/usuarios/crear', 'create');
});

*/

Route::get('/user', [UserController::class , 'index']);


/* ESTA RUTA NO SIRVE PARA CUANDO VALLAMOS A ENVIAR PARA METROS POR LA URL, LO QUE SE HACE ES PONER EL NOMBRE DE LA URL Y LUEGO SE PONE:
1. /
2.{nombre de parametro a enviar}
3.Dentro de la funcion anonimos pasamos el o los parametro a enviar
Un ejemplo seria cuando queremos enviar el id de la persona a travez de la url como un get
Entonces ahi en ese caso se pone el /{id} para el caso de la url y en la funcion anonima solo se ponde el nombre de parametro como variable -> $id
*/
Route::get('/user/{id}', [UserController::class , 'detailUser'])->where('id', '[0-9]+');

//[0-9]+: Significa que donde el id debe ser de tipo numerico y va a recibir numeros de 0 a 9 y que podemos tener mas numeros mayores a 1 cifra 




/* Aca encontramos un problema ya que al tener rutas parecida segun lo siguiente:
    /usuario/{id}
    /usuario/nuevo 
    (Son parecidas debido a que contiene el mismo valor de / y de palabras)

    PARA RESOLVERLO SE DEBE TENER EN CUENTA LO SIGUIENTE:

    1.Se puede intercambiar de lugares la rutas, pero eso no sirve en todos lo casos ya que podemos tener rutas varias rutas parecidas.
    2.Se puede poner exepciones o condiciones como el  "WHERE" con eso nos podemos evitar eso
*/
Route::get('/user/new', function($id){
    return "Inicio Usuario: {$id}";
});




/* Aca esta un ejemplo con mas de un parametro */
/* Route::get('/saludo/{nombre}/{apodo}',function($nombre,$apodo){
    return "Hola compadre {$nombre} tu apodo es {$apodo}";
}); */

/* Aca esta el ejemplo en caso de que el parametro sea opcional, para ello se debe poner el parametro con un signo de interrogacion, que le hara que sea opcional, ademas dentro de la funcion anonima debe ir la variable como nulo*/

Route::get('/saludo/{nombre}/{apodo?}',[WelcomeUserController::class, 'index']);
