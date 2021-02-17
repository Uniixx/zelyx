@extends('layouts.contentLayoutMaster')

@section('title','Projects')
{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/editors/quill/quill.snow.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
<button class="btn btn-primary" data-toggle="modal" data-target="#inlineForm">Créer</button>
<section id="dashboard-ecommerce">
            <table class="table zero-configuration">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Budget</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th>Créer le</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="projectsBody">
              @foreach($projects as $project)
              <tr id="item-{{$project->id}}">
                  <td>{{ $project->name }}</td>
                  <td>{{ $project->budget }}</td>
                  <td>{{ $project->type }}</td>
                  <td>{{ $project->status === 0 ? 'en attente' : 'ouvert' }}</td>
                  <td>{{ $project->created_at }}</td>
                  <td><button class="btn btn-danger" id="{{$project->id}}" onclick="deleteById(this)">Supprimer</button></td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Nom</th>
                  <th>Budget</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th>Créer le</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
            </table>
          </section>
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
                    <div class="form-group">
                    <label>Titre: </label>
                        <input type="text" id="title" class="form-control">
                      </div>
                      <label>Description: </label>
                      <div class="form-group">
                      <textarea class="form-control" id="description"></textarea>
                      </div>
                      <label>Budget: </label>
                      <div class="form-group">
                        <input type="number" id="budget" class="form-control">
                      </div>
                      <label>Type: </label>
                      <div class="form-group">
                      <select class="form-control" id="type">
                      <option>Autres</option>
                      <option>Développment</option>
                      <option>Web</option>
                      <option>Design</option>
                      <option>Mobile</option>
                      <option>Musique</option>
                      </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary" onclick="createNewProject()">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Créer</span>
                      </button>
                      <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Fermer</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('vendors/js/editors/quill/quill.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
@endsection

<script>
function createNewProject() {
  let project = {
    title: $("#title").val(),
    description: $("#description").val(),
    budget: $("#budget").val(),
    type: $("#type").val()
  }

  $.ajax({
    method: "POST",
    url: '/project/create',
    data: {
      "_token": '{{csrf_token()}}',
      "name": project.title,
      "description": project.description,
      "budget": project.budget,
      "type": project.type
    },
    success: function(res) {
      $("#projectsBody").append(`
      <tr id="item-${res.id}">
      <td>${res.name}</td>
      <td>${res.budget}</td>
      <td>${res.type}</td>
      <td>en attente</td>
      <td>${res.created_at}</td>
      <td><button class="btn btn-danger" id="${res.id}" onclick="deleteById(this)">Supprimer</button></td>
      <tr>
      `);
      console.log(res)
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
        $(`#item-${id}`).remove();
      }
    })
  }
</script>