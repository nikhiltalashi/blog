@include('layouts.header')
<div class="container" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-12">
            <legend>Read Article</legend>
            <p>{{ $articles->title }}</p>
            <p>{{ $articles->description }}</p>
        </div>
    </div>
</div>

@include('layouts.footer')
