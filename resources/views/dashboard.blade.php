@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div id="startscreen" class="panel-body" style="text-align:center">
				<img src="{{ asset('images/no-image.jpg') }}"> <br /><br />
					Hallo, {{ Auth::user()->name }} {{ Auth::user()->lastName }} <br /><br />
                    <a href="/api/description"><img src="{{ asset('images/button.jpg') }}"></a>
					<a href="#"><img src="{{ asset('images/button.jpg') }}"></a>
					<a href="#"><img src="{{ asset('images/button.jpg') }}"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
