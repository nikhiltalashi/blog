@include('layouts.header')
<div class="container" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-12">
            <legend>Read Article</legend>
            {{ $articles->title }}
            {{ $articles->description }}
        </div>
    </div>
</div>

@include('layouts.footer')
