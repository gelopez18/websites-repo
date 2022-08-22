import { BaseElement } from "./base-element.js";

export class Label extends BaseElement{
    constructor(title){
        super();
        this.title=title;
    }
    getElementString(){
        return `
        <h1>${this.title}</h1>
        `;
    }
}