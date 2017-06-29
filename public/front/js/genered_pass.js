/**
 * Created by bilel on 24/10/15.
 */
function generer_password(password) {
    var ok = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789:;=+-_&|^$*£%';
    var pass = '';
    longueur = 14;
    for(i=0;i<longueur;i++){
        var wpos = Math.round(Math.random() * ok.length);
        pass+=ok.substring(wpos,wpos+1);
    }
    document.getElementById(password).value = pass;
}