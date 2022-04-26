@extends('layout_main')

@section('content')

    <?php
        $stages = [
            "Таргетинг",
            "Позиционирование",
            "Brand Equity",
            "Brand Communication",
            "Brand Loyalty"
        ];
        $stages_count = count($stages);
    ?>

    <div class="stage-wrapper">

    <div class="stage-header">

        @for ($i = 1; $i <= $stages_count; $i++)
        <div class="stage-header-stage">
            <div class="stage-header-stage-number-circle">
                <div class="stage-header-stage-number">
                    {{$i}}
                </div>
            </div>
            <div class="stage-header-stage-name">
                {{$stages[$i-1]}}
            </div>
        </div>
        @endfor

    </div>

    @yield('stage_content')


@stop
