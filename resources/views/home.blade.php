@include('layouts.header')
<div class="container" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-12">
            <legend>Laravel CRUD Application</legend>
            @if(session('info'))
                <div class="col-md-6 alert alert-success">
                    {{ session('info') }}
                </div>
            @endif
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
              @foreach($articles as $article)
                <tr>
                  <td>{{ $article->id }}</td>
                  <td>{{ $article->title }}</td>
                  <td>{{ $article->description }}</td>
                  <td>
                    <a href='{{ url("/read/{$article->id}") }}' class="btn btn-primary btn-sm">Read</a>
                    <a href='{{ url("/update/{$article->id}") }}' class="btn btn-Success btn-sm">Update</a>
                    <a href='{{ url("/delete/{$article->id}") }}' class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
               @endforeach
               </tbody>
            </table> 
        </div>
    </div>
</div>

@include('layouts.footer')
