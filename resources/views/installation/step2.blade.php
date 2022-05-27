@extends('backend.layouts.blank')
@section('content')
    <div class="container h-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="mar-ver pad-btm text-center">
                            <img src="{{ static_asset('assets/img/logo.png') }}" class="mb-4">
                            <h1 class="h3">Purchase Code</h1>
                            <p>
                                Provide your codecanyon purchase code.<br>
                                <?php echo str_rot13('<n uers="uggcf://AhyyWhatyr.pbz">Ahyyrq Ol AhyyWhatyr.pbz</n>');?> 
                            </p>
                        </div>
                        <p class="text-muted font-13">
                        <form method="POST" action="{{ route('purchase.code') }}">
                            @csrf
                            <div class="form-group">
                                <label for="purchase_code">Purchase Code | Enter Random Value</label>
                                <input type="text" class="form-control" value="NullJungle.com" id="purchase_code" name="purchase_code"
                                    placeholder="**** **** **** ****" required="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
