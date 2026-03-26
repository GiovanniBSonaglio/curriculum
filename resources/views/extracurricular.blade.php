<div class="title"> {{ __('extracurricular.title') }} </div>

@foreach (\Lang::get('extracurricular.activities') as $activity)
    <div class="activity">
        <div class="title">
            {{ $activity['name'] }}
        </div>
        <div class="info">
            <div class="left"> {{ $activity['info']['date'] }} </div>
            <div class="right"> {{ $activity['info']['location'] }} </div>
        </div>
        <div class="description">
            <i class="fa-solid fa-square"></i> {{ $activity['description'] }}
        </div>
    </div>
@endforeach