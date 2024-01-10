<div class="form-group">
    {!! Form::label('name', '魚類姓名') !!}
    {!! Form::text('name', null, ["class" => "form-control" . ($errors->has('name') ? ' is-invalid' : '')]) !!}
                                                                 {{-- (condition ? true_value : false_value) --}}
    @error('name')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('sid', '所屬海域') !!}
    {!! Form::select('sid', $seas, $seasSelected, ["class" => "form-control" . ($errors->has('sid') ? ' is-invalid' : '')]) !!}
    @error('sid')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('longest', '最大長度:') !!}
    {!! Form::text('longest', null, ["class" => "form-control" . ($errors->has('longest') ? ' is-invalid' : '')]) !!}
    @error('longest')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('shortest', '最短長度:') !!}
    {!! Form::text('shortest', null, ["class" => "form-control" . ($errors->has('shortest') ? ' is-invalid' : '')]) !!}
    @error('shortest')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('start', '開始日期：') !!}
    {!! Form::date('start', null, ["class" => "form-control" . ($errors->has('start') ? ' is-invalid' : '')]) !!}
    @error('start')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('end', '結束日期:') !!}
    {!! Form::date('end', null, ["class" => "form-control" . ($errors->has('end') ? ' is-invalid' : '')]) !!}
    @error('end')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('lightest_weight', '最輕體重:') !!}
    {!! Form::text('lightest_weight', null, ["class" => "form-control" . ($errors->has('lightest_weight') ? ' is-invalid' : '')]) !!}
    @error('lightest_weight')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('heaviest_weight', '最重體重:') !!}
    {!! Form::text('heaviest_weight', null, ["class" => "form-control" . ($errors->has('heaviest_weight') ? ' is-invalid' : '')]) !!}
    @error('heaviest_weight')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    </br>
    {!! Form::submit($submitButtonText, ["class" => "btn btn-primary form-control"]) !!}
</div>
