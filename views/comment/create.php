<?php

use yii\helpers\Html;
use kartik\rating\StarRating;
use yii\web\JsExpression;
/** @var yii\web\View $this */
/** @var app\models\Comment $model */

$this->title = 'Оставить отзыв';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>