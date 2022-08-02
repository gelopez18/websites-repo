import { BaseElement } from "./base-element";
import { textfield } from "./Textfield";

export class Form extends BaseElement{
    constructor(action, method){
        super();
        this.action=action;
        this.method=method;
    }
    createElement(){
        super.createElement();
        let searchbar = new textfield("Task");
          searchbar.appendToElement(this.element);
    }
    getElementString(){
        return`
        <form action="${this.action}" method="${this.method}"></form>
        `;

    }
}