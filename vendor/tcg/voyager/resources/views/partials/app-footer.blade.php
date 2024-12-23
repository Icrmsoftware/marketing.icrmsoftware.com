<footer class="app-footer">
    <div class="site-footer-right">
        {!! __('voyager::theme.footer_copyright') !!} <a href="https://icrmsoftware.com" target="_blank">ICRM Software</a>
        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
