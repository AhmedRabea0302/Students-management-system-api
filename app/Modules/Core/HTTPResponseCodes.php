<?php
declare(strict_types=1);

namespace App\Models\Core;

abstract class HTTPResponseCodes {
    const Success = [
        "title" => "Success",
        "code" => 200,
        "message" => "Request Has Been Successfully Processed"
    ];

    const NotFound = [
        "title" => "not_found_error",
        "code" => 400,
        "message" => "Couldn't Locate Resource"
    ];
}