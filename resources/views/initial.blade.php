@extends('layouts.app')

@section('title', 'Who R U')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                		<hi> hi {{ $name }}</hi>
					    <p>U deserve Ur true self</p>
					    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
