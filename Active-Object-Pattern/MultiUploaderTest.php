<?php

require_once 'MultiFileUploader.php';
require_once 'UploaderCommand.php';

use PHPUnit\Framework\TestCase;

class MultiUploaderTest extends TestCase
{
    function testItCanUploadMultipleFiles()
    {
        $multiUploader = new MultiFileUploader();
        $speed = 8;
        $size = 100;
        $uploaderOne = new UploaderCommand($speed, $size, $multiUploader);
        $multiUploader->addUploader($uploaderOne);

        $speed = 1;
        $size = 50;
        $uploaderTwo = new UploaderCommand($speed, $size, $multiUploader);
        $multiUploader->addUploader($uploaderTwo);

        $multiUploader->run();
    }

}
