<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> {{ config('app.name', 'Laravel') }} </title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <page size="A4">
            <img class="random-shape" src="/images/shape.svg">
            <div class="profile">
                @include('profile') 
            </div>
            <div class="main-content">
                <div class="custom-row">
                    <div class="left-col custom-col">
                        <section class="work-experiences">
                            @include('work_experience')
                        </section>
                        <section class="languages">
                            @include('languages')
                        </section>

                        <!-- 
                        <section class="references">
                            @include('references')
                        </section>
                        -->
                    </div>
                    <div class="right-col custom-col">
                        <section class="education">
                            @include('education')
                        </section>
                        <section class="skills-section">
                            @include('skills')
                        </section>
                        <section class="extracurricular">
                            @include('extracurricular')
                        </section>
                    </div>
                </div>
            </div>
            <img class="corner-shape" src="/images/corner_shape.svg">
        </page>
    </body>
</html>
