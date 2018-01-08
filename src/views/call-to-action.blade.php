<section class='call-to-action' data-view='contact' data-path='/contact'>
    <div class='call-to-action__content call-to-action__content--mobile'>
        <h1 class='call-to-action__title'>
            @lang('brochure.call_to_action.title')
        </h1>

        <h2 class='call-to-action__subtitle'>
            @lang('brochure.call_to_action.mobile.subtitle')
        </h2>

        <a href="mailto:reminder@blokks.co?subject=@lang('brochure.call_to_action.mobile.reminder_subject')&body=@lang('brochure.call_to_action.mobile.reminder_body')" class='call-to-action__action-button'>
            @lang('brochure.call_to_action.signup')
        </a>    
    </div>

    <div class='call-to-action__content call-to-action__content--desktop'>
        <h1 class='call-to-action__title'>
            @lang('brochure.call_to_action.title')
        </h1>

        <h2 class='call-to-action__subtitle'>
            @lang('brochure.call_to_action.desktop.subtitle')
        </h2>

        <a href='{{ route('signup') }}' class='call-to-action__action-button'>
            @lang('brochure.call_to_action.signup')
        </a>
    </div>

    <div class='call-to-action__animation'>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
    </div>
</section>