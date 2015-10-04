<?php
/**
 * @copyright Copyright &copy; Marc Huizinga, CSA, 2015
 * @package yii2
 * @version 0.0.1
 */

//namespace yii\grid;
namespace csa\grid;

class GridView extends \yii\grid\GridView 
{
	// change the following line
	//public $tableOptions = ['class' => 'table table-striped table-bordered'];
	/**
	 * CSA = table-grid
	 * + CSS;
	 .table.table-grid th, 
	 .table.table-grid td {
		white-space: nowrap;
		overflow: hidden;
		text-overflow:ellipsis;
	}
	 */
	public $tableOptions = [
		//table table-striped table-bordered table-condensed table-hover
		'class' => 'table table-grid table-striped table-condensed',
		'style' => '
			width: 100%;
			table-layout: fixed;
		',
	];
	
	/*
	// override styling of your data columns
	public $dataColumnClass = 'frontend\widgets\MyDataColumn';

	// override styling of your pager
	public $pager = [
		'options' => ['class' => 'pagination'],
		'firstPageCssClass' => 'first',
		'lastPageCssClass' => 'last',
		'prevPageCssClass' => 'prev',
		'nextPageCssClass' => 'next',
		'activePageCssClass' => 'active',
		'disabledPageCssClass' => 'disabled'
	];

	// override styling of your sorter
	public $sorter = ['options' => ['class' => 'sorter']];

	// override other styles through these options
	public $options = ['class' => 'grid-view'];
	public $headerRowOptions = [];
	public $footerRowOptions = [];
	public $rowOptions = [];
	*/

	// override styling of your pager
	public $pager = [
		'class'=>'csa\widgets\LinkPager',//i18n formatting
		'options' => ['class' => 'pagination'],
		'firstPageLabel'=>'««', 
		'lastPageLabel'=>'»»', 
	];
	
	
}
