<?php
/*************************************************************************
 Generated via "php artisan localization:missing" at 2015/07/21 13:28:55 
*************************************************************************/

return array (
  //============================== New strings to translate ==============================//
  // Defined in file /home/alariva/xb3/xbooking/resources/views/manager/businesses/_form.blade.php
  'businesses' => 
  array (
    'form' => 
    array (
      'timezone' => 
      array (
        'label' => 'Zona Horaria',
      ),
      'description' => 
      array (
        'label' => 'Descripción',
        'placeholder' => 'Describe al prestador',
      ),
      'name' => 
      array (
        'label' => 'Nombre',
        'placeholder' => 'Nombre completo del prestador',
      ),
      'phone' => 
      array (
        'label' => 'Teléfono de Contacto',
        'placeholder' => 'teléfono en formato internacional',
        'hint' => 'ej: 00pp9aaxxxxxxxx',
      ),
      'postal_address' => 
      array (
        'label' => 'Dirección Postal',
        'placeholder' => 'altura calle, barrio, ciudad, país',
      ),
      'slug' => 
      array (
        'label' => 'Alias',
        'placeholder' => 'así será el link en la web',
      ),
    ),
    'btn' => 
    array (
      'return' => 'Volver',
      'store' => 'Registrar',
      'update' => 'Actualizar',
    ),
    'contacts' => 
    array (
      'btn' => 
      array (
        'create' => 'Crear',
      ),
    ),
    'create' => 
    array (
      'title' => 'Registrar un prestador',
    ),
    'dashboard' => 
    array (
      'alert' => 
      array (
        'no_services_set' => 'Aún no tienes servicios cargados! Hazlo aquí!',
        'no_vacancies_set' => 'Aún no tienes publicada tu disponibilidad! Hazlo aquí!',
      ),
      'meta' => 
      array (
        'title_owner' => 'Propietario',
        'title_registered_since' => 'Registrado desde',
      ),
      'panel' => 
      array (
        'title_appointments_active' => 'Activos',
        'title_appointments_annulated' => 'Anulados',
        'title_appointments_served' => 'Atendidos',
        'title_appointments_today' => 'Hoy',
        'title_appointments_tomorrow' => 'Mañana',
        'title_appointments_total' => 'Total',
        'title_contacts_active' => 'Contactos Activos',
        'title_contacts_registered' => 'Contactos Registrados',
        'title_contacts_with_nin' => 'Contactos con DNI',
      ),
    ),
    'edit' => 
    array (
      'title' => 'Edición de datos del prestador',
    ),
    'index' => 
    array (
      'help' => 'Desde aquí puedes administrar todos los prestadores',
      'register_business_help' => 'Si eres prestador y quieres dar turnos online, es tu oportunidad!',
      'title' => 'Mis Prestadores',
      'btn' => 
      array (
        'manage' => 'Administrar prestadores',
        'register' => 'Registrar un prestador',
      ),
    ),
    'msg' => 
    array (
      'destroy' => 
      array (
        'success' => 'Prestador removido',
      ),
      'store' => 
      array (
        'business_already_exists' => 'El prestador ya está registrado',
        'restored_trashed' => 'Prestador restaurado',
        'success' => 'Prestador registrado',
      ),
      'update' => 
      array (
        'success' => 'Datos del prestador actualizados',
      ),
    ),
    'vacancies' => 
    array (
      'btn' => 
      array (
        'update' => 'Actualizar Disponibilidad',
      ),
    ),
    'show' => 
    array (
      'title' => 'Prestador',
    ),
  ),
  //==================================== Translations ====================================//
  'business' => 
  array (
    'service' => 
    array (
      'msg' => 
      array (
        'update' => 
        array (
          'success' => 'Servicio Actualizado!',
        ),
      ),
    ),
    'form' => 
    array (
      'strategy' => 
      array (
        'dateslot' => 'Por fecha',
        'timeslot' => 'Por fecha y horario',
      ),
    ),
  ),
  'contacts' => 
  array (
    'btn' => 
    array (
      'confirm_delete' => 'contacts.btn.confirm_delete',
      'delete' => 'Eliminar',
      'edit' => 'contacts.btn.edit',
      'store' => 'Guardar',
      'update' => 'Actualizar Contacto',
    ),
    'create' => 
    array (
      'title' => 'Contactos',
    ),
    'form' => 
    array (
      'birthdate' => 
      array (
        'label' => 'Nacimiento',
        'placeholder' => 'fecha de nacimiento',
      ),
      'description' => 
      array (
        'label' => 'Descripción',
      ),
      'email' => 
      array (
        'label' => 'Email',
        'placeholder' => 'email@ejemplo.com',
      ),
      'firstname' => 
      array (
        'label' => 'Nombre',
        'placeholder' => 'primer nombre',
      ),
      'gender' => 
      array (
        'female' => 
        array (
          'label' => 'Femenino',
        ),
        'male' => 
        array (
          'label' => 'Masculino',
        ),
        'label' => 'Sexo',
      ),
      'lastname' => 
      array (
        'label' => 'Apellido',
        'placeholder' => 'apellido',
      ),
      'mobile' => 
      array (
        'label' => 'Móvil',
        'placeholder' => 'número de móvil completo',
      ),
      'nin' => 
      array (
        'label' => 'DNI',
        'placeholder' => 'número de identificación nacional',
      ),
      'notes' => 
      array (
        'label' => 'Notas',
        'placeholder' => 'notas',
      ),
    ),
    'label' => 
    array (
      'birthdate' => 'Nacimiento',
      'email' => 'Email',
      'member_since' => 'Suscripto desde',
      'mobile' => 'Móvil',
      'nin' => 'DNI',
      'notes' => 'Notas',
      'gender' => 'Sexo',
      'next_appointment' => 'Próximo Turno',
      'username' => 'Usuario',
    ),
    'list' => 
    array (
      'btn' => 
      array (
        'filter' => 'Filtro',
      ),
      'header' => 
      array (
        'email' => 'Email',
        'firstname' => 'Nombre',
        'lastname' => 'Apellido',
        'mobile' => 'Móvil',
        'quality' => 'Puntaje',
        'username' => 'Usuario',
        'gender' => 'Sexo',
      ),
      'msg' => 
      array (
        'filter_no_results' => 'Sin resultados',
      ),
    ),
    'msg' => 
    array (
      'destroy' => 
      array (
        'success' => 'Eliminado',
      ),
      'store' => 
      array (
        'success' => 'Registrado Ok!',
        'warning_showing_existing_contact' => 'Encontramos el contacto ya registrado',
      ),
      'update' => 
      array (
        'success' => 'Actualizado Ok',
      ),
    ),
    'title' => 'Mis Clientes',
  ),
  'service' => 
  array (
    'btn' => 
    array (
      'delete' => 'Eliminar',
      'update' => 'Actualizar',
    ),
    'form' => 
    array (
      'name' => 
      array (
        'label' => 'Servicios',
      ),
    ),
    'msg' => 
    array (
      'store' => 
      array (
        'success' => 'Servicio Guardado!',
      ),
    ),
  ),
  'services' => 
  array (
    'btn' => 
    array (
      'store' => 'Guardar',
    ),
    'create' => 
    array (
      'title' => 'Nuevo Servicio',
    ),
    'index' => 
    array (
      'th' => 
      array (
        'duration' => 'Duración',
        'name' => 'Nombre',
        'slug' => 'Alias',
      ),
      'title' => 'Servicios',
    ),
    'msg' => 
    array (
      'destroy' => 
      array (
        'success' => 'Servicio Eliminado!',
      ),
    ),
  ),
  'vacancies' => 
  array (
    'edit' => 
    array (
      'title' => 'Disponibilidades',
    ),
    'msg' => 
    array (
      'store' => 
      array (
        'success' => 'Disponibilidades registradas!',
      ),
    ),
    'table' => 
    array (
      'th' => 
      array (
        'date' => 'Fecha',
      ),
    ),
  ),
  //================================== Obsolete strings ==================================//
);