import ApplicationBase from "./frameWork/Application-Base.js";
import { clientSummary } from "./pages/Client-summary.js";
import 'https://code.jquery.com/jquery-3.6.0.min.js'

window.$ = $;
window.jQuery = jQuery;
export class app extends ApplicationBase{
    constructor(){
        super();
            this.addRoute('Sale Summary', new clientSummary(), true);
    }


}

export let application = new app();
application.show($('body'));