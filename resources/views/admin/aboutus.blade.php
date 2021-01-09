@extends('layouts.master')

@section('title')
  About Us
@endsection


@section('content')



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> About

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add </button>
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
                        Title
                      </th>
                      <th>
                        Sub-Title
                      </th>
                      <th >
                        Description
                      </th>
                      <th >
                        Edit
                      </th>
                      <th >
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          About
                        </td>
                        <td>
                        About
                        </td>
                        <td>
                        About
                        </td>
                        <td>
                        About
                        </td>
                        <td>
                            <a href='#' class="btn btn-success"> Edit </a>
                        </td>
                        <td>
                            <a href='#' class="btn btn-danger"> Delete </a>
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         

@endsection


@section('scripts')

@endsection
