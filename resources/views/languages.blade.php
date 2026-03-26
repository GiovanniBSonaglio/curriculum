<div class="title"> {{ __('languages.title') }} </div>
@foreach (\Lang::get('languages.languages') as $language => $level)
    <div class="item">
        <div class="left"> {{ $language }} </div>
        <div class="line"></div>
        <div class="right"> {{ $level }} </div>
    </div>
@endforeach
