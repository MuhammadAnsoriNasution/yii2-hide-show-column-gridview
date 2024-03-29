<?php

namespace ansori\hideshowcolumngridview;

use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;

/**
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0
 */
class Bootstrap implements BootstrapInterface {

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app) {
        Yii::setAlias("@hideshowcolumngridview", __DIR__);
        Yii::setAlias("@ansori/hideshowcolumngridview", __DIR__);
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['hideshowcolumngridview'])) {
                $app->getModule('gii')->generators['hideshowcolumngridview'] = 'ansori\hideshowcolumngridview\generators\Generator';
            }
        }
    }

}
