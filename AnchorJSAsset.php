<?php
/**
 *
 *  * @package   yii2-easy-ajax
 *  * @author    Gianpaolo Scrigna <letsjump@gmail.com>
 *  * @link https://github.com/letsjump/yii2-easy-ajax
 *  * @copyright Copyright &copy; Gianpaolo Scrigna, beintech.it, 2017-2020
 *  * @version   1.0.0
 *
 */

namespace letsjump\AnchorJS;

use yii\web\AssetBundle;

/**
 * Class AnimateAsset
 *
 * @package yii2mod\notify
 */
class AnchorJSAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/anchor-js';
    
    /**
     * @var array list of CSS files that this bundle contains.
     */

    public $js = [
        'anchor.min.js'
    ];
}
