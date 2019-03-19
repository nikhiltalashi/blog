@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form>
          <fieldset>
            <legend>New Article</legend>
            <div class="form-group">
              <input class="form-control" name="title" id="exampleInput" rows="3"></textarea>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </fieldset>
        </form>
        </div>
    </div>
</div>
@include('layouts.footer')
