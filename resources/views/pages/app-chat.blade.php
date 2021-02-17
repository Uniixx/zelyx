@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Projects')
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="row match-height">
    <div class="col-12">
      <div class="card-deck-wrapper">
        <div class="card-deck">
          <div class="row no-gutters">
          @foreach($projects as $project)
          @if($project->status === 1)
          <div class="col-md-4 col-sm-6 mb-sm-1" id="modal-{{$project->id}}">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">{{ $project->name }}</h4>
                </div>
                <div class="card-body">
                  <p class="card-text">
                  @if(strlen($project->description) > 47)
                    {{ substr($project->description, 0, -6)}} ...
                  @else
                    {{ $project->description }}
                  @endif
                  </p>
                  <small class="text-muted">{{ $project->updated_at }}</small>
                  <br>
                  <small class="text-muted">{{ App\Models\User::find($project->user_id)->first()->name }}</small>
                  <br>
                  <button class="btn btn-info" data-toggle="modal" data-target="#inlineForm" onclick="setData({{$project}},  '{{App\Models\User::find($project->user_id)->first()->name}}')">Voir</button>
                </div>
              </div>
            </div>
          @elseif($project->status === 0 && Auth::user()->role === 1)
          <div class="col-md-4 col-sm-6 mb-sm-1" id="modal-{{$project->id}}">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">{{ $project->name }}</h4>
                </div>
                <div class="card-body">
                  <p class="card-text">
                  @if(strlen($project->description) > 47)
                    {{ substr($project->description, 0, -6)}} ...
                  @else
                    {{ $project->description }}
                  @endif
                  </p>
                  <small class="text-muted">{{ $project->updated_at }}</small>
                  <br>
                  <small class="text-muted">{{ App\Models\User::find($project->user_id)->first()->name }}</small>
                  <br>
                  <button class="btn btn-info" data-toggle="modal" data-target="#inlineForm" onclick="setData({{$project}},  '{{App\Models\User::find($project->user_id)->first()->name}}')">Voir</button>
                </div>
                <i class="menu-livicon" data-icon="legal" data-options="name: asterik.svg; style: solid; size: 30px;"></i>
              </div>
            </div>
          @endif
          @endforeach
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  <br>
  {!! $projects->links() !!}
  <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
              aria-labelledby="myModalLabel33" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="bx bx-x"></i>
                    </button>
                  </div>
                  <form action="#">
                    <div class="modal-body">
                      <label>Description: </label>
                      <div class="form-group">
                      <textarea class="form-control" id="myModalTextarea33" disabled></textarea>
                      </div>
                      <label>Budget: </label>
                      <div class="form-group mb-0">
                        <input type="text" id="myModalBudget33" class="form-control" disabled>
                      </div>
                      <label>Auteur: </label>
                      <div class="form-group mb-0">
                        <input type="text" id="myModalAuthor33" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Fermer</span>
                      </button>

                      @if (Auth::user()->role === 1)
                      <div class="buttons">
                      <button type="button" class="btn btn-light-danger deleteBtn" data-dismiss="modal" onclick="deleteById(this)">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Supprimer</span>
                      </button>
                      </div>
                      @endif
                    </div>
                  </form>
                </div>
              </div>
            </div>

  <script>
  function setData(data, author) {
    $("#myModalLabel33").html(data.name);
    $("#myModalTextarea33").html(data.description);
    $("#myModalBudget33").val(data.budget);
    $("#myModalAuthor33").val(author);
    $(".deleteBtn").prop("id", data.id);
    if ($(".approveBtn")) {
      $(".approveBtn").remove();
    }
    if (data.status === 0) {
      $(".buttons").append(`<button type="button" id="${data.id}" class="btn btn-light-success approveBtn" data-dismiss="modal" onclick="approve(this)">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Approuver</span>
                      </button>`)
    }
  }

  function approve(el) {
    $.ajax({
      method: "POST",
      url: `/project/approve/${$(el).prop("id")}`,
      data: {
        "_token": '{{csrf_token()}}'
      },
      success: function() {
        $("approveBtn").remove();
        document.location.reload();
      }
    })
  }

  function deleteById(el) {
    let id = $(el).prop("id");

    $.ajax({
      method: "POST",
      url: `/project/delete/${id}`,
      data: {
        "_token": '{{csrf_token()}}'
      },
      success: function(res) {
        $(`#modal-${id}`).remove();
      }
    })
  }
  </script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
@endsection
