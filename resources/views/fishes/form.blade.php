<div class="form-group">
    {!! Form::label('name', '魚類名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '所屬海域：') !!}
    <!-- 待設計一下拉式選單 -->
</div>
<div class="form-group">
    {!! Form::label('name','魚名:') !!}
    {!! Form::date('name',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ocean_name','海域外部建:') !!}
    {!! Form::date('ocean_name',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('longest', '小(釐米)') !!}
    {!! Form::text('longest', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('shortest', '大(釐米)') !!}
    {!! Form::text('shortest', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('start', '起始月：') !!}
    {!! Form::text('start', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('end', '結束月：') !!}
    {!! Form::text('end', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lightest_weight', '最輕(磅)') !!}
    {!! Form::text('lightest_weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('heaviest_weight', '最重(磅)') !!}
    {!! Form::text('heaviest_weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>





