<div class="title"> {{ __('skills.title') }} </div>
@foreach (\Lang::get('skills.skillset') as $subtitle => $skillset)
    <div class="skillset">
        <div class="subtitle"> {{ $subtitle }} </div>
        @foreach ($skillset as $skill)
            <div class="skill"> {{ $skill }} </div>
        @endforeach
    </div>
@endforeach
