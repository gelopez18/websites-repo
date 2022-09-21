
let $ = require( "jquery" );
let applicationBase = require("applicationBase");

window.$ = $;
window.jQuery = jQuery;

export class app extends applicationBase{
    constructor(){
        super('Financial Tools');
    }
}
export let application = new app();
application.show($('body'));