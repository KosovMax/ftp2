<?php

require_once '../app/models/Ftp.php';

class testFtp extends PHPUnit_Framework_TestCase
{
    public function testRun()
    {
        $ftp = new Ftp("chc-deaf.org.ua");
        
        $this->assertTrue($ftp->login("chc-deaf", "moskvich408"));
        $this->assertNull($ftp->push_file("/file/maxim3.jpg", "../maxim3.jpg", "gif,png,jpg"));
    }

    public function testFailure()
    {
        $ftp = new Ftp("chc-deaf.org.ua");
        $ftp->login("chc-deaf", "moskvich408");

        $this->assertFalse($ftp->push_file("/file/maxim3.jpg", "../maxim3.jpg", "jpg2"));
        $this->assertFalse($ftp->push_file("/file/maxim3.jpg", "../maxim3.jpg", "doc"));
    }
}