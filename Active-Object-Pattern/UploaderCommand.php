<?php

require_once 'MultiFileUploader.php';
class UploaderCommand
{
    private $size;
    private $chunk;
    private $uploaded;
    private $multiUploader;
    /**
     * UploaderCommand constructor.
     * @param int $speed
     * @param int $size
     */
    public function __construct(int $speed, int $size, MultiFileUploader $multiUploader)
    {
        $this->size = $size;
        $this->chunk = $size / $speed;
        $this->multiUploader = $multiUploader;
    }

    function execute(){
        $this->uploaded += $this->chunk;

        print "\n $this->uploaded / $this->size";
        if($this->uploaded < $this->size)
            $this->multiUploader->addUploader($this);
    }
}