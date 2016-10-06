<?php

class BaseModel extends Eloquent {

    //Variable para guardar los errores en las validaciones
    public $errors;
    //Variable para indicar las regla que se utilizaran en la validación
    public static $rules = [];

    /* Función para validar las reglas del modelo */
    public function isValid() {
        $validation = Validator::make($this->attributes, static::$rules);
        if ($validation->passes()) {
            return TRUE;
        } else {
            $this->errors = $validation->messages();
        }
    }

}
