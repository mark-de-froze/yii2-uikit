<?php

namespace worstinme\uikit\widgets;


class ScrollPager extends \kop\y2sp\ScrollPager
{
    public $paginationSelector = '.grid-view .pagination';
    public $container = '.grid-view tbody';
    public $item = 'tr';
    public $triggerTemplate = '<tr class="ias-trigger" style="background: none; border: none; height: 0;"><td colspan="100%" class="uk-text-center"><div class="uk-position-bottom-center" style="bottom: -50px;"><a class="uk-button uk-button-secondary">{text}</a></div></td></tr>';
    public $spinnerTemplate = '<div class="ias-spinner uk-position-absolute uk-width-1-1"><div class="uk-position-center"><div uk-spinner></div></div></div>';
    public $noneLeftText;
    public $triggerText;
    public $noneLeftTemplate = '<tr class="ias-noneleft"><td colspan="100%" class="uk-text-center uk-h3">{text}</td></tr>';

}