var jwLogoBar = {
  addLogo: function (videoPlayer) {
    var playerContainer = videoPlayer.getContainer();
    var logoToolTip = $('<div></div>')
            .addClass('player-tooltip')
            .html('Watch on CodeCanyon');
    var logoDiv = $('<a></a>')
            .addClass('jw-icon jw-icon-inline jw-button-color jw-reset jw-logo-bar')
            .css('background-image', 'url('+videoPlayer.getConfig().logo.logoBar+')')
            .append(logoToolTip)
            .attr('href', videoPlayer.getConfig().logo.link)
            .attr('target', videoPlayer.getConfig().logo.target);
    $(playerContainer).find('.jw-controlbar-right-group .jw-icon-fullscreen').before(logoDiv);
  }
}