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

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL valida.',
    'after'                => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El :attribute solo puede contener letras.',
    'alpha_dash'           => 'El :attribute solo puede contener letras, numeros y guiones.',
    'alpha_num'            => 'El :attribute solo puede contener letras y numeros.',
    'array'                => 'El :attribute debe ser un array.',
    'before'               => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmacion de :attribute no coincide.',
    'date'                 => 'El :attribute no corresponde con una fecha valida.',
    'date_format'          => 'El :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'los campos :attribute y :other deben ser diferentes.',
    'digits'               => 'El :attribute debe ser un numero de :digits digitos.',
    'digits_between'       => 'El :attribute debe contener entre :min y :max digitos.',
    'dimensions'           => 'El :attribute tiene dimensiones invalidas de imagen.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser una direccion de correo valida.',
    'exists'               => 'El :attribute seleccionado es invalido.',
    'file'                 => 'El :attribute debe ser una archivo.',
    'filled'               => 'El campo :attribute debe tener algun valor.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es invalido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El :attribute debe ser un numero entero.',
    'ip'                   => 'El :attribute debe ser una direccion IP valida.',
    'ipv4'                 => 'El :attribute debe ser una direccion IPv4 valida.',
    'ipv6'                 => 'El :attribute debe ser una direccion IPv6 valida.',
    'json'                 => 'El :attribute debe ser una cadena de texto JSON valida.',
    'max'                  => [
        'numeric' => 'El :attribute no debe ser mayor a :max.',
        'file'    => 'El :attribute no debe pesar mas de :max kilobytes.',
        'string'  => 'El :attribute no debe contener mas de :max caracteres.',
        'array'   => 'El :attribute no debe contener mas de :max elementos.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe tener al menos :min.',
        'file'    => 'El :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El :attribute debe contener al menos :min caracteres.',
        'array'   => 'El :attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El  :attribute seleccionado es invalido.',
    'numeric'              => 'El  :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato de :attribute es invalido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando el :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values esta presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values esta presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no esta presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values estan presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe pesar :size kilobytes.',
        'string'  => 'El :attribute debe contener :size caracteres.',
        'array'   => 'El :attribute debe contener :size elementos.',
    ],
    'string'               => 'El :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El :attribute debe contener una zona valida.',
    'unique'               => 'El :attribute ya esta en uso.',
    'uploaded'             => 'El :attribute fallo al ser cargado.',
    'url'                  => 'El formato de :attribute es invalido.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

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

    'attributes' => [],

];
