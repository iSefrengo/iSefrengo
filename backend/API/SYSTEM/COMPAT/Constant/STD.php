<?php
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2004 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Aidan Lister <aidan@php.net>                                |
// +----------------------------------------------------------------------+
//
// $Id: STD.php 28 2008-05-11 19:18:49Z mistral $


/**
 * Replace commandline constants
 *
 * @category    PHP
 * @package     PHP_Compat
 * @link        http://php.net/features.commandline
 * @author      Aidan Lister <aidan@php.net>
 * @version     $Revision: 28 $
 * @since       PHP 4.3.0
 */
if (!defined('STDIN')) {
    define('STDIN', fopen('php://stdin', 'r'));
}

if (!defined('STDOUT')) {
    define('STDOUT', fopen('php://stdout', 'w'));
}

if (!defined('STDERR')) {
    define('STDERR', fopen('php://stderr', 'w'));
}

?>