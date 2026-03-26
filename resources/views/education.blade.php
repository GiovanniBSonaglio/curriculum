<div class="title"> {{ __('education.title') }} </div>
@foreach (\Lang::get('education.degrees') as $degree)
    <div class="course">
        <div class="degree">
            {{ $degree['degree'] }} | <i>{{ $degree['level'] }}</i>
        </div>
        <div class="institution"> {{ $degree['institution'] }}
            <div class="info">
                {{ $degree['location'] }}
            </div>
        </div>
        <div class="activities">
            <i class="fa-solid fa-square"></i> {{ $degree['observation'] }}
        </div>
    </div>
@endforeach