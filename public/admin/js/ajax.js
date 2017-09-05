/**
 * Created by bilel on 26/03/2017.
 */

class Ajax {

    constructor(){
    }

    /**
     *
     */
    delete_user_row(){
        $('.user_delete').on('click', function(e){
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-user-delete');
            let url = form.attr('action').replace(':USER_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.user_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_homepage_row(){
        $('.homepage_delete').on('click', function(e){
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-homepage-delete');
            let url = form.attr('action').replace(':HOMEPAGE_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.homepage_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_phraseculte_row(){
        $('.phraseculte_delete').on('click', function(e){
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-phraseculte-delete');
            let url = form.attr('action').replace(':PHRASECULTE_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.phraseculte_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_temoignage_row(){
        $('.temoignage_delete').on('click', function(e){
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-temoignage-delete');
            let url = form.attr('action').replace(':TEMOIGNAGE_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.temoignage_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_contact_row(){
        $('.contact_delete').on('click', function(e){
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-contact-delete');
            let url = form.attr('action').replace(':CONTACT_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.contact_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_portfolios_row(){
        $('.portfolios_delete').on('click', function(e){
            e.preventDefault();
            let form = $('#form-portfolios-delete');
            let url = form.attr('action');
            let data = form.serialize();
            let myUrl = window.location.href.substr(0, 56);

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Redirection vers page index
                    window.location.href = myUrl;

                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_contact_done_row(){
        $('.contact_done_delete').on('click', function(e){
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-contact_done-delete');
            let url = form.attr('action').replace(':CONTACT_DONE_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'PUT',
                data:data,
                success: function(result){
                    // Changement d'êtat du bouton done
                    if(result.done === 0) {
                        $('#status_button_done').removeClass('fa fa-check').addClass('fa fa-times');
                    } else if(result.done === 1) {
                        $('#status_button_done').removeClass('fa fa-times').addClass('fa fa-check');
                    }
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_interetLoisir_row(){
        $('.interet_delete').on('click', function(e){
            // Permet de supprimer le comportement par default du navigateur
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-interet-delete');
            let url = form.attr('action').replace(':INTERET_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.interet_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_competence_row(){
        $('.competence_delete').on('click', function(e){
            // Permet de supprimer le comportement par default du navigateur
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-competence-delete');
            let url = form.attr('action').replace(':COMPETENCE_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.competence_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_group_row(){
        $('.group_delete').on('click', function(e){
            // Permet de supprimer le comportement par default du navigateur
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-group-delete');
            let url = form.attr('action').replace(':GROUP_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.group_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

    /**
     *
     */
    delete_competencelinguistique_row(){
        $('.competenceluiguistique_delete').on('click', function(e){
            // Permet de supprimer le comportement par default du navigateur
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-competencelinguistique-delete');
            let url = form.attr('action').replace(':COMPETENCELINGUISTIQUE_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.competenceLuiguistique_'+id).fadeOut();
                    // Affichage du message
                    $('#message_info').append(
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            theme: 'mint',
                            text: result.message,
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
                        }).show()
                    );
                },
                error: function(){
                    console.log('Oups..., Une erreur est survenue');
                }
            });
        });
    }

}