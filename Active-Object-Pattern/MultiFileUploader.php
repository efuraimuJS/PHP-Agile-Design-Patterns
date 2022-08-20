<?php


class MultiFileUploader
{
    private $uploaders = array();

    /**
     * MultiFileUploader constructor.
     */
    public function __construct()
    {
    }

    public function addUploader(UploaderCommand $uploader)
    {
        $this->uploaders[] = $uploader;
    }

    public function run()
    {
//        foreach ($this->uploaders as $uploader) $uploader->execute();
        while(!empty($this->uploaders)){
            $uploader = array_shift($this->uploaders);
            $uploader->execute();
        }
    }
}