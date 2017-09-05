/*********************************************************
 *********************************************************
 *           Send Class Ajax And Call Method
 * *******************************************************
 ********************************************************/
$(document).ready(function () {
    let ajax = new Ajax();
    ajax.delete_user_row();
    ajax.delete_homepage_row();
    ajax.delete_phraseculte_row();
    ajax.delete_temoignage_row();
    ajax.delete_contact_row();
    ajax.delete_portfolios_row();
    ajax.delete_contact_done_row();
    ajax.delete_interetLoisir_row();
    ajax.delete_competence_row();
    ajax.delete_group_row();
    ajax.delete_competencelinguistique_row();
    ajax.delete_formation_row();
});


/*********************************************************
 *********************************************************
 *           Function Js / jQuery For Browser
 * *******************************************************
 ********************************************************/
$(document).ready(function () {
    /**
     * Mise en place du label actif pour la route courante dans la sidebar
     * @type {string}
     */
    let pathname = window.location.pathname;
    let uri = pathname.split('/');
    let param = uri[3];
    let linkSidebar = $('.' + param).text().toLowerCase().trim();
    if (param === linkSidebar) {
        $('.' + param).addClass('open');
    }
});

/**
 * Générer pseudo
 * @param champ_cible
 */
function generer_pseudo(champ_cible) {
    let ok = 'abcdefghijklmnopqrstuvwxyz1234567890';
    let pass = '';
    let longueur = 8;
    for (i = 0; i < longueur; i++) {
        var wpos = Math.round(Math.random() * ok.length);
        pass += ok.substring(wpos, wpos + 1);
    }
    document.getElementById(champ_cible).value = pass;
}

/**
 * Générer password
 * @param champ_cible
 */
function generer_password(champ_cible) {
    let ok = 'azertyuiopqsdfghjklmwxcvbn0123456789AZERTYUIOPQSDFGHJKLMWXCVBN@&!_';
    let pass = '';
    let longueur = 8;
    for (i = 0; i < longueur; i++) {
        var wpos = Math.round(Math.random() * ok.length);
        pass += ok.substring(wpos, wpos + 1);
    }
    document.getElementById(champ_cible).value = pass;
}

/**
 *
 * @param element
 */
function copyToClipboard(elementId) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($('#'+elementId).text()).select();
    document.execCommand("copy");
    $temp.remove();
}