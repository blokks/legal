<section class='pricing' data-view='pricing' data-path='/pricing'>
    <div class='pricing__content'>
        <header>
            <h1 class='pricing__title'>
                @lang('brochure.pricing.title')
            </h1>

            <h2 class='pricing__subtitle'>
                @lang('brochure.pricing.subtitle')
            </h2>
        </header>

        <div class='pricing__table'>
            <article class='pricing__option price-option price-option--free'>
                <header class='price-option__header'>
                    <h1 class='price-option__title'>
                        @lang('brochure.pricing.free.title')
                    </h1>

                    <h2 class='price-option__subtitle'>
                        @lang('brochure.pricing.free.subtitle')
                    </h2>
                </header>

                <div class='price-option__details'>
                    <p class='price-option__description'>
                        @lang('brochure.pricing.free.description')
                    </p>

                    <ul class='price-option__features'>
                        <li>@lang('brochure.pricing.free.features.no_restrictions')</li>
                        <li>@lang('brochure.pricing.free.features.no_fees')</li>
                    </ul>
                </div>
            </article>

            <article class='pricing__option price-option price-option--upgrade'>
                <header class='price-option__header'>
                    <h1 class='price-option__title'>
                        @lang('brochure.pricing.upgrade.title')
                    </h1>

                    <h2 class='price-option__subtitle'>
                        @lang('brochure.pricing.upgrade.subtitle')
                    </h2>
                </header>

                <div class='price-option__details'>
                    <p class='price-option__description'>
                        @lang('brochure.pricing.upgrade.description')
                    </p>

                    <ul class='price-option__features'>
                        <li>@lang('brochure.pricing.upgrade.features.no_recurring_costs')</li>
                        <li>@lang('brochure.pricing.upgrade.features.excluding_vat')</li>
                        <li>@lang('brochure.pricing.upgrade.features.discount')</li>
                    </ul>
                </div>
            </article>
        </div>

        <footer class='pricing__footer'>
            @lang('brochure.pricing.footer')
        </footer>
    </div>
</section>