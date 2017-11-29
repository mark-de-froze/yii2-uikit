<?php

namespace worstinme\uikit\widgets;

class GridView extends \yii\grid\GridView
{

	public $tableOptions = ['class' => 'uk-table uk-form  uk-table-striped uk-table-hover uk-table-middle'];
	public $summaryOptions = ['class'=>'uk-text-center'];
	public $pager =  ['class'=> 'worstinme\uikit\widgets\LinkPager'];

	public $headerRowOptions = ['class'=> 'uk-background-primary uk-light'];
	public $filterRowOptions = ['id'=> 'advanced-search', 'hidden' => 'hidden'];

	public function renderFilters()
    {
        if((bool) array_filter($this->filterModel->attributes)) {
            unset($this->filterRowOptions['hidden']);
        }

        return parent::renderFilters();
    }

}