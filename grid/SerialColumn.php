<?php
/**
 * @copyright Copyright &copy; Marc Huizinga, CSA, 2015
 * @package yii2
 * @version 0.0.1
 */

//namespace yii\grid;
namespace csa\grid;

use Yii;
use yii\grid\DataColumn;

/**
 * SerialColumn displays a column of row numbers (1-based).
 *
 * To add a SerialColumn to the [[GridView]], add it to the [[GridView::columns|columns]] configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     // ...
 *     [
 *         'class' => 'yii\grid\SerialColumn',
 *         // you may configure additional properties here
 *     ],
 * ]
 * ```
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
//class SerialColumn extends Column
class SerialColumn extends DataColumn
{
    public $header = '#';

    /**
     * @inheritdoc
	 * CSA enhancement i18n formatting
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        $pagination = $this->grid->dataProvider->getPagination();
        if ($pagination !== false) {
            //return $pagination->getOffset() + $index + 1;
            return Yii::$app->formatter->asInteger($pagination->getOffset() + $index + 1);
        } else {
            //return $index + 1;
            return Yii::$app->formatter->asInteger($index + 1);
        }
    }
}
