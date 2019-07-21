<?php

use app\models\Article;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('category', $selectedCategory,$categories,['class'=>'form-control']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
