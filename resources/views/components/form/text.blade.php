<div class="form-group">
  {{Form::label($nombre, null, ['class' => 'control-label'])}}
  {{Form::text($nombre, $value, array_merge(['class' => 'control-label'], $attributes))}}
</div>
