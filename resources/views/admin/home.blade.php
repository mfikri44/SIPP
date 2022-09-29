@extends('admin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <h1></h1>
                    {!! $chart1->renderHtml() !!}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection

