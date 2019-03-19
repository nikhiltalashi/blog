@include('layouts.header')
<div class="container" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-12">
            <legend>Laravel CRUD Application</legend>
            <table class="table table-hover" style="text-align: center;">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>
                    <a href="{{ url('') }}" class="btn btn-primary btn-sm">Read</a>
                    <a href="{{ url('') }}" class="btn btn-Success btn-sm">Update</a>
                    <a href="{{ url('') }}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
               </tbody>
            </table> 
        </div>
    </div>
</div>

@include('layouts.footer')
