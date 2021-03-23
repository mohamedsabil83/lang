<?php

return [
    'accepted'             => ':attribute muss akzeptiert werden.',
    'active_url'           => ':attribute ist keine gültige Internet-Adresse.',
    'after'                => ':attribute muss ein Datum nach dem :date sein.',
    'after_or_equal'       => ':attribute muss ein Datum nach dem :date oder gleich dem :date sein.',
    'alpha'                => ':attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash'           => ':attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.',
    'alpha_num'            => ':attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array'                => ':attribute muss ein Array sein.',
    'attached'             => 'This :attribute is already attached.',
    'before'               => ':attribute muss ein Datum vor dem :date sein.',
    'before_or_equal'      => ':attribute muss ein Datum vor dem :date oder gleich dem :date sein.',
    'between'              => [
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
        'file'    => ':attribute muss zwischen :min & :max Kilobytes groß sein.',
        'numeric' => ':attribute muss zwischen :min & :max liegen.',
        'string'  => ':attribute muss zwischen :min & :max Zeichen lang sein.',
    ],
    'boolean'              => ':attribute muss entweder \'true\' oder \'false\' sein.',
    'confirmed'            => ':attribute stimmt nicht mit der Bestätigung überein.',
    'date'                 => ':attribute muss ein gültiges Datum sein.',
    'date_equals'          => ':attribute muss ein Datum gleich :date sein.',
    'date_format'          => ':attribute entspricht nicht dem gültigen Format für :format.',
    'different'            => ':attribute und :other müssen sich unterscheiden.',
    'digits'               => ':attribute muss :digits Stellen haben.',
    'digits_between'       => ':attribute muss zwischen :min und :max Stellen haben.',
    'dimensions'           => ':attribute hat ungültige Bildabmessungen.',
    'distinct'             => ':attribute beinhaltet einen bereits vorhandenen Wert.',
    'email'                => ':attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with'            => ':attribute muss eine der folgenden Endungen aufweisen: :values',
    'exists'               => 'Der gewählte Wert für :attribute ist ungültig.',
    'file'                 => ':attribute muss eine Datei sein.',
    'filled'               => ':attribute muss ausgefüllt sein.',
    'gt'                   => [
        'array'   => ':attribute muss mehr als :value Elemente haben.',
        'file'    => ':attribute muss größer als :value Kilobytes sein.',
        'numeric' => ':attribute muss größer als :value sein.',
        'string'  => ':attribute muss länger als :value Zeichen sein.',
    ],
    'gte'                  => [
        'array'   => ':attribute muss mindestens :value Elemente haben.',
        'file'    => ':attribute muss größer oder gleich :value Kilobytes sein.',
        'numeric' => ':attribute muss größer oder gleich :value sein.',
        'string'  => ':attribute muss mindestens :value Zeichen lang sein.',
    ],
    'image'                => ':attribute muss ein Bild sein.',
    'in'                   => 'Der gewählte Wert für :attribute ist ungültig.',
    'in_array'             => 'Der gewählte Wert für :attribute kommt nicht in :other vor.',
    'integer'              => ':attribute muss eine ganze Zahl sein.',
    'ip'                   => ':attribute muss eine gültige IP-Adresse sein.',
    'ipv4'                 => ':attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6'                 => ':attribute muss eine gültige IPv6-Adresse sein.',
    'json'                 => ':attribute muss ein gültiger JSON-String sein.',
    'lt'                   => [
        'array'   => ':attribute muss weniger als :value Elemente haben.',
        'file'    => ':attribute muss kleiner als :value Kilobytes sein.',
        'numeric' => ':attribute muss kleiner als :value sein.',
        'string'  => ':attribute muss kürzer als :value Zeichen sein.',
    ],
    'lte'                  => [
        'array'   => ':attribute darf maximal :value Elemente haben.',
        'file'    => ':attribute muss kleiner oder gleich :value Kilobytes sein.',
        'numeric' => ':attribute muss kleiner oder gleich :value sein.',
        'string'  => ':attribute darf maximal :value Zeichen lang sein.',
    ],
    'max'                  => [
        'array'   => ':attribute darf maximal :max Elemente haben.',
        'file'    => ':attribute darf maximal :max Kilobytes groß sein.',
        'numeric' => ':attribute darf maximal :max sein.',
        'string'  => ':attribute darf maximal :max Zeichen haben.',
    ],
    'mimes'                => ':attribute muss den Dateityp :values haben.',
    'mimetypes'            => ':attribute muss den Dateityp :values haben.',
    'min'                  => [
        'array'   => ':attribute muss mindestens :min Elemente haben.',
        'file'    => ':attribute muss mindestens :min Kilobytes groß sein.',
        'numeric' => ':attribute muss mindestens :min sein.',
        'string'  => ':attribute muss mindestens :min Zeichen lang sein.',
    ],
    'multiple_of'          => ':attribute muss ein Vielfaches von :value sein.',
    'not_in'               => 'Der gewählte Wert für :attribute ist ungültig.',
    'not_regex'            => ':attribute hat ein ungültiges Format.',
    'numeric'              => ':attribute muss eine Zahl sein.',
    'password'             => 'Das Passwort ist falsch.',
    'present'              => ':attribute muss vorhanden sein.',
    'regex'                => ':attribute Format ist ungültig.',
    'relatable'            => 'This :attribute may not be associated with this resource.',
    'required'             => ':attribute muss ausgefüllt werden.',
    'required_if'          => ':attribute muss ausgefüllt werden, wenn :other den Wert :value hat.',
    'required_unless'      => ':attribute muss ausgefüllt werden, wenn :other nicht den Wert :values hat.',
    'required_with'        => ':attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => ':attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.',
    'required_without'     => ':attribute muss ausgefüllt werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => ':attribute muss ausgefüllt werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same'                 => ':attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'array'   => ':attribute muss genau :size Elemente haben.',
        'file'    => ':attribute muss :size Kilobyte groß sein.',
        'numeric' => ':attribute muss gleich :size sein.',
        'string'  => ':attribute muss :size Zeichen lang sein.',
    ],
    'starts_with'          => ':attribute muss mit einem der folgenden Anfänge aufweisen: :values',
    'string'               => ':attribute muss ein String sein.',
    'timezone'             => ':attribute muss eine gültige Zeitzone sein.',
    'unique'               => ':attribute ist bereits vergeben.',
    'uploaded'             => ':attribute konnte nicht hochgeladen werden.',
    'url'                  => ':attribute muss eine URL sein.',
    'uuid'                 => ':attribute muss ein UUID sein.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [
        'address'               => 'Adresse',
        'age'                   => 'Alter',
        'available'             => 'verfügbar',
        'city'                  => 'Stadt',
        'content'               => 'Inhalt',
        'country'               => 'Land',
        'current_password'      => 'Derzeitiges Passwort',
        'date'                  => 'Datum',
        'day'                   => 'Tag',
        'description'           => 'Beschreibung',
        'email'                 => 'E-Mail Adresse',
        'excerpt'               => 'Auszug',
        'first_name'            => 'Vorname',
        'gender'                => 'Geschlecht',
        'hour'                  => 'Stunde',
        'last_name'             => 'Nachname',
        'minute'                => 'Minute',
        'mobile'                => 'Handynummer',
        'month'                 => 'Monat',
        'name'                  => 'Name',
        'password'              => 'Passwort',
        'password_confirmation' => 'Passwort Bestätigung',
        'phone'                 => 'Telefonnummer',
        'second'                => 'Sekunde',
        'sex'                   => 'Geschlecht',
        'size'                  => 'Größe',
        'time'                  => 'Uhrzeit',
        'title'                 => 'Titel',
        'username'              => 'Benutzername',
        'year'                  => 'Jahr',
    ],
];
