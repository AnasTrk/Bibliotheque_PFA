@extends('layouts.master')

@section('title')
  About Us
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Examplaire</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/examplaires') }} " method="post">
          {{csrf_field() }}
          <div class="form-group">
            <label for="Titre" class="col-form-label">Titre</label>
            <input name="titre" type="text" class="form-control" id="Titre">
          </div>
          <div class="form-group">
            <label for="description" class="col-form-label">Description</label>
            <textarea  name ="description" class="form-control" id="description"></textarea>
          </div>
          <div class="form-group">
            <label for="Category" class="col-form-label">Category:</label> <br>
            <select class="form-control" name ="select" id="Category">
            @foreach($categories as $categorie)
              <option value='{{$categorie->id_categorie}}'> {{$categorie->type}}</option>
           @endforeach
           </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary bg-success" value="Ajouter">  
      </div>
      </form>
    </div>
  </div>
</div>




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header  ">
                <h4 class="card-title "> EXAMPLAIRE
                <button type="button" class="btn btn-primary m-5" data-toggle="modal" data-target="#exampleModal" > Ajouter Examplaire </button>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                        Titre
                      </th>
                      <th>
                      Description
                        </th>
                      <th >
                        Category
                      </th>
                      <th >
                        Disponibilite
                      </th>
                      <th >
                        Modifier
                      </th>
                      <th >
                        Supprimer
                      </th>
                    </thead>
                    <tbody>
                    @foreach($examplaires as $examplaire)
                      <tr>
                      <td>
                          {{$examplaire->id}}
                        </td>
                        <td>
                          {{$examplaire->titre}}
                        </td>
                        <td>
                        {{$examplaire->description}}
                        </td>
                        @foreach($categories as $categorie)
                        <td>
                          @if  ($categorie->id_categorie === $examplaire->categorie_id)
                          {{$categorie->type}}
                          @endif
                        @endforeach
                        </td>
                        @if ( $examplaire->is_disponible === 1)
                        <td>
                            Disponible
                        </td>
                        @else
                        <td>
                            Indisponible
                        </td>
                        @endif
                        <td>
                            <a href='#' class="btn btn-success"> Edit </a>
                        </td>
                        <td>
                            <a href='#' class="btn btn-danger"> Delete </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         

@endsection


@section('scripts')

@endsection
