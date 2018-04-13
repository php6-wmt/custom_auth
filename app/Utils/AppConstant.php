<?php

namespace App\Utils;

class AppConstant
{
    const PAGINATE = 20;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    const STATUS_FAIL = 'fail';
    const STATUS_OK = 'ok';

    // API status codes
    const OK = 200;
    const CREATED = 201;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const UNPROCESSABLE_REQUEST = 422;
    const INTERNAL_SERVER_ERROR = 500;
    const TOKEN_INVALID = 503;

    // FULL CONTACT STATUS CODE
    const CONTACT_IN_PROCESSING = 202;
    const TOO_MANY_REQUEST = 429;

    const BASE_URL = 'http://localhost:8000';

    // Guard
    const ADMIN_GUARD = 'admin';
    const USER_GUARD = 'user';
    const SUPERADMIN_GUARD = 'superadmin';

}