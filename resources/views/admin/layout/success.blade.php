<link rel="stylesheet" href="{{ asset('plugins/noty/lib/noty.css') }}">
<script src="{{ asset('plugins/noty/lib/noty.js') }}"></script>

@if (Session::has('success'))
    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            theme: 'mint',
            text: '<?= Session::get('success') ?>',
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
