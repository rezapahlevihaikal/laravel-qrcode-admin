@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">
            Role
        </h1>
        <h1 class="pull-right">
            @if ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
                <a href="{{ route('qrcodes.edit', [$qrcode->id]) }}" class='btn btn-primary'>Edit</a>
            @endif    
        </h1>
                  
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('qrcodes.show_fields')
                </div>
                <a href="{{ route('qrcodes.index') }}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
@endsection
