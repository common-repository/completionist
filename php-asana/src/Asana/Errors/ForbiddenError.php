<?php

namespace Asana\Errors;

use Asana\Errors\AsanaError;

#[\AllowDynamicProperties]
class ForbiddenError extends AsanaError
{
    const MESSAGE = 'Forbidden';
    const STATUS = 403;

    public function __construct($response)
    {
        parent::__construct(self::MESSAGE, self::STATUS, $response);
    }
}
