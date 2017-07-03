<link rel="stylesheet" href="{{ asset('plugins/noty/lib/noty.css') }}">
<script src="{{ asset('plugins/noty/lib/noty.js') }}"></script>

@if (Session::has('error'))
    <script>
        new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'mint',
            text: '<?= Session::get('error') ?>',
            timeout: 5000,
            progressBar: true,
            closeWith: ['click', 'button'],
            animation: {
                open: 'noty_effects_open',
                close: 'noty_effects_close'
            },
            id: false,
            force: false,
            killer: false,
            queue: 'global',
            container: false,
            buttons: [],
            sounds: {
                sources: [],
                volume: 1,
                conditions: []
            },
            titleCount: {
                conditions: []
            },
            modal: false
        }).show();
    </script>
@endif
