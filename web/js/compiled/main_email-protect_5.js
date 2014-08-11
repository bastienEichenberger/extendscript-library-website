$(document).ready(function() {

    //+ Jonas Raoni Soares Silva
    //@ http://jsfromhell.com/string/rot13 [rev. #1]

    String.prototype.rot13 = function() {
        return this.replace(/[a-zA-Z]/g, function(c) {
            return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 13) ? c : c - 26);
        });
    };

    
    $('a[href^="mailto:"]').each(function() {
        // remove mailto:
        var str_without_mailto = this.href.substr(7).rot13();
        
        this.href = 'mailto' + str_without_mailto;

        this.innerHTML = this.innerHTML.rot13();
    });


});
