import { BaseElement } from "./UI/base-element.js";
import { button } from "./UI/button.js";
import { textfield } from "./UI/text-Field.js";
import ApplicationBase from "./frameWork/Application-Base.js";
import { clientSummary } from "./pages/Client-summary.js";

export class app extends ApplicationBase{
    constructor(){
        super();
            this.addRoute('Sale summary', new clientSummary(), true);
    }


}

export let application = new app();
application.show($('body'));