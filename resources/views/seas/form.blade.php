<div class="form-group">
    {!! Form::label('ocean_name', '海域名稱') !!}
    {!! Form::text('ocean_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('region', '所屬海域') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('area_sq_km','面積(平方千米):') !!}
    {!! Form::text('area_sq_km',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('avg_depth','平均深度:') !!}
    {!! Form::text('avg_depth',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('geomorphology', '地貌') !!}
    {!! Form::text('geomorphology',null ,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    </br>
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
