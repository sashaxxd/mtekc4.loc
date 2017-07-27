<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name,


            ],
            'name',
            'content:html',
            'price',
            'article',
            'keywords',
            'description',
            'img',
//            'hit',
            [
                'attribute' => 'hit',
                'value' => !$model->hit ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                 'format' => 'html',
            ],
//            'new',
            [
                'attribute' => 'new',
                'value' => !$model->new ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
//            'sale',
            [
                'attribute' => 'sale',
                'value' => !$model->sale ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
//            'views',
        ],
    ]) ?>

</div>
