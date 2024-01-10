<div class="form-group">
    {!! Form::label('ocean_name', '海域名稱') !!}
    {!! Form::text('ocean_name', null, ['class' => 'form-control'. ($errors->has('ocean_name') ? ' is-invalid' : '')]) !!}
    @error('ocean_name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('region', '所屬海域') !!}
    {!! Form::text('region', null, ['class' => 'form-control'. ($errors->has('region') ? ' is-invalid' : '')]) !!}
    @error('region')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('area_sq_km','面積(平方千米):') !!}
    {!! Form::text('area_sq_km',null ,['class'=>'form-control'. ($errors->has('area_sq_km') ? ' is-invalid' : '')]) !!}
    @error('area_sq_km')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('avg_depth','平均深度:') !!}
    {!! Form::text('avg_depth',null ,['class'=>'form-control'. ($errors->has('avg_depth') ? ' is-invalid' : '')]) !!}
    @error('avg_depth')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('geomorphology', '地貌') !!}
    {!! Form::text('geomorphology',null ,['class'=>'form-control'. ($errors->has('geomorphology') ? ' is-invalid' : '')]) !!}
    @error('geomorphology')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<div class="form-group">
    </br>
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
