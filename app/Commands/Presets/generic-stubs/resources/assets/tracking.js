// -------------------------------------------------------------------------------
// retrieve domains to be used per territory
// -------------------------------------------------------------------------------

var domains = '';
var domainFile = new XMLHttpRequest();
domainFile.open("GET", "/domain.json", false);
domainFile.onreadystatechange = function () {
    if (domainFile.readyState === 4 && (domainFile.status === 200 || domainFile.status == 0)) {
        domains = domainFile.responseText;
    }
}
domainFile.send(null);
domains = JSON.parse(domains);

// -------------------------------------------------------------------------------
// begin link assignment
// -------------------------------------------------------------------------------

var en = {
    'tpl-logo'                  : 'https://www.' + domains.en + '/en',
    'tpl-logo-mobi'             : 'https://m.' + domains.en + '/en',

    'tpl-chat'                  : 'https://www.cs-livechat.com/c/en/mc-desktop?brand=Dafa&height=760&width=360',
    'tpl-email'                 : 'mailto:ensupport@dafabet.com',
    'tpl-facebook'              : "https://dfgameplay.com/gjdnjr",
}