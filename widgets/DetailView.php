<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace worstinme\uikit\widgets;

class DetailView extends \yii\widgets\DetailView
{
    public $options = ['class' => 'uk-table uk-table-divider'];
    public $template = '<tr><th class="uk-width-medium" {captionOptions}>{label}</th><td{contentOptions}>{value}</td></tr>';
}