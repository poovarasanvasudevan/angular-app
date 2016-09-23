@if (session()->has('flash_notification.message'))
    <div id="my-alert" class="alert {{ session('flash_notification.level') }}" data-component="alert">
        <span class="close small"></span>
        {!! session('flash_notification.message') !!}
    </div>
@endif