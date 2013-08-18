<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute muss akzeptiert werden.",
    "active_url"       => ":attribute ist keine gültige Internet-Adresse.",
    "after"            => ":attribute muss ein Datum nach dem :date sein.",
    "alpha"            => ":attribute darf nur aus Buchstaben bestehen.",
    "alpha_dash"       => ":attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen. Umlaute (ä, ö, ü) und Eszett (ß) sind nicht erlaubt.",
    "alpha_num"        => ":attribute darf nur aus Buchstaben und Zahlen bestehen.",
    "array"            => ":attribute muss ein Array sein.",
    "before"           => ":attribute muss ein Datum vor dem :date sein.",
    "between"          => array(
        "numeric" => ":attribute muss zwischen :min & :max liegen.",
        "file"    => ":attribute muss zwischen :min & :max kilobytes groß sein.",
        "string"  => ":attribute muss zwischen :min & :max Zeichen lang sein.",
        "array"   => ":attribute muss zwischen :min & :max Elemente haben."
    ),
    "confirmed"        => ":attribute stimmt nicht mit der Bestätigung überein.",
    "date"             => ":attribute ist kein gültiges Datum.",
    "date_format"      => ":attribute entspricht nicht dem gültigen Format für :format.",
    "different"        => ":attribute und :other müssen sich unterscheiden.",
    "digits"           => ":attribute muss :digits Stellen haben.",
    "digits_between"   => ":attribute muss zwischen :min und :max Stellen haben.",
    "email"            => ":attribute Format ist ungültig.",
    "exists"           => "Der gewählte Wert für :attribute ist ungültig.",
    "image"            => ":attribute muss ein Bild sein.",
    "in"               => "Der gewählte Wert für :attribute ist ungültig.",
    "integer"          => ":attribute muss eine ganze Zahl sein.",
    "ip"               => ":attribute muss eine gültige IP-Adresse sein.",
    "max"              => array(
        "numeric" => ":attribute muss kleiner als :max sein.",
        "file"    => ":attribute muss kleiner als :max Kilobytes groß sein.",
        "string"  => ":attribute muss kürzer als :max Zeichen sein.",
        "array"   => ":attribute darf nicht mehr als :max Elemente haben."
    ),
    "mimes"            => ":attribute muss den Dateityp :values haben.",
    "min"              => array(
        "numeric" => ":attribute muss größer als :min sein.",
        "file"    => ":attribute muss größer als :min Kilobytes groß sein.",
        "string"  => ":attribute muss mindestens :min Zeichen lang sein.",
        "array"   => ":attribute muss mindestens :min Elemente haben."
    ),
    "not_in"           => "Der gewählte Wert für :attribute ist ungültig.",
    "numeric"          => ":attribute muss eine Zahl sein.",
    "regex"            => ":attribute, das Format ist ungültig.",
    "required"         => ":attribute muss ausgefüllt sein.",
    "required_if"      => ":attribute muss ausgefpllt sein whenn :other :value ist.",
    "required_with"    => ":attribute muss angegeben werden wenn :values ausgefüllt wurde.",
    "required_without" => ":attribute muss angegeben werden wenn :values nicht ausgefüllt wurde.",
    "same"             => ":attribute und :other müssen übereinstimmen.",
    "size"             => array(
        "numeric" => ":attribute muss gleich :size sein.",
        "file"    => ":attribute muss :size Kilobyte groß sein.",
        "string"  => ":attribute muss :size Zeichen lang sein.",
        "array"   => ":attribute muss genau :size Elemente haben."
    ),
    "unique"           => ":attribute ist schon vergeben.",
    "url"              => "Das Format von :attribute ist ungültig.",

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

    'custom' => array(),

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

    'attributes' => array(),

);