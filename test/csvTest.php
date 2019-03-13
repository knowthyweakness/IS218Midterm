<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 3/12/2019
 * Time: 10:21 PM
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class csvTest extends TestCase
{

    public function testOpenCSV(): void
    {
        $this->assertTrue(
            method_exists(CSV::class, 'openCSV')
        );
    }
    public function testCreateArray(): void
    {
        $this->assertTrue(
            method_exists(CSV::class, 'createArray')
        );
    }
    public function testPrintArray(): void
    {
        $this->assertTrue(
            method_exists(CSV::class, 'printArray')
        );
    }
}