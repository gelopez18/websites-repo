import { BaseElement } from "./base-element";


export class Form extends BaseElement{
    constructor(action, method){
        super();
        this.action=action;
        this.method=method;
    }

    getElementString(){
        return`
        <form action="${this.action}" method="${this.method}"></form>
        `;

    }
}