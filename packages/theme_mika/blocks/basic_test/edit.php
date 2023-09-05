<p>This is the edit template for the basic test block. </p>

<?php $content = isset($content) ? $content : 'default'; ?>

<?php echo $form->label('content', 'Name'); ?>
<?php echo $form->text('content', $content, array('style' => 'width: 320px')); ?>