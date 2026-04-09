<div class="title"> {{ __('education.title') }} </div>
@foreach (\Lang::get('education.degrees') as $degree)
    <div class="course">
        <div class="degree">
            {{ $degree['degree'] }} @if($degree['level'] != "") | <i>{{ $degree['level'] }}</i> @endif
        </div>
        <div class="institution"> {{ $degree['institution'] }}
            <div class="info">
                <div class="left"> {{  $degree['date'] }} </div>
                <div class="right"> {{  $degree['location'] }} </div>
            </div>
        </div>
        <div class="activities">
            <i class="fa-solid fa-square"></i> {{ $degree['observation'] }}
        </div>
    </div>
@endforeach
