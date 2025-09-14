<?php

return [

    /*
    |--------------------------------------------------------------------------
    | خطوط زبان اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | این خطوط شامل پیام‌های خطای پیش‌فرض کلاس اعتبارسنج لاراول هستند.
    | برخی از این قوانین دارای چندین نسخه هستند، مثل قوانین اندازه.
    | شما می‌توانید این پیام‌ها را به دلخواه خود ویرایش کنید.
    |
    */

    'accepted' => ':attribute باید پذیرفته شود.',
    'accepted_if' => ':attribute باید پذیرفته شود وقتی :other برابر :value باشد.',
    'active_url' => ':attribute باید یک URL معتبر باشد.',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخی بعد یا مساوی :date باشد.',
    'alpha' => ':attribute باید فقط شامل حروف باشد.',
    'alpha_dash' => ':attribute باید فقط شامل حروف، اعداد، خط تیره و زیرخط (_) باشد.',
    'alpha_num' => ':attribute باید فقط شامل حروف و اعداد باشد.',
    'any_of' => ':attribute نامعتبر است.',
    'array' => ':attribute باید یک آرایه باشد.',
    'ascii' => ':attribute باید فقط شامل کاراکترها و نمادهای تک‌بایتی باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی قبل یا مساوی :date باشد.',
    'between' => [
        'array' => ':attribute باید بین :min تا :max آیتم داشته باشد.',
        'file' => ':attribute باید بین :min تا :max کیلوبایت باشد.',
        'numeric' => ':attribute باید بین :min تا :max باشد.',
        'string' => ':attribute باید بین :min تا :max کاراکتر باشد.',
    ],
    'boolean' => ':attribute باید فقط true یا false باشد.',
    'can' => ':attribute دارای مقدار غیرمجاز است.',
    'confirmed' => 'تأیید :attribute مطابقت ندارد.',
    'contains' => ':attribute فاقد مقدار لازم است.',
    'current_password' => 'رمز عبور اشتباه است.',
    'date' => ':attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => ':attribute باید تاریخی مساوی :date باشد.',
    'date_format' => ':attribute باید با فرمت :format مطابقت داشته باشد.',
    'decimal' => ':attribute باید :decimal رقم اعشار داشته باشد.',
    'declined' => ':attribute باید رد شود.',
    'declined_if' => ':attribute باید رد شود وقتی :other برابر :value باشد.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min تا :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute نامعتبر است.',
    'distinct' => ':attribute دارای مقدار تکراری است.',
    'doesnt_end_with' => ':attribute نباید با یکی از موارد زیر پایان یابد: :values.',
    'doesnt_start_with' => ':attribute نباید با یکی از موارد زیر شروع شود: :values.',
    'email' => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => ':attribute باید با یکی از این مقادیر تمام شود: :values.',
    'enum' => 'مقدار انتخاب شده برای :attribute نامعتبر است.',
    'exists' => 'مقدار انتخاب شده برای :attribute نامعتبر است.',
    'extensions' => ':attribute باید یکی از پسوندهای زیر را داشته باشد: :values.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => ':attribute باید دارای مقدار باشد.',
    'gt' => [
        'array' => ':attribute باید بیشتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید بیشتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'string' => ':attribute باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte' => [
        'array' => ':attribute باید حداقل :value آیتم یا بیشتر داشته باشد.',
        'file' => ':attribute باید حداقل :value کیلوبایت یا بیشتر باشد.',
        'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد.',
        'string' => ':attribute باید حداقل :value کاراکتر یا بیشتر باشد.',
    ],
    'hex_color' => ':attribute باید یک رنگ هگزادسیمال معتبر باشد.',
    'image' => ':attribute باید یک تصویر باشد.',
    'in' => 'مقدار انتخاب شده برای :attribute نامعتبر است.',
    'in_array' => ':attribute باید در :other موجود باشد.',
    'in_array_keys' => ':attribute باید حداقل یکی از کلیدهای زیر را داشته باشد: :values.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => ':attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => ':attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => ':attribute باید یک رشته JSON معتبر باشد.',
    'list' => ':attribute باید یک لیست باشد.',
    'lowercase' => ':attribute باید حروف کوچک باشد.',
    'lt' => [
        'array' => ':attribute باید کمتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر از :value باشد.',
        'string' => ':attribute باید کمتر از :value کاراکتر باشد.',
    ],
    'lte' => [
        'array' => ':attribute نباید بیشتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید کمتر یا مساوی :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر یا مساوی :value باشد.',
        'string' => ':attribute باید کمتر یا مساوی :value کاراکتر باشد.',
    ],
    'mac_address' => ':attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => ':attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'max_digits' => ':attribute نباید بیشتر از :max رقم داشته باشد.',
    'mimes' => ':attribute باید یک فایل با فرمت: :values باشد.',
    'mimetypes' => ':attribute باید یک فایل با فرمت: :values باشد.',
    'min' => [
        'array' => ':attribute باید حداقل :min آیتم داشته باشد.',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => ':attribute باید حداقل :min باشد.',
        'string' => ':attribute باید حداقل :min کاراکتر باشد.',
    ],
    'min_digits' => ':attribute باید حداقل :min رقم داشته باشد.',
    'missing' => ':attribute باید وجود نداشته باشد.',
    'missing_if' => ':attribute باید وجود نداشته باشد وقتی :other برابر :value است.',
    'missing_unless' => ':attribute باید وجود نداشته باشد مگر اینکه :other برابر :value باشد.',
    'missing_with' => ':attribute باید وجود نداشته باشد وقتی :values موجود است.',
    'missing_with_all' => ':attribute باید وجود نداشته باشد وقتی :values موجود هستند.',
    'multiple_of' => ':attribute باید مضربی از :value باشد.',
    'not_in' => 'مقدار انتخاب شده برای :attribute نامعتبر است.',
    'not_regex' => 'فرمت :attribute نامعتبر است.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'password' => [
        'letters' => ':attribute باید حداقل یک حرف داشته باشد.',
        'mixed' => ':attribute باید حداقل یک حرف بزرگ و یک حرف کوچک داشته باشد.',
        'numbers' => ':attribute باید حداقل یک عدد داشته باشد.',
        'symbols' => ':attribute باید حداقل یک نماد داشته باشد.',
        'uncompromised' => ':attribute در یک نشت داده یافت شده است. لطفاً مقدار دیگری انتخاب کنید.',
    ],
    'present' => ':attribute باید موجود باشد.',
    'present_if' => ':attribute باید موجود باشد وقتی :other برابر :value باشد.',
    'present_unless' => ':attribute باید موجود باشد مگر اینکه :other برابر :value باشد.',
    'present_with' => ':attribute باید موجود باشد وقتی :values موجود است.',
    'present_with_all' => ':attribute باید موجود باشد وقتی :values موجود هستند.',
    'prohibited' => ':attribute ممنوع است.',
    'prohibited_if' => ':attribute ممنوع است وقتی :other برابر :value باشد.',
    'prohibited_if_accepted' => ':attribute ممنوع است وقتی :other پذیرفته شده باشد.',
    'prohibited_if_declined' => ':attribute ممنوع است وقتی :other رد شده باشد.',
    'prohibited_unless' => ':attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits' => ':attribute باعث می‌شود :other نتواند موجود باشد.',
    'regex' => 'فرمت :attribute نامعتبر است.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_array_keys' => ':attribute باید شامل موارد زیر باشد: :values.',
    'required_if' => ':attribute الزامی است وقتی :other برابر :value باشد.',
    'required_if_accepted' => ':attribute الزامی است وقتی :other پذیرفته شده باشد.',
    'required_if_declined' => ':attribute الزامی است وقتی :other رد شده باشد.',
    'required_unless' => ':attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => ':attribute الزامی است وقتی :values موجود باشد.',
    'required_with_all' => ':attribute الزامی است وقتی همه :values موجود باشند.',
    'required_without' => ':attribute الزامی است وقتی :values موجود نباشد.',
    'required_without_all' => ':attribute الزامی است وقتی هیچ‌کدام از :values موجود نباشند.',
    'same' => ':attribute و :other باید یکسان باشند.',
    'size' => [
        'array' => ':attribute باید شامل :size آیتم باشد.',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'numeric' => ':attribute باید :size باشد.',
        'string' => ':attribute باید :size کاراکتر باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از این موارد شروع شود: :values.',
    'string' => ':attribute باید یک رشته باشد.',
    'timezone' => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute قبلاً استفاده شده است.',
    'uploaded' => 'بارگذاری :attribute ناموفق بود.',
    'uppercase' => ':attribute باید حروف بزرگ باشد.',
    'url' => ':attribute باید یک آدرس URL معتبر باشد.',
    'ulid' => ':attribute باید یک ULID معتبر باشد.',
    'uuid' => ':attribute باید یک UUID معتبر باشد.',

    /*
    |--------------------------------------------------------------------------
    | پیام‌های سفارشی برای اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | این بخش برای تعیین پیام‌های سفارشی هر فیلد استفاده می‌شود.
    | فرمت نام‌گذاری به صورت "attribute.rule" است.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'پیام سفارشی',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | نام‌های سفارشی فیلدها
    |--------------------------------------------------------------------------
    |
    | این بخش به شما اجازه می‌دهد به جای نام انگلیسی فیلدها، نام‌های
    | کاربرپسند و قابل فهم در پیام‌ها استفاده کنید.
    |
    */

    'attributes' => [],

];
