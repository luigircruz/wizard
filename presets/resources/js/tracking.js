// -------------------------------------------------------------------------------
// retrieve domains to be used per territory
// -------------------------------------------------------------------------------

var domains = '';
var domainFile = new XMLHttpRequest();
domainFile.open("GET", "/domain.json", false);
domainFile.onreadystatechange = function ()
{
    if(domainFile.readyState === 4 && (domainFile.status === 200 || domainFile.status == 0))
    {
        domains = domainFile.responseText;
    }
}
domainFile.send(null);
domains = JSON.parse(domains);

/*
|--------------------------------------------------------------------------
| Link Assignment
|--------------------------------------------------------------------------
|
| * Declare the language for assignment. (Available languages are: en, id, in, kr, sc, th, vn, etc...)
| * Make sure that you create associative array in a key:value pair format (ID : Link)
| * The key is the {id} of an anchor tag and the {value} is the link you want to assign into. 
| * Link assignment are automatically applied as long as you use the correct anchor tag ID.
|
*/

var en = {
	'tpl-logo' 					: 'https://www.'+domains.en+'/en',
	'tpl-logo-mobi' 			: 'https://m.'+domains.en+'/en',

	'tpl-chat' 					: 'https://www.cs-livechat.com/c/en/mc-desktop?brand=Dafa&height=760&width=360',
	'tpl-email' 				: 'mailto:ensupport@dafabet.com',
	'tpl-facebook' 				: "https://dfgameplay.com/gjdpp9",
	'tpl-messenger' 			: "https://dfgameplay.com/gjds9i",
	'tpl-whatsapp' 				: "https://dfgameplay.com/gjdqub",
}
