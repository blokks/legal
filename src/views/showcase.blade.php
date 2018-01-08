<section class='showcase' data-view='showcase' data-path='/showcase'>
    <div class='showcase__content'>
        <header class='showcase__header'>
            <h1 class='showcase__title'>
                @lang('brochure.showcase.title')
            </h1>

            <h2 class='showcase__subtitle'>
                @lang('brochure.showcase.subtitle')
            </h2>
        </header>

        <div class='showcase__slideshow'>
            <img data-src='{{ url('brochure/dist/images/showcase__tnw--visual.jpg') }}' width='900' height='450' alt='The Next Web Conference' data-client='tnw' class='showcase__slide showcase__slide--selected lazyload'>
            <img data-src='{{ url('brochure/dist/images/showcase__correspondent--visual.jpg') }}' width='900' height='450' alt='De Correspondent' data-client='correspondent' class='showcase__slide lazyload'>
            <img data-src='{{ url('brochure/dist/images/showcase__momentum--visual.jpg') }}' width='900' height='450' alt='Momentum' data-client='momentum' class='showcase__slide lazyload'>
            <img data-src='{{ url('brochure/dist/images/showcase__itw--visual.jpg') }}' width='900' height='450' alt='Into the Woods' data-client='itw' class='showcase__slide lazyload'>
        </div>

        <ul class='showcase__slide-selector'>
            <li>
                <button class='showcase__slide-button showcase__slide-button--selected' data-client='tnw'><span>The Next Web Conference</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='correspondent'><span>De Correspondent</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='momentum'><span>Momentum</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='itw'><span>Into The Woods Festival</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>
        </ul>
    </div>
</section>

@push('styles')
    <style>
        /* The Next Web */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='tnw'] {
                background-image: url('{{ url('brochure/dist/images/showcase__tnw--background.jpg') }}');
                background-size: cover;                
            }
        }

        .showcase__slide-button[data-client='tnw'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__tnw--logo.png') }}');
            width: 114px; height: 54px;
        }

        /* Momentum */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='momentum'] {
                background-image: url('{{ url('brochure/dist/images/showcase__momentum--background.jpg') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='momentum'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__momentum--logo.png') }}');
            width: 114px; height: 61px;
        }

        /* Brainwash */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='itw'] {
                background-image: url('{{ url('brochure/dist/images/showcase__itw--background.jpg') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='itw'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__itw--logo.png') }}');
            width: 114px; height: 69px;
        }

        /* Correspondent */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='correspondent'] {
                background-image: url('{{ url('brochure/dist/images/showcase__correspondent--background.png') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='correspondent'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__correspondent--logo.png') }}');
            width: 140px; height: 34px;
        }
    </style>
@endpush
