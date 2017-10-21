<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha despues a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha despues o igual a :date.',
    'alpha'                => 'El campo :attribute solo debe contener letras.',
    'alpha_dash'           => 'El campo :attribute solo debe contener letras, números, y guiones.',
    'alpha_num'            => 'El campo :attribute solo debe contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'entre'              => [
        'numeric' => 'El campo :attribute debe ser entre :min y :max.',
        'file'    => 'El campo :attribute debe ser entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe ser entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser true o false.',
    'confirmed'            => 'El campo :attribute de confirmación no coincide.',
    'date'                 => 'El campo :attribute no es una fecha válida.',
    'date_format'          => 'El campo :attribute no coincide con el formato :format.',
    'different'            => 'El campo :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute deben ser :digits digitos.',
    'digits_entre'         => 'El campo :attribute debe ser entre :min y :max digitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones de imágen invalidos.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser un E-Mail válido.',
    'exists'               => 'La selección :attribute es invalida.',
    'file'                 => 'El campo :attribute debe ser a file.',
    'filled'               => 'El campo :attribute es requerido.',
    'image'                => 'El campo :attribute debe ser an image.',
    'in'                   => 'La selección :attribute es invalida.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe ser una cadena JSON válida.',
    'max'                  => [
        'numeric' => ':attribute no debe ser mayor a :max.',
        'file'    => ':attribute no debe ser mayor a :max kilobytes.',
        'string'  => ':attribute no debe ser mayor a :max caracteres.',
        'array'   => ':attribute no debe tener mas de :max items.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'file'    => 'El campo :attribute debe ser al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe ser al menos :min caracteres.',
        'array'   => 'El campo :attribute debe tener al menos :min items.',
    ],
    'not_in'               => 'La selección :attribute es invalida.',
    'numeric'              => 'El campo :attribute debe ser a number.',
    'present'              => 'El campo :attribute field debe ser present.',
    'regex'                => 'El campo :attribute format is invalido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other este en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values es present.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values es present.',
    'required_without'     => 'El campo :attribute es requerido cuando :values es not present.',
    'required_without_all' => 'El campo :attribute es requerido cuando ningún :values estan presentes.',
    'same'                 => 'El campo :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe ser :size caracteres.',
        'array'   => 'El campo :attribute deve contener :size items.',
    ],
    'string'               => 'El campo :attribute debe ser texto.',
    'timezone'             => 'El campo :attribute debe ser una Zona de Tiempo válida.',
    'unique'               => 'Este :attribute ya se encuentra en uso.',
    'uploaded'             => 'Fallo la subida de archivos en el campo :attribute.',
    'url'                  => 'El formato del campo :attribute es invalido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

   /* 'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        /*'name' => [
            'required' => 'El nombre es requerido'
        ],
    ],*/

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'=>'Nombre',
        'titulo'=>'Título',
        'precio'=>'Precio',
        'categoria'=>'Categoría',
        'categoria_id'=>'Categoría',
        'descripcion'=>'Descripción',
        'tipo_accion'=>'Quiero',
        'tipo_producto'=>'Tipo',
        'email'=>'Email',
        ],

];