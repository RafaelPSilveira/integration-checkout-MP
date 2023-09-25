<?php

    return[
        'mercadopago' => [
            'public_key' => env('VITE_MERCADO_PAGO_PUBLIC_KEY'),
            'access_token' => env('MERCADOPAGO_ACCESS_TOKEN'),
            'buyer_email' => env('MERCADOPAGO_BUYER_EMAIL'),
        ]
    ]

?>