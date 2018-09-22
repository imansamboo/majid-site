<div class="form-group <?php echo e($errors->has('menu_id') ? 'has-error' : ''); ?>">
    <label for="menu_id" class="control-label"><?php echo e('Menu Id'); ?></label>
    <input class="form-control" name="menu_id" type="number" id="menu_id" value="<?php echo e(isset($photo->menu_id) ? $photo->menu_id : ''); ?>" >
    <?php echo $errors->first('menu_id', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('type') ? 'has-error' : ''); ?>">
    <label for="type" class="control-label"><?php echo e('Type'); ?></label>
    <input class="form-control" name="type" type="text" id="type" value="<?php echo e(isset($photo->type) ? $photo->type : ''); ?>" >
    <?php echo $errors->first('type', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('where') ? 'has-error' : ''); ?>">
    <label for="where" class="control-label"><?php echo e('Where'); ?></label>
    <input class="form-control" name="where" type="text" id="where" value="<?php echo e(isset($photo->where) ? $photo->where : ''); ?>" >
    <?php echo $errors->first('where', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('file') ? 'has-error' : ''); ?>">
    <label for="file" class="control-label"><?php echo e('File'); ?></label>
    <input class="form-control" name="file" type="file" id="file" value="<?php echo e(isset($photo->file) ? $photo->file : ''); ?>" >
    <?php echo $errors->first('file', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
