<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <textarea class="form-control" rows="5" name="name" type="textarea" id="name" >{{ $menu->name or ''}}</textarea>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parent_name') ? 'has-error' : ''}}">
    <label for="parent_name" class="control-label">{{ 'Parent Name' }}</label>
    <textarea class="form-control" rows="5" name="parent_name" type="textarea" id="parent_name" >{{ $menu->parent_name or ''}}</textarea>
    {!! $errors->first('parent_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
