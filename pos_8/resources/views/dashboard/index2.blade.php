@extends('layouts.dashboard.app')

@section('content')

    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <h1>@lang('site.test')</h1>
            <ul>
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    {{-- <div class="content-wrapper">
    <section class="content-header">
        <h1>Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard">@lang('site.dashboard')</i></li>
        </ol>
    </section>

    <section class="content">
        <h1>this it dashboard</h1>
    </section>
</div> --}}
    {{-- <div class="content">


    <div class="row">

        <h1>@lang('site.test')</h1>
        <ul>
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div> --}}
@endsection
