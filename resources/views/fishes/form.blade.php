<div class="form-group">
    {!! Form::label('name', '魚類姓名') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('sid', '所屬海域') !!}
    {!! Form::select('sid', $seas, $seasSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('longest','最大長度:') !!}
    {!! Form::text('longest',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('shortest','最短長度:') !!}
    {!! Form::text('shortest',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('start', '開始日期：') !!}
    {!! Form::date('start', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('end', '結束日期:') !!}
    {!! Form::date('end', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lightest_weight', '最輕體重:') !!}
    {!! Form::text('lightest_weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('heaviest_weight', '最重體重:') !!}
    {!! Form::text('heaviest_weight', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    </br>
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
