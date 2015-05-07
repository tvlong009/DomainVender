<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ScrollToAsset extends AssetBundle {
    public $sourcePath = '@vendor/flesler/jquery.scrollto';
    public $css = [
    ];
    public $js = [
        'jquery.scrollTo.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}