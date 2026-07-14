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

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':other :value olduğunda :attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute, :date tarihinden sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date tarihine eşit ya da sonrası bir tarih olmalıdır.',
    'alpha' => ':attribute sadece harf içermelidir.',
    'alpha_dash' => ':attribute sadece harf, rakam, tire ve alt çizgi içermelidir.',
    'alpha_num' => ':attribute sadece harf ve rakam içermelidir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute, :date tarihinden önceki bir tarih olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihine eşit ya da öncesinde bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min ile :max arasında olmalıdır.',
        'file' => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min ile :max karakter arasında olmalıdır.',
        'array' => ':attribute :min ile :max öğe arasında olmalıdır.',
    ],
    // Diğer çeviriler
    'boolean' => ':attribute alanı doğru ya da yanlış olmalıdır.',
    'confirmed' => ':attribute teyidi eşleşmiyor.',
    'current_password' => 'Parola yanlış.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute, :date tarihine eşit olmalıdır.',
    'date_format' => ':attribute, :format formatına uymuyor.',
    'declined' => ':attribute reddedilmelidir.',
    'declined_if' => ':other :value olduğunda :attribute reddedilmelidir.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute, :min ile :max rakamları arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanında yinelenen bir değer var.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şunlardan biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersiz.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanının bir değeri olmalıdır.',
    'gt' => [
        'numeric' => ':attribute :value değerinden büyük olmalıdır.',
        'file' => ':attribute :value kilobayttan büyük olmalıdır.',
        'string' => ':attribute :value karakterden fazla olmalıdır.',
        'array' => ':attribute :value öğesinden fazlasını içermelidir.',
    ],
    'gte' => [
        'numeric' => ':attribute en az :value değerinde olmalıdır.',
        'file' => ':attribute en az :value kilobayt olmalıdır.',
        'string' => ':attribute en az :value karakter olmalıdır.',
        'array' => ':attribute en az :value öğeye sahip olmalıdır.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde yok.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute :value değerinden küçük olmalıdır.',
        'file' => ':attribute :value kilobayttan küçük olmalıdır.',
        'string' => ':attribute :value karakterden az olmalıdır.',
        'array' => ':attribute :value öğesinden az olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute :value değerine eşit veya daha az olmalıdır.',
        'file' => ':attribute en fazla :value kilobayt olmalıdır.',
        'string' => ':attribute en fazla :value karakter olmalıdır.',
        'array' => ':attribute :value öğesinden fazla içermemelidir.',
    ],
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'numeric' => ':attribute :max değerinden daha büyük olmamalıdır.',
        'file' => ':attribute :max kilobayttan büyük olmamalıdır.',
        'string' => ':attribute :max karakterden büyük olmamalıdır.',
        'array' => ':attribute :max öğeden fazla olmamalıdır.',
    ],
    'mimes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'mimetypes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğeye sahip olmalıdır.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
