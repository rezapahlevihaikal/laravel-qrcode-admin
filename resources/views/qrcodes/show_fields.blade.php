<div class="col-md-6">
    <!-- Product Name Field -->
    <div class="form-group">
        <h2>
            {{--  {!! Form::label('product_name', 'Product Name:') !!}  --}}
            <p>{{ $qrcode->product_name }}
                <br/>
                @if(isset($qrcode->company_name))
                    <small>By {!! $qrcode->company_name !!}</small>
                @endif
            </p>
        </h2>
    </div>
    
    <!-- Amount Field -->
    <div class="form-group">
        {{--  {!! Form::label('amount', 'Amount:') !!}  --}}
        <h4>Amount : ${{ $qrcode->amount }}</h4>
    </div>

    <!-- Product Url Field -->
    <div class="form-group">
        {!! Form::label('product_url', 'Product Url:') !!}
        <a href="{{ $qrcode->product_url }}" target="_blank">
            <p>{{ $qrcode->product_url }}</p>
        </a>
    </div>
<hr/>
@if ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
    <!-- User Id Field -->
    <div class="form-group">
        {!! Form::label('user_id', 'User Name:') !!}
        <p>{{ $qrcode->user_id }}</p>
    </div>

    <!-- Website Field -->
    <div class="form-group">
        {!! Form::label('website', 'Website:') !!}
        <p>{{ $qrcode->website }}</p>
    </div>

    <!-- Callback Url Field -->
    <div class="form-group">
        {!! Form::label('callback_url', 'Callback Url:') !!}
        <p>{{ $qrcode->callback_url }}</p>
    </div>


    <!-- Status Field -->
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        <p>
            @if ($qrcode->status == 1)
                Active
            @else
                Inactive
            @endif
        </p>
    </div>

</div>
@endif
    
<div class="col-md-5 pull-right">
    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan QR Code and Pay With Our App:') !!}
        <p><img src="{{ asset($qrcode->qrcode_path)}}"></p>   
    </div>
</div>
