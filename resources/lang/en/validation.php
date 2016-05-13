<?php

return [

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

    'attributes'           => [
        'name'                  => 'nome',
        'password'              => 'senha',
        'password_confirmation' => 'confirmação da senha',
        'title'                 => 'título',
        'description'           => 'descrição',
        'abbreviation'          => 'abreviação',
        'order'                 => 'ordem',
        'fone'                  => 'telefone',
        'document_number'       => 'número do documento',
        'due_date'              => 'data de vencimento',
        'amount'                => 'valor',
    ],

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

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data depois de :date.',
    'alpha'                => 'O campo :attribute só pode conter letras.',
    'alpha_dash'           => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num'            => 'O campo :attribute só pode conter letras e números.',
    'array'                => 'O campo :attribute deve ser uma array.',
    'before'               => 'O campo :attribute deve ser uma data anterior a :date.',

    'between'              => [
        'numeric' => 'O campo :attribute deve estár entre :min e :max.',
        'file'    => 'O campo :attribute deve estár entre :min e :max kilobites.',
        'string'  => 'O campo :attribute deve estár entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser Verdadeiro or Falso.',
    'confirmed'            => 'O campo :attribute de confirmação não corresponde.',
    'date'                 => 'O campo :attribute não é uma data válida.',
    'date_format'          => 'O campo :attribute não coincide com o formato :format.',
    'different'            => 'O campo :attribute e :other deve ser diferente.',
    'digits'               => 'O campo :attribute deve ter :digits digitos.',
    'digits_between'       => 'O campo :attribute deve estár entre :min e :max digits.',
    'email'                => 'O campo :attribute deve ser um endereço de Email válido.',
    'exists'               => 'O campo :attribute selecionado é inválido.',
    'filled'               => 'O campo :attribute é obrigatório.',
    'image'                => 'O campo :attribute deve ser uma imagem.',
    'in'                   => 'O campo :attribute selecionado é inválido.',
    'integer'              => 'O campo :attribute deve ser um número inteiro.',
    'ip'                   => 'O campo :attribute deve ser um endereço de IP válido.',
    'json'                 => 'O campo :attribute deve estár no formato JSON.',
    'max'                  => [
        'numeric' => 'O campo :attribute não pode ser superior a :max.',
        'file'    => 'O campo :attribute não pode ser superior a :max kilobites.',
        'string'  => 'O campo :attribute não pode ser superior a :max caracteres.',
        'array'   => 'O campo :attribute não pode conter mais de :max itens.',
    ],
    'mimes'                => 'O campo :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ser pelo menos :min.',
        'file'    => 'O campo :attribute deve ser pelo menos :min kilobites.',
        'string'  => 'O campo :attribute deve ser pelo menos :min caracteres.',
        'array'   => 'O campo :attribute deve conter pelo menos :min itens.',
    ],
    'not_in'               => 'o :attribute selecionado é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'regex'                => 'O formato do campo :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other está em :value.',
    'required_unless'      => 'O campo :attribute é obrigatório unless :other está em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum :values está presente.',
    'same'                 => 'O campo :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file'    => 'O campo :attribute deve ter :size kilobites.',
        'string'  => 'O campo :attribute deve ter :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size itens.',
    ],
    'string'               => 'O campo :attribute deve ser uma string.',
    'timezone'             => 'O campo :attribute deve ser uma zona válida.',
    'unique'               => 'O campo :attribute já está sendo utilizado, informe outro.',
    'url'                  => 'O formato do campo :attribute é inválido.',

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

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

];
