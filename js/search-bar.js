/* JS pour la barre de recherche */

( function() {
    var button_desktop = document.getElementById( 'search-btn-desktop' );
    var search_desktop = document.getElementById( 'search-bar-desktop' );

    button_desktop.onclick = function()
    {
        button_desktop.toggleAttribute( 'toggle-search-desktop' );
        search_desktop.classList.toggle( 'toggle-search-desktop' );
    }

    var button_mobile = document.getElementById( 'search-btn-mobile' );
    var search_mobile = document.getElementById( 'search-bar-mobile' );

    button_mobile.onclick = function()
    {
        button_mobile.toggleAttribute( 'toggle-search-mobile' );
        search_mobile.classList.toggle( 'toggle-search-mobile' );
    }

} )(jQuery);