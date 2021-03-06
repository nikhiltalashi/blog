@include('layouts.header')
<div class="container" style="margin-top : 25px">
    <div class="row">
        <div class="col-md-12">
        <form method="POST" action=" {{ url('/insert')}} ">
        {{ csrf_field() }}
          <fieldset>
            <legend>New Article</legend>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                   <div class="alert alert-danger">
                    {{$error}}
                   </div> 
                @endforeach
            @endif
            <div class="form-group">
              <input class="form-control" name="title" id="exampleInput" placeholder="Title" rows="3" value="{{ old('title') }}"></input>
            </div>
            <div class="form-group">
              <input class="form-control" name="description" id="exampleInput" placeholder="Description" rows="3" value="{{ old('description') }}"></input>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Go Back</a>
          </fieldset>
        </form>
        </div>
    </div>
</div>
@include('layouts.footer')
