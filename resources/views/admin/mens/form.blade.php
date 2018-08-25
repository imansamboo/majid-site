<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $men->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parent_name') ? 'has-error' : ''}}">
    <label for="parent_name" class="control-label">{{ 'Parent Name' }}</label>
    <input class="form-control" name="parent_name" type="text" id="parent_name" value="{{ $men->parent_name or ''}}" >
    {!! $errors->first('parent_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
