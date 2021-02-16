@extends('layout.master')
@section('parentPageTitle', 'HRMS')
@section('title', 'Dashboard')


@section('content')
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <h4>Bienvenue {{ Auth::user()->name }}!</h4>
                        <small>Voici des statistiques des plus intéréssantes.</small>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix row-deck">
              <p>En construction ...</p>
            </div> 
        </div>
    </div>
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/counterup.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/knobjs.bundle.js') }}"></script>

<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/page/index.js') }}"></script>
@stop
