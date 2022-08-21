import { BaseElement } from "./UI/base-element.js";
import { button } from "./UI/button.js";
import { textfield } from "./UI/text-Field.js";
import ApplicationBase from "./frameWork/Application-Base.js";

export class app extends ApplicationBase{
    constructor(){
        super('Fire Master Portal');
        this.addRoute('Sale summary', )
    }


}

export let application = new app();
application.show($('body'));