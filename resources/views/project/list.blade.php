@extends('layout.master')
@section('title', 'Projets')


@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs page-header-tab">
            </ul>
            <div class="header-action d-md-flex">
            </div>
        </div>
    </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
            <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">POSTER VOTRE PROJET</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{ url('create-project') }}" method="POST">
                            @csrf
                                <div class="form-group col-lg-4">
                                <label class="form-label">Titre</label>
                                    <input type="text" class="form-control" name="title" placeholder="Site Internet ...">
                                </div>
                                <div class="form-group col-lg-6">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                                </div>
                                <div class="form-group col-lg-2">
                                <label class="form-label">Budget</label>
                                    <input type="text" class="form-control" name="budget" placeholder="50">
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Ajouter</button>
                                </div>            
                                </form>                          
                            </div>
                            <!-- <div class="card-footer">
                                <div class="clearfix">
                                    <div class="float-left"><strong>75%</strong></div>
                                    <div class="float-right"><small class="text-muted">Progress</small></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                <div class="row">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $project->title }}</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="tag tag-pink mb-3">Angular</span>
                                <p>{{ $project->description }}</p>
                                <div class="row">
                                    <div class="col-5 py-1"><strong>Created:</strong></div>
                                    <div class="col-7 py-1">{{ $project->updated_at }}</div>
                                    <div class="col-5 py-1"><strong>Créateur :</strong></div>
                                    <div class="col-7 py-1">{{ App\Models\User::find($project->user_id)->name}}</div>
                                    <div class="col-5 py-1"><strong>Budget:</strong></div>
                                    <div class="col-7 py-1"><strong>{{ $project->budget }}$</strong></div>
                                </div>                                        
                            </div>
                            <!-- <div class="card-footer">
                                <div class="clearfix">
                                    <div class="float-left"><strong>75%</strong></div>
                                    <div class="float-right"><small class="text-muted">Progress</small></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>            
</div>
@stop

@section('popup')

@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/js/core.js') }}"></script>
@stop