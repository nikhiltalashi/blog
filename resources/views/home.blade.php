@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <legend>Laravel CRUD Application</legend>
            <table class="table table-hover">
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
                    <a href="{{ url('') }}" class="label label-primary">Read</a> | 
                    <a href="{{ url('') }}" class="label label-Success">Update</a> | 
                    <a href="{{ url('') }}" class="label label-danger">Delete</a>
                  </td>
                </tr>
               </tbody>
            </table> 
        </div>
    </div>
</div>

@include('layouts.footer')
