<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;
use Mini\Model\Song;

class HomeController
{

    private $songModel;
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */



    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }


    function getStudent()
    {

        $this->songModel=new Song();
        $estudiantes=$this->songModel->getAllStudent();
        $estudios=$this->songModel->getAllStidios();


        echo json_encode(['estudiantes'=>$estudiantes,'estudios'=>$estudios]);
    }
}
