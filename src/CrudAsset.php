<?php 

namespace ansori\hideshowcolumngridview;

use yii\web\AssetBundle;

/**
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0
 */
class CrudAsset extends AssetBundle
{
    public $sourcePath = '@hideshowcolumngridview/assets';

//    public $publishOptions = [
//        'forceCopy' => true,
//    ];

    public $css = [
        
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'kartik\grid\GridViewAsset',
    ];
    
   public function init() {
       // In dev mode use non-minified javascripts
       $this->js = [
           'hideshow.js',
       ];

       parent::init();
   }
}
