<div class="title"> {{ __('work_experience.title') }} </div>

@foreach (\Lang::get('work_experience.experiences') as $job)
    @foreach ($job['positions'] as $key => $position)
        <div class="job">
            @if(isset($job['positions'][$key+1]))
                <span class="line"></span>
                <div class="company">
                    {{ $job['company_name'] }}
                </div>
            @endif
            <div class="position">
                <i class="fa-solid fa-circle"></i>
                {{ $position['position'] }}
            </div>
            <div class="info">
                <div class="left"> {{ $position['info']['date'] }} </div>
                <div class="right"> {{ $position['info']['location'] }} </div>
            </div>
            <div class="activities">
                @foreach ($position['activities'] as $activities)
                    <div class="item">
                        <i class="fa-solid fa-square"></i> {{ $activities }}
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endforeach