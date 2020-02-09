<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 //Users
      Permission::create([
        'name'          => 'Navegar usuarios',
        'slug'          => 'users.index',
        'description'   => 'Lista y navega todos los usuarios del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de usuario',
        'slug'          => 'users.show',
        'description'   => 'Ve en detalle cada usuario del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de usuario',
        'slug'          => 'users.create',
        'description'   => 'Podría crear nuevos usuarios en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de usuarios',
        'slug'          => 'users.edit',
        'description'   => 'Podría editar cualquier dato de un usuario del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar usuario',
        'slug'          => 'users.destroy',
        'description'   => 'Podría eliminar cualquier usuario del sistema',      
      ]);

        //Roles
      Permission::create([
        'name'          => 'Navegar roles',
        'slug'          => 'roles.index',
        'description'   => 'Lista y navega todos los roles del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de un rol',
        'slug'          => 'roles.show',
        'description'   => 'Ve en detalle cada rol del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de roles',
        'slug'          => 'roles.create',
        'description'   => 'Podría crear nuevos roles en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de roles',
        'slug'          => 'roles.edit',
        'description'   => 'Podría editar cualquier dato de un rol del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar roles',
        'slug'          => 'roles.destroy',
        'description'   => 'Podría eliminar cualquier rol del sistema',      
      ]);

      //almacenes
      Permission::create([
        'name'          => 'Navegar almacenes',
        'slug'          => 'almacenes.index',
        'description'   => 'Lista y navega todos los almacenes del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de un almacen',
        'slug'          => 'almacenes.show',
        'description'   => 'Ve en detalle cada almacen del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de almacenes',
        'slug'          => 'almacenes.create',
        'description'   => 'Podría crear nuevos almacenes en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de almacenes',
        'slug'          => 'almacenes.edit',
        'description'   => 'Podría editar cualquier dato de un almacen del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar almacenes',
        'slug'          => 'almacenes.destroy',
        'description'   => 'Podría eliminar cualquier articulo del sistema',      
      ]);

        //articulos
        //articulos.pdf
      Permission::create([
        'name'          => 'Navegar articulos',
        'slug'          => 'articulos.index',
        'description'   => 'Lista y navega todos los articulos del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de un articulo',
        'slug'          => 'articulos.show',
        'description'   => 'Ve en detalle cada articulo del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de articulos',
        'slug'          => 'articulos.create',
        'description'   => 'Podría crear nuevos articulos en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de articulos',
        'slug'          => 'articulos.edit',
        'description'   => 'Podría editar cualquier dato de un articulo del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar articulos',
        'slug'          => 'articulos.destroy',
        'description'   => 'Podría eliminar cualquier articulo del sistema',      
      ]);

      Permission::create([
        'name'          => 'Descargar articulos',
        'slug'          => 'articulos.pdf',
        'description'   => 'Podría descargar un archivo pdf con los articulos del sistema',      
      ]);

        //direcciones
      Permission::create([
        'name'          => 'Navegar departamentos',
        'slug'          => 'direcciones.index',
        'description'   => 'Lista y navega todos los departamentos del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de un departamento',
        'slug'          => 'direcciones.show',
        'description'   => 'Ve en detalle cada departamento del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de departamentos',
        'slug'          => 'direcciones.create',
        'description'   => 'Podría crear nuevos departamentos en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de departamentos',
        'slug'          => 'direcciones.edit',
        'description'   => 'Podría editar cualquier dato de un departamento del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar departamentos',
        'slug'          => 'direcciones.destroy',
        'description'   => 'Podría eliminar cualquier departamento del sistema',      
      ]);

        //entradas
      Permission::create([
        'name'          => 'Navegar entradas',
        'slug'          => 'entradas.index',
        'description'   => 'Lista y navega todos los entradas del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de una entrada',
        'slug'          => 'entradas.show',
        'description'   => 'Ve en detalle cada entrada del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de entradas',
        'slug'          => 'entradas.create',
        'description'   => 'Podría crear nuevas entradas en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de entradas',
        'slug'          => 'entradas.edit',
        'description'   => 'Podría editar cualquier dato de una entrada del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar entradas',
        'slug'          => 'entradas.destroy',
        'description'   => 'Podría eliminar cualquier entrada del sistema',      
      ]);

        //events
        //event2.index1
      Permission::create([
        'name'          => 'Navegar eventos calendario',
        'slug'          => 'events.index',
        'description'   => 'Lista y navega todos los eventos en calendario del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de una evento',
        'slug'          => 'events.show',
        'description'   => 'Ve en detalle cada evento del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de eventos',
        'slug'          => 'events.create',
        'description'   => 'Podría crear nuevos eventos en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de eventos',
        'slug'          => 'events.edit',
        'description'   => 'Podría editar cualquier dato de uno evento del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar eventos',
        'slug'          => 'events.destroy',
        'description'   => 'Podría eliminar cualquier evento del sistema',      
      ]);

      Permission::create([
        'name'          => 'Navegar eventos',
        'slug'          => 'event2.index1',
        'description'   => 'Lista y navega todos los eventos del sistema',
      ]);

        //inventarios
        //inventario.pdf
      Permission::create([
        'name'          => 'Navegar inventarios',
        'slug'          => 'inventarios.index',
        'description'   => 'Lista y navega todos los inventarios del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de un inventario',
        'slug'          => 'inventarios.show',
        'description'   => 'Ve en detalle cada inventario del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de inventarios',
        'slug'          => 'inventarios.create',
        'description'   => 'Podría crear nuevos inventarios en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de inventarios',
        'slug'          => 'inventarios.edit',
        'description'   => 'Podría editar cualquier dato de un inventario del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar inventarios',
        'slug'          => 'inventarios.destroy',
        'description'   => 'Podría eliminar cualquier inventario del sistema',      
      ]);

      Permission::create([
        'name'          => 'Descargar inventarios',
        'slug'          => 'inventarios.pdf',
        'description'   => 'Podría descargar un archivo pdf con los inventarios del sistema',      
      ]);


        //partidas2
        //partidas2.create1
        //conceptoPartidas.pdf
      Permission::create([
        'name'          => 'Navegar concepto de partidas',
        'slug'          => 'partidas2.index',
        'description'   => 'Lista y navega todos los concepto de partidas del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de un concepto de partida',
        'slug'          => 'partidas2.show',
        'description'   => 'Ve en detalle cada concepto de partida del sistema',            
      ]);

      //ruta doble
      Permission::create([
        'name'          => 'Creación de concepto de partidas',
        'slug'          => 'partidas2.create',
        'description'   => 'Podría guardar nuevos concepto de partidas en el sistema',
      ]);

      Permission::create([
        'name'          => 'Creación de concepto de partidas',
        'slug'          => 'partidas2.create1',
        'description'   => 'Podría crear nuevos concepto de partidas en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de concepto de partidas',
        'slug'          => 'partidas2.edit',
        'description'   => 'Podría editar cualquier dato de un concepto de partida del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar concepto de partidas',
        'slug'          => 'partidas2.destroy',
        'description'   => 'Podría eliminar cualquier concepto de partida del sistema',      
      ]);

      Permission::create([
        'name'          => 'Descargar concepto de partida',
        'slug'          => 'conceptoPartidas.pdf',
        'description'   => 'Podría descargar un archivo pdf con los conceptos de partida del sistema',      
      ]);

        //partidas
        //partidas.verPartidas
      Permission::create([
        'name'          => 'Navegar partidas',
        'slug'          => 'partidas.index',
        'description'   => 'Lista y navega todas las partidas del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de partida',
        'slug'          => 'partidas.verPartidas',//'partidas.show',
        'description'   => 'Ve en detalle cada partida del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de partidas',
        'slug'          => 'partidas.create',
        'description'   => 'Podría crear nuevas partidas en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición partidas',
        'slug'          => 'partidas.edit',
        'description'   => 'Podría editar cualquier dato de una partida del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar partidas',
        'slug'          => 'partidas.destroy',
        'description'   => 'Podría eliminar cualquier partida del sistema',      
      ]);

        //proveedores
      Permission::create([
        'name'          => 'Navegar proveedores',
        'slug'          => 'proveedores.index',
        'description'   => 'Lista y navega todos los proveedores del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de un concepto de proveedor',
        'slug'          => 'proveedores.show',
        'description'   => 'Ve en detalle cada proveedor del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de proveedores',
        'slug'          => 'proveedores.create',
        'description'   => 'Podría crear nuevos proveedores en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de proveedores',
        'slug'          => 'proveedores.edit',
        'description'   => 'Podría editar cualquier dato de una proveedor del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar proveedores',
        'slug'          => 'proveedores.destroy',
        'description'   => 'Podría eliminar cualquier proveedor del sistema',      
      ]);

        //solicitudes1
      Permission::create([
        'name'          => 'Navegar solicitudes enviadas',
        'slug'          => 'solicitudes1.index',
        'description'   => 'Lista y navega todas las solicitudes enviadas del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de solicitudes enviadas',
        'slug'          => 'solicitudes1.show',
        'description'   => 'Ve en detalle cada solicitud enviada del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de concepto de solicitudes enviadas',
        'slug'          => 'solicitudes1.create',
        'description'   => 'Podría crear nuevas solicitudes enviadas en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de solicitudes enviadas',
        'slug'          => 'solicitudes1.edit',
        'description'   => 'Podría editar cualquier dato de una solicitud enviada del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar solicitudes enviadas',
        'slug'          => 'solicitudes1.destroy',
        'description'   => 'Podría eliminar cualquier solicitud enviada del sistema',      
      ]);

        //solicitudes
        //solicitud.pdf
        //solicitud.verSolicitudes
        //solicitud.tipo
      Permission::create([
        'name'          => 'Navegar solicitudes recibidas',
        'slug'          => 'solicitudes.index',
        'description'   => 'Lista y navega todas las solicitudes recibidas del sistema',
      ]);

      Permission::create([
        'name'          => 'Ver detalle de solicitudes recibidas',
        'slug'          => 'solicitud.verSolicitudes',//'solicitudes.show',
        'description'   => 'Ve en detalle cada solitud recibida del sistema',            
      ]);

      Permission::create([
        'name'          => 'Creación de concepto de solicitudes recibidas',
        'slug'          => 'solicitudes.create',
        'description'   => 'Podría crear nuevas solicitudes recibidas en el sistema',
      ]);

      Permission::create([
        'name'          => 'Edición de solicitudes recibidas',
        'slug'          => 'solicitudes.edit',
        'description'   => 'Podría editar cualquier dato de una solitud recibida del sistema',
      ]);

      Permission::create([
        'name'          => 'Eliminar solicitudes recibidas',
        'slug'          => 'solicitudes.destroy',
        'description'   => 'Podría eliminar cualquier solitud recibida del sistema',      
      ]);

      Permission::create([
        'name'          => 'Descargar solicitudes recibidas',
        'slug'          => 'solicitud.pdf',
        'description'   => 'Podría descargar un archivo pdf con las solicitudes recibidas del sistema',      
      ]);

    }
  }
