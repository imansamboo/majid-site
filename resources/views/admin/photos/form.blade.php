<div class="form-group {{ $errors->has('menu_id') ? 'has-error' : ''}}">
    <label for="menu_id" class="control-label">{{ 'Menu Id' }}</label>
    <input class="form-control" name="menu_id" type="number" id="menu_id" value="{{ $photo->menu_id or ''}}" >
    {!! $errors->first('menu_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ $photo->type or ''}}" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('where') ? 'has-error' : ''}}">
    <label for="where" class="control-label">{{ 'Where' }}</label>
    <input class="form-control" name="where" type="text" id="where" value="{{ $photo->where or ''}}" >
    {!! $errors->first('where', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
    <label for="file" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="file" type="file" id="file" value="{{ $photo->file or ''}}" >
    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
