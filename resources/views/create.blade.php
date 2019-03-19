@include('layouts.header')
<div class="container" style="margin-top : 25px">
    <div class="row">
        <div class="col-md-12">
        <form method="POST" action="url('/insert')">
          <fieldset>
            <legend>New Article</legend>
            @if(count($errors) > 0)
                @foreach($errors as $error)
                   <div class="alert alert-danger">
                    {{$error}}
                   </div> 
                @endforeach
            @endif
            <div class="form-group">
              <input class="form-control" name="title" id="exampleInput" rows="3"></textarea>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Go Back</a>
          </fieldset>
        </form>
        </div>
    </div>
</div>
@include('layouts.footer')
