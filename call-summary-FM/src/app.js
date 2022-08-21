import { BaseElement } from "./UI/base-element.js";
import { button } from "./UI/button.js";
import { textfield } from "./UI/text-Field.js";


class app extends BaseElement{
    constructor(){
        super();

    }


}

export let application = new app();
application.show($('body'));