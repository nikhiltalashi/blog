@include('layouts.header')
<div class="container" style="margin-top : 25px">
    <div class="row">
        <div class="col-md-12">
        <form method="POST" action=" {{ url('/insert')}} ">
        {{ csrf_field() }}
          <fieldset>
          @if($data === null)
          @foreach($data as $data)
            {{ $data->tile }}
          @endforeach
          @endif
            <legend>New Article</legend>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                   <div class="alert alert-danger">
                    {{$error}}
                   </div> 
                @endforeach
            @endif
            <div class="form-group">
              <input class="form-control" name="title" id="exampleInput" placeholder="Title" rows="3"></textarea>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="description" id="exampleTextarea" placeholder="Description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Go Back</a>
          </fieldset>
        </form>
        </div>
    </div>
</div>
@include('layouts.footer')
