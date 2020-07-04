@extends('adminlte.master')
@section('content')
<div class="col-md-6">
    <!-- general form elements disabled -->
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Items</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form" action="/items" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Text</label>
                <input type="text" class="form-control" placeholder="Tulis Judul">
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Textarea</label>
                <textarea class="form-control" rows="3" placeholder="Tulis Pertanyaan"></textarea>
              </div>
            </div>

          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- /.card -->
  </div>
@endsection
