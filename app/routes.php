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

Route::get('/', array(
    'as' => 'index',
    'uses' => 'AccountController@getSignIn'
));


Route::get('/llenar', function()
{
 
     $environment = App::environment();
        var_dump($environment);
    }   
        
);

Route::group(array('before' => 'auth'), function(){
    
    Route::get('/erp', array(
    'as' => 'erp',
    'uses' => 'HomeController@Erp'
    ));
    
    Route::get('/home', array(
    'as' => 'home',
    'uses' => 'HomeController@Home'
    ));
    Route::get('/home-pagos', array(
    'as' => 'home-pagos',
    'uses' => 'HomeController@Homepagos'
    ));
    
    Route::post('/datos', array(
    'as' => 'datos',
    'uses' => 'HomeController@Datos'
    ));   
    
    Route::post('account/create', array(
            'as'   => 'account-create-post',
            'uses' => 'AccountController@postCreate'
        ));
    
    Route::get('account/create', array(
        'as'   => 'account-create',
        'uses' => 'AccountController@getCreate'
    )); 
    
    route::get('/account/sign-out', array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut',
    ));
    
    //Proyectos controlador
    Route::get('/ver-proyectos', array(
        'as' => 'ver-proyectos',
        'uses' => 'ProyectosController@getVer'
    ));
    
    Route::post('/ver-proyectos', array(
        'as' => 'ver-proyectos',
        'uses' => 'ProyectosController@postVer'
    ));
       
    Route::get('/crear-proyecto', array(
        'as'   => 'crear-proyecto',
        'uses' => 'ProyectosController@getCreate'
    ));
        
    Route::post('/crear-proyecto', array(
        'as'   => 'crear-proyecto-post',
        'uses' => 'ProyectosController@postCreate'
    ));
    
    Route::post('/editar-hito', array(
        'as'   => 'editar-hito-post',
        'uses' => 'ProyectosController@postEditarhito'
    ));
    
    Route::post('/editar-hito-alianza', array(
        'as'   => 'editar-hito-alianza-post',
        'uses' => 'ProyectosAlianzaController@postEditarhitoalianza'
    ));
           
    Route::get('/crear-cliente', array(
        'as'   => 'crear-cliente',
        'uses' => 'ClientesController@getCreate'
    )); 
    
    Route::post('/crear-cliente', array(
        'as'   => 'crear-cliente-post',
        'uses' => 'ClientesController@postCreate'
    ));
    
    //Editar controlador
    
    Route::get('/editar-proyecto', array(
            'as'   => 'editar-proyecto',
            'uses' => 'EditarController@getProyectosVer'
        ));
    
    Route::post('/editar-proyecto', array(
            'as'   => 'editar-proyecto',
            'uses' => 'EditarController@postProyectosVer'
        ));
    
    Route::post('/editar', array(
            'as'   => 'editar',
            'uses' => 'EditarController@postEditar'
        ));
    
    Route::post('/editar-user', array(
            'as'   => 'editar-user',
            'uses' => 'ConfiguracionesController@postUsuarioseditar'
        ));
    Route::post('/editar-cliente', array(
            'as'   => 'editar-cliente',
            'uses' => 'ClientesController@postClienteeditar'
        ));
   
    //Editar tipo
    
    Route::get('/editar-tipo', array(
            'as'   => 'editar-tipo',
            'uses' => 'EditarController@getTiposVer'
        ));
    
    Route::post('/editar-tipo', array(
            'as'   => 'editar-tipo',
            'uses' => 'EditarController@postTiposVer'
        ));
    
    Route::post('/editart', array(
            'as'   => 'editart',
            'uses' => 'EditarController@postEditart'
        ));
    
    
    //Proyecto Alianza controlador  
    Route::get('/crear-proyecto-alianza', array(
        'as'   => 'crear-proyecto-alianza',
        'uses' => 'ProyectosAlianzaController@getCreate'
    ));
    
    Route::post('/crear-proyecto-alianza', array(
        'as'   => 'crear-proyecto-alianza-post',
        'uses' => 'ProyectosAlianzaController@postCreate'
    ));
    
    Route::post('/ver-proyectos-alianza', array(
        'as' => 'ver-proyectos-alianza',
        'uses' => 'ProyectosAlianzaController@postVer'
    ));
    
    Route::get('/ver-proyectos-alianza', array(
        'as' => 'ver-proyectos-alianza',
        'uses' => 'ProyectosAlianzaController@getVer'
    ));
    
    //Propuestas controlador
    Route::get('/crear-tipo', array(
        'as'   => 'crear-tipo',
        'uses' => 'PropuestasController@getCreate'
    ));
    
    Route::post('/crear-tipo', array(
        'as'   => 'crear-tipo-post',
        'uses' => 'PropuestasController@postCreate'
    ));
    
    Route::get('/calcular-tipo', array(
            'as'   => 'calcular-tipo',
            'uses' => 'PropuestasController@getCalcular'
    ));
    
    Route::get('/ver-tipo', array(
            'as'   => 'ver-tipo',
            'uses' => 'PropuestasController@getVer'
    ));
    
    Route::get('/configuraciones', array(
            'as'   => 'configuraciones',
            'uses' => 'ConfiguracionesController@getVer'
    ));
    Route::get('/configuraciones-pagos', array(
            'as'   => 'configuraciones-pagos',
            'uses' => 'ConfiguracionesController@getVerpagos'
    ));
    Route::get('/pagos', array(
            'as'   => 'pagos',
            'uses' => 'PagosController@getVer'
    ));
    Route::get('/ver-usuarios', array(
            'as'   => 'ver-usuarios',
            'uses' => 'ConfiguracionesController@getUsuariosver'
    ));
 
    Route::get('/editar-usuarios/{id}', array(
            'as'   => 'editar-usuarios',
            'uses' => 'ConfiguracionesController@getUsuarioseditar'
    ));
    Route::get('/eliminar-user/{id}', array(
            'as'   => 'eliminar-user',
            'uses' => 'ConfiguracionesController@eliminar'
    ));
    Route::get('/eliminar-pago/{id}', array(
            'as'   => 'eliminar-pago',
            'uses' => 'PagosController@eliminar'
    ));
    Route::get('/eliminar-gastopagado/{id}', array(
            'as'   => 'eliminar-gastopagado',
            'uses' => 'GastosController@eliminar'
    ));
    Route::get('/editar-cliente/{id}', array(
            'as'   => 'editar-cliente',
            'uses' => 'ClientesController@getClienteseditar'
    ));
  
    Route::get('/historico/{id}', array(
            'as'   => 'historico',
            'uses' => 'ProyectosController@historico'
    ));
    
    Route::get('/eliminar/{id}', array(
            'as'   => 'eliminar',
            'uses' => 'ProyectosController@eliminar'
    ));
    Route::get('/activar/{id}', array(
            'as'   => 'activar',
            'uses' => 'ProyectosController@activar'
    ));
    Route::get('/terminar/{id}', array(
            'as'   => 'terminar',
            'uses' => 'ProyectosController@terminar'
    ));
    
    Route::get('/ver-historicos', array(
            'as'   => 'ver-historicos',
            'uses' => 'ProyectosController@getHistoricos'
    ));
    Route::get('/ver-eliminados', array(
            'as'   => 'ver-eliminados',
            'uses' => 'ProyectosController@getEliminados'
    ));
    Route::get('/ver-historicos-alianza', array(
            'as'   => 'ver-historicos-alianza',
            'uses' => 'ProyectosAlianzaController@getHistoricos'
    ));
    Route::get('/ver-eliminados-alianza', array(
            'as'   => 'ver-eliminados-alianza',
            'uses' => 'ProyectosAlianzaController@getEliminados'
    ));
    Route::post('/detalles', array(
    'as' => 'detalles',
    'uses' => 'PropuestasController@postDetalles'
    ));
    
    Route::post('/totales', array(
    'as' => 'totales',
    'uses' => 'PropuestasController@postTotales'
    ));
    
    Route::post('/totalvalor', array(
    'as' => 'totalvalor',
    'uses' => 'PropuestasController@postTotalvalor'
    ));
    
    Route::post('/guardar', array(
    'as' => 'guardar',
    'uses' => 'PropuestasController@postGuardar'
    ));
    
    Route::post('/utilidad', array(
    'as' => 'utilidad',
    'uses' => 'PropuestasController@postUtilidad'
    ));
    
    Route::post('/uf', array(
    'as' => 'uf',
    'uses' => 'PropuestasController@postUf'
    ));
    
    Route::get('/editar-propuesta/{id}', array(
            'as'   => 'editar-propuesta',
            'uses' => 'PropuestasController@getEditar'
    ));
    
    Route::post('/recalcular', array(
            'as'   => 'recalcular',
            'uses' => 'PropuestasController@postEditar'
    ));
    
     Route::get('/ver-clientes', array(
            'as'   => 'ver-clientes',
            'uses' => 'ClientesController@getClientesver'
    ));
    
    //REMUNERACIONES Y GASTOS FIJOS
    
    
//:::::::::::::::MENU REMUNERACIONES::::::::::::::::::::::::::::::::::::::::::::
    
    Route::get('/agregar-remuneracion', array(
            'as'   => 'agregar-remuneracion',
            'uses' => 'PagosController@getAgregar'
    ));
     
    Route::post('/agregar-remuneracion', array(
            'as'   => 'agregar-remuneracion',
            'uses' => 'PagosController@postAgregar'
    ));
     
    Route::get('/buscar-remuneracion', array(
            'as'   => 'buscar-remuneracion',
            'uses' => 'PagosController@getVer'
    ));
     
    Route::any('/ver-remuneracion', array(
            'as'   => 'ver-remuneracion',
            'uses' => 'PagosController@postVer'
    ));

//::::::::::::::MENU GASTOS FIJOS:::::::::::::::::::::::::::::::::::::::::::::::    
     
    Route::get('/buscar-gasto', array(
            'as'   => 'buscar-gasto',
            'uses' => 'GastosController@getBuscar'
    ));
    
    Route::any('/ver-pagos-gastos', array(
            'as'   => 'ver-pagos-gastos',
            'uses' => 'GastosController@postBuscar'
    ));
    
    Route::get('/agregar-gasto', array(
            'as'   => 'agregar-gasto',
            'uses' => 'GastosController@getAgregar'
    ));
    
    Route::post('/agregar-gasto', array(
            'as'   => 'agregar-gasto',
            'uses' => 'GastosController@postAgregar'
    ));
     
    Route::get('/pagar-gasto', array(
            'as'   => 'pagar-gasto',
            'uses' => 'GastosController@getPagar'
    ));
    
    Route::post('/pagar-gasto', array(
            'as'   => 'pagar-gasto',
            'uses' => 'GastosController@postpagar'
    ));
     
    Route::get('/ver-gasto', array(
            'as'   => 'ver-gasto',
            'uses' => 'GastosController@getVer'
    ));
     
    Route::get('editar-gasto/{id}', 'GastosController@getEditar');
    
    Route::post('/editar-gasto', array(
            'as'   => 'editar-gasto',
            'uses' => 'GastosController@postEditar'
    ));
    
//::::::::::::::MENU FUNCIONARIOS:::::::::::::::::::::::::::::::::::::::::::::::
      
    Route::get('/agregar-funcionario', array(
            'as'   => 'agregar-funcionario',
            'uses' => 'FuncionariosController@getAgregarFuncionario'
    ));
    
    Route::post('/agregar-funcionario', array(
            'as'   => 'agregar-funcionario',
            'uses' => 'FuncionariosController@postAgregarFuncionario'
    ));
      
    Route::get('/ver-funcionarios', array(
            'as'   => 'ver-funcionarios',
            'uses' => 'FuncionariosController@getFuncionariosver'
    ));
    
    
    Route::get('editar-funcionario/{id}', 'FuncionariosController@getFuncionarioseditar');
    
    Route::get('historial-funcionario/{id}', 'FuncionariosController@getVerHistorial');
    
    Route::post('/editar-funcionario', array(
            'as'   => 'editar-funcionario',
            'uses' => 'FuncionariosController@postFuncionarioeditar'
    ));
    
    //:::::::::::::::MENU CARGOS::::::::::::::::::::::::::::::::::::::::::::::::
     
    Route::get('/agregar-cargo', array(
            'as'   => 'agregar-cargo',
            'uses' => 'CargosController@getAgregar'
    ));
    Route::post('/agregar-cargo', 'CargosController@postAgregar');
    
    Route::get('/ver-cargos', array(
            'as'   => 'ver-cargos',
            'uses' => 'CargosController@getVer'
    ));
    
    Route::get('editar-cargo/{id}', 'CargosController@getEditar');
    Route::post('editar-cargo', 'CargosController@postEditar'); 
    
    //:::::::::::::::MENU CONTRATOS::::::::::::::::::::::::::::::::::::::::::::::::
     
    Route::get('/agregar-contrato', array(
            'as'   => 'agregar-contrato',
            'uses' => 'ContratosController@getAgregar'
    ));
    Route::post('/agregar-contrato', 'ContratosController@postAgregar');
    
    Route::get('/ver-contratos', array(
            'as'   => 'ver-contratos',
            'uses' => 'ContratosController@getVer'
    ));
    
    Route::get('editar-contrato/{id}', 'ContratosController@getEditar');
    Route::post('editar-contrato', 'ContratosController@postEditar'); 
    
    //:::::::::::::::MENU TIPO CARGOS::::::::::::::::::::::::::::::::::::::::::::::::
     
    Route::get('/agregar-tipo-cargo', array(
            'as'   => 'agregar-tipo-cargo',
            'uses' => 'TiposController@getAgregar'
    ));
    Route::post('/agregar-tipo-cargo', 'TiposController@postAgregar');
    
    Route::get('/ver-tipos-cargos', array(
            'as'   => 'ver-tipos-cargo',
            'uses' => 'TiposController@getVer'
    ));
    
    Route::get('editar-tipo-cargo/{id}', 'TiposController@getEditar');
    Route::post('editar-tipo-cargo', 'TiposController@postEditar'); 
    
    
    
    
    
});





Route::group(array('before' => 'guest'), function(){
    
    Route::group(array('before' => 'csrf'), function(){
              
        Route::post('account/sign-in', array(
            'as'   => 'account-sign-in-post',
            'uses' => 'AccountController@postSignIn'
        ));
        
    });
      
    Route::get('/account/activate/{code}', array(
        'as'   => 'account-activate',
        'uses' => 'AccountController@getActivate'
    ));
    
    Route::get('/account/sign-in/', array(
        'as'   => 'account-sign-in',
        'uses' => 'AccountController@getSignIn'
    ));
    
});
    
