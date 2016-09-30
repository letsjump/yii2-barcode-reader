<?php

/**
 * @copyright  Copyright &copy; Gianpaolo Scrigna, letsjump, 2016
 * @package    yii2-widgets
 * @subpackage yii2-widget-barcodyii
 * @version    1.0
 */

namespace letsjump\barcodyii;
use yii\web\AssetBundle;

/**
 * Asset bundle for ActiveForm Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since  1.0
 */
class BarcodyiiAsset extends AssetBundle
{
    public $sourcePath = '@vendor/letsjump/barcodyii';
    
    public $autoGenerate = true;
    /**
     * @inheritdoc
     */
    public $js = [
        'jquery.cookie.js',
    ];
    public $depends = [
        'assets/jquery-code-scanner.js',
    ];
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->depends = array_merge($this->depends, [
            'yii\web\YiiAsset',
        ]);
        
        parent::init();
    }
    
}
