<?php

/*
 * This file is part of local.sntinvest.local project
 * Copyright 2022 dimay.
 */

namespace Sntinvest\Integration\Exceptions;

/**
 * Description of exceptions
 *
 * @author dimay
 */
class InvalidEntryException extends \Exception
{
    public function __construct(string $massege = "", int $code = 0, ?\Throwable $previous = null)
    {
        $massege = str_replace('<br>', "\n", $massege);
        parent::__construct($massege, $code, $previous);
    }
}
