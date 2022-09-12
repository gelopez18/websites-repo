import 'https://code.jquery.com/jquery-3.6.0.min.js';
import applicationBase from './framework/application-Base.js'

window.$ = $;
window.jQuery = jQuery;

export class app extends applicationBase{
    constructor(){
        super('Financial Tools');
    }
}
export let application = new app();
application.show($('body'));