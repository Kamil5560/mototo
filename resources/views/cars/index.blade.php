@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Samochody
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--@section('javascript')--}}
{{--    const deleteUrl = "{{ url('cars') }}/";--}}
{{--@endsection--}}
{{--@section('js-files')--}}
{{--    <script src="{{ asset('js/delete.js') }}"></script>--}}
{{--@endsection--}}
