<?php 
namespace nill\widgetapn;

use yii\base\Widget;
use yii\helpers\Html;
use vova07\blogs\models\frontend\Blog;

class Widgetapn extends Widget
{
    public $limit;
    public $customers;

    public function init()
    {
        parent::init();
        $this->getNews($this->limit);
    }

    public function getNews($limit){

        $this->customers = Blog::find()->published()
            ->limit($limit)
            ->orderBy(['id'=>SORT_DESC])
            ->asArray()
            ->all();
    }
    
    public function run()
    {
        return $this->render('apn',[
            'news'=>$this->customers,
        ]);
    }
}