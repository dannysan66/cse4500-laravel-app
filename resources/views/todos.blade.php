@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="dataTables_length" id="table_length">
          <label style="font-weight: normal; text-align: left; white-space: nowrap;">Show <select name="table_length" aria-controls="table" class="custom-select custom-select-sm form-control form-control-sm">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
          entries</label>
        </div>
      </div>
          <div class="col-sm-12 col-md-6">
            <div id="table_filter" class="dataTables_filter">
              <label style="font-weight: normal; white-space: nowrap; text-align: left; float: right;">Search:
                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table" style="margin-left: 0.5em; display: inline-block; width: auto;">
              </label>
            </div>
          </div>
        </div>
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Update software</td>
          <td><div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: 55%"></div></div></td>
          <td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Clean database</td>
          <td><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 70%"></div></div></td>
          <td><span class="badge bg-warning">70%</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
