@if (Session::has('flash_message_error'))
    <script>
        new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'mint',
            text: '<?= Session::get('flash_message_error') ?>',
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
