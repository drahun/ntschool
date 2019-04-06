<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Classes\AwesomeClass;
use App\Classes\Uploader;

class TestController extends Controller
{
    protected $awesome;

    public function __construct(Request $request, AwesomeClass $awesome)
    {
        parent::__construct($request);
        $this->awesome = $awesome;
    }



    public function awesomeMethod(AwesomeClass $awesome)
    {
        //AwesomeClass $awesome
        //$awesome = $this->awesome;
        //$awesome = new AwesomeClass();
/*
       var_dump($this->awesome->getCounter());
        var_dump($this->awesome->getCounter());
        var_dump($this->awesome->getCounter());
        var_dump($this->awesome->getCounter());


*/
      $a = resolve('App\Classes\AwesomeClass');
        var_dump($a->getCounter());
        var_dump($a);

$b = resolve('App\Classes\AwesomeClass');
        var_dump($b->getCounter());
        var_dump($b);


       // return '111';

        /*return response('111', 200)
            ->header('Content-Type', 'text/html')
            ->header('access-control-allow-origin', '*')
            ->cookie('mycookie', '1111', 86400 / 60);*/

/*

        return response(json_encode($arr), 200)
            ->header('Content-Type', 'application/json');

*/

        //echo '111';
    }
	    public function testGet(Uploader $uploader)
    {
        return '<form enctype="multipart/form-data" method="POST">'.
            csrf_field() .
            '<input type="file" name="file" />
            <input type="submit" value="Go!" />
        </form>';
    }

    public function testPost(Request $request, Uploader $uploader, Upload $uploadModel)
    {
        $rules = [
            'maxSize' => 5 * 1024 * 1024,
            'minSize' => 10 * 1024,
            'allowedExt' => [
                'jpeg',
                'jpg',
                'png',
                'gif',
                'bmp',
                'tiff'
            ],
            'allowedMime' => [
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                'image/tiff'
            ],
        ];

        if ($uploader->validate($request, 'file', $rules)) {
            $uploadedPath = $uploader->upload();

            if ($uploadedPath !== false) {
                $uploadsModel = $uploader->register($uploadModel);
                $uploadedProps = $uploader->getProps();
            }

            return $uploadedPath !== false ? 'OK' : 'NE OK';
        }

        return $uploader->getErrors();
    }
}
