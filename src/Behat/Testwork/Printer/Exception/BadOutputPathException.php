<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\Printer\Exception;

use Exception;
use RuntimeException;

/**
 * Bad output path exception.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class BadOutputPathException extends RuntimeException implements PrinterException
{
    /**
     * @var string
     */
    private $path;

    /**
     * Initializes exception.
     *
     * @param string $message
     * @param string $path
     */
    public function __construct($message, $path)
    {
        $this->path = $path;

        parent::__construct($message);
    }

    /**
     * Returns exception causing path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}