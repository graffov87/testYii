<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'domains-form',
    'enableAjaxValidation'=>false,
)); ?>

    <div class="control-group">
        <?php echo $form->labelEx($model,'domain',array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model,'domain',array('class'=>'input-xxlarge','maxlength'=>255)); ?>
        </div>
        <?php echo $form->error($model,'domain'); ?>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model,'Result',array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textArea($model,'Result',array('rows'=>15, 'cols'=>75)); ?>
        </div>
        <?php echo $form->error($model,'domain'); ?>
    </div>


    <div class="form-actions">
        <?php echo CHtml::submitButton('Сохранить данные'); ?>
    </div>

<?php $this->endWidget(); ?>