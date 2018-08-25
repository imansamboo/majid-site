<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $content->content or ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('men_id') ? 'has-error' : ''}}">
    <label for="men_id" class="control-label">{{ 'Men Id' }}</label>
    <input class="form-control" name="men_id" type="number" id="men_id" value="{{ $content->men_id or ''}}" >
    {!! $errors->first('men_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
