@extends('layout_main')

@section('content')

    <?php
        $stages_count = count($stages);
    ?>

    <div class="stage-wrapper">

    <div class="stage-header">

        @for ($i = 1; $i <= $stages_count; $i++)


        <div class="stage-header-stage">
            @if($stage_id !== $i)
                <div class="stage-header-stage-number-circle">
                    <div class="stage-header-stage-number">
                        {{$i}}
                    </div>
                </div>
            @else
                <div class="stage-header-stage-number-circle-active" >
                    <div class="stage-header-stage-number">
                        {{$i}}
                    </div>
                </div>
            @endif
            <div class="stage-header-stage-name">
                {{$stages[$i-1]}}
            </div>
        </div>
        @endfor

    </div>

    @yield('stage_content')


@stop
