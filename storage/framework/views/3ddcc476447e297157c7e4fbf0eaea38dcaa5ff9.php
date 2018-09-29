<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($men->name) ? $men->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('parent_name') ? 'has-error' : ''); ?>">
    <label for="parent_name" class="control-label"><?php echo e('Parent Name'); ?></label>
    <input class="form-control" name="parent_name" type="text" id="parent_name" value="<?php echo e(isset($men->parent_name) ? $men->parent_name : ''); ?>" >
    <?php echo $errors->first('parent_name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('urlMain') ? 'has-error' : ''); ?>">
    <label for="urlMain" class="control-label"><?php echo e('url Main'); ?></label>
    <input class="form-control" name="urlMain" type="text" id="urlMain" value="<?php echo e(isset($men->urlMain) ? $men->urlMain : ''); ?>" >
    <?php echo $errors->first('urlMain', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('urlMy') ? 'has-error' : ''); ?>">
    <label for="urlMy" class="control-label"><?php echo e('url My'); ?></label>
    <input class="form-control" name="urlMy" type="text" id="urlMy" value="<?php echo e(isset($men->urlMy) ? $men->urlMy : ''); ?>" >
    <?php echo $errors->first('urlMy', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
