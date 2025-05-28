<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Facades\Http;

class CheckAgainstDisposableMail
{
    public function __invoke(string $email)
    {
        $response = Http::get("https://disposable.debounce.io/?email=$email");
        dump($response->getBody()->getContents());
    }
}

1. SSH
- kalitlar (public/private)
- ssh orqali serverga ulanish
2. Github Actions
- workflow
- secrets
- runner (VM - virtual mashina)
