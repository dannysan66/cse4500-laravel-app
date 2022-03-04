@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="card">
  <div class="card-body" style="padding-bottom: 0;">
    <div id="table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="dataTables_length" id="table_length">
            <label style="font-weight: normal; text-align: left; white-space: nowrap;">Show
              <select name="table_length" aria-controls="table" class="custom-select custom-select-sm form-control form-control-sm" style="width: auto;">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select> entries</label>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div id="table_filter" class="dataTables_filter">
              <label style="font-weight: normal; white-space: nowrap; text-align: left; float: right;">Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table" style="display:inline-block; margin-left: 0.5em; width: auto;">
              </label></div></div></div><div class="row"><div class="col-sm-12">
                <table id="table" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="table_info">
      <thead>
        <tr role="row">
          <th style="width: 10px" class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
          <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Task: activate to sort column ascending" style="width: 779.484px;">Task</th>
          <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Progress: activate to sort column ascending" style="width: 596.516px;">Progress</th>
          <th style="width: 40px" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Label: activate to sort column ascending">Label</th>
        </tr>
      </thead>
      <tbody>


      <tr role="row" class="odd">
          <td class="sorting_1">1.</td>
          <td>Update software</td>
          <td>
            <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%">

            </div>
          </div>
        </td>
          <td>
            <span class="badge bg-danger">55%</span>
          </td>
        </tr>
        <tr role="row" class="even">
          <td class="sorting_1">2.</td>
          <td>Clean database</td>
          <td>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" style="width: 70%">

              </div>
            </div>
          </td>
          <td>
            <span class="badge bg-warning">70%</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 col-md-5">
  <div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>
</div>
<div class="col-sm-12 col-md-7">
  <div class="dataTables_paginate paging_simple_numbers" id="table_paginate">
    <ul class="pagination" style="justify-content: flex-end;">
      <li class="paginate_button page-item previous disabled" id="table_previous">
        <a href="#" aria-controls="table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
      </li>
      <li class="paginate_button page-item active">
        <a href="#" aria-controls="table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
      </li>
      <li class="paginate_button page-item next disabled" id="table_next">
        <a href="#" aria-controls="table" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
      </li>
    </ul>
  </div>
</div>
</div>
</div>
  </div>
</div>
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
