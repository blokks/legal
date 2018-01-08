<section class='how-it-works' data-view='how-it-works' data-path='/how-it-works'>
    <header class='how-it-works__header'>
        <a href='/how-it-works' data-link class='how-it-works__shortcut'>
            <h1 class='how-it-works__title'>
                @lang('brochure.how_it_works.title')
            </h1>

            <svg>
                <use xlink:href='{{ url('/brochure/dist/images/spritesheet.svg#arrow-down') }}'></use>
            </svg>        
        </a>
    </header>

    <section class='how-it-works__feature feature feature--manage' data-view='feature' data-path='/how-it-works' data-animation='featureA'>
        <div class='feature__content'>
            <div class='feature__info'>
                <h1 class='feature__title'>
                    @lang('brochure.how_it_works.manage.title')
                </h1>

                <h2 class='feature__subtitle'>
                    @lang('brochure.how_it_works.manage.subtitle')
                </h2>

                <p class='feature__description'>
                    @lang('brochure.how_it_works.manage.description')
                </p>

                <ol class='feature__features'>
                    <li>@lang('brochure.how_it_works.manage.features.multiple_days')</li>
                    <li>@lang('brochure.how_it_works.manage.features.export_data')</li>
                    <li>@lang('brochure.how_it_works.manage.features.team_members')/li>
                </ol>
            </div>

            <div class='feature__media'>
                <div id='animationContainer' class='feature__animation-container'></div>
            </div>
        </div>
    </section>

    <section class='how-it-works__feature feature feature--embed' data-view='feature' data-path='/how-it-works' data-animation='featureB'>
        <div class='feature__content'>
            <div class='feature__info'>
                <h1 class='feature__title'>
                    @lang('brochure.how_it_works.embed.title')
                </h1>

                <h2 class='feature__subtitle'>
                    @lang('brochure.how_it_works.embed.subtitle')
                </h2>

                <p class='feature__description'>
                    @lang('brochure.how_it_works.embed.description')
                </p>

                <ol class='feature__features'>
                    <li>@lang('brochure.how_it_works.embed.features.mobile_first')</li>
                    <li>@lang('brochure.how_it_works.embed.features.customizable')</li>
                    <li>@lang('brochure.how_it_works.embed.features.favorites')</li>
                </ol>
            </div>

            <div class='feature__media'>
                <div id='animationContainer' class='feature__animation-container'></div>
            </div>
        </div>
    </section>

    <section class='how-it-works__feature feature feature--developers' data-view='feature' data-path='/how-it-works' data-animation='featureC'>
        <div class='feature__content'>
            <div class='feature__info'>
                <h1 class='feature__title'>
                    @lang('brochure.how_it_works.developers.title')
                </h1>

                <h2 class='feature__subtitle'>
                    @lang('brochure.how_it_works.developers.subtitle')
                </h2>

                <p class='feature__description'>
                    @lang('brochure.how_it_works.developers.description')
                </p>

                <ol class='feature__features'>
                    <li>@lang('brochure.how_it_works.developers.features.layouts')</li>
                    <li>@lang('brochure.how_it_works.developers.features.customizable')</li>
                    <li>@lang('brochure.how_it_works.developers.features.api')</li>
                    <li>@lang('brochure.how_it_works.developers.features.documentation')</li>
                </ol>
            </div>

            <div class='feature__media'>
                <div id='animationContainer' class='feature__animation-container'></div>
            </div>
        </div>
    </section>

    <section class='how-it-works__feature feature feature--developers' data-view='feature' data-path='/how-it-works' data-animation='featureC'>
        <div class='feature__content'>
            <div class='feature__info'>
                <h1 class='feature__title'>
                    @lang('brochure.how_it_works.visitors.title')
                </h1>

                <h2 class='feature__subtitle'>
                    @lang('brochure.how_it_works.visitors.subtitle')
                </h2>

                <p class='feature__description'>
                    @lang('brochure.how_it_works.visitors.description')
                </p>

                <ol class='feature__features'>
                    <li>@lang('brochure.how_it_works.visitors.features.dashboard')</li>
                    <li>@lang('brochure.how_it_works.visitors.features.favorites')</li>
                    <li>@lang('brochure.how_it_works.visitors.features.friends')</li>
                    <li>@lang('brochure.how_it_works.visitors.features.offline')</li>
                </ol>
            </div>

            <div class='feature__media'>
                <div id='animationContainer' class='feature__animation-container'></div>
            </div>
        </div>
    </section>
</section>