<?php
require 'vendor/autoload.php';

class Narrow extends \atk4\ui\Layout\Generic {
    public $defaultTemplate = __DIR__.'/narrow.html';
}

$app = new \atk4\ui\App('artik292');
$app->initLayout('Centered');
$app->layout->template->del('Header');
$logo = 'logo.png';
$app->layout->add(['Image',$logo,'small centered'],'Header');
                //$this->layout->add(['Label','Work','red right'],'Header');
$app->layout->add(['Header','Artik 292','size'=>'huge','aligned' => 'center',],'Header');

//$app->initLayout(new Narrow);

class Clock extends \atk4\ui\View
{
    public $defaultTemplate = __DIR__.'/index.html';
    function init()

    {
      parent::init();
      //$this->add(['Label','WORK!']);

    }

}

$app->add(['Header',"It's already",'huge centered']);

$app->add([new Clock()]);
//$app->add(['Label','WOOOORk']);

$app->add(['Image','https://i.pinimg.com/originals/d3/25/76/d325763d0f71615f23e9c45a04d71083.jpg','medium']);

$app->add(['Header',"Are you happy?",'huge centered']);

$app->add(['Label',"Pop a joy Karlis",'icon'=>'pills','right ribbon red big'])->link('https://www.pornhub.com');


//$app->add(new Dashboard())->setModel(new Guest($app->db));
