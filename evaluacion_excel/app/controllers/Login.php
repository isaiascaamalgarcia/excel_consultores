<?php

class Login extends BaseController
{

  protected $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function show()
  {
    // Verificamos si hay sesión activa
    if (Auth::check())
    {
      // Si tenemos sesión activa mostrará la página de inicio
      return Redirect::to('/');
    }
    // Si no hay sesión activa mostramos el formulario
    return View::make('login._form');
  }

  public function login()
  {
    // Obtenemos los datos del formulario
    $data =
    [
      'username' => Input::get('username'),
      'password' => Input::get('pass')
    ];

    // Verificamos los datos
    if (Auth::attempt($data))
    {
      // Si nuestros datos son correctos mostramos la página de inicio
      return Redirect::intended('/');
    }
    // Si los datos no son los correctos volvemos al login y mostramos un error
    return Redirect::back()->with('error_message', 'Datos inválidos')->withInput();
  }

  public function logOut()
  {
    // Cerramos la sesión
    Auth::logout();
    // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
    return Redirect::to('login')->with('error_message', 'Has cerrado sesión');
  }

  public function register()
  {
    //Obtenemos los datos del formulario
    $data = Input::except('_method', '_token', 'pass');
    $data['password'] = Hash::make(Input::get('pass'));

    //Creamos el objeto de la clase User
    $user = $this->user;

    //Validamos los datos con las reglas del mcrypt_module_close
    if($user->fill($data)->isValid())
    {
      //Guardamos los datos en la base de datos.
      $user->save();

      //Iniciamos sesión
      $register =
      [
        'username' => $user->username,
        'password' => Input::get('pass')
      ];

      if (Auth::attempt($register))
      {
        $response['success'] = 1;
        $response['user'] = json_encode($user);
      }
    }
    else
    {
      	$response["success"] = 0;
        $response['errors'] = $user->errors;
    }
    return Response::json($response, 200, [], JSON_NUMERIC_CHECK);
  }
}
