import { BaseElement } from "./base-element.js";

export class Button extends BaseElement{
    
    constructor(title){
        super();
        this.title=title;
        this.styleString ="";
    }
    
    getElementString(){
     return`
        <button type="button" class="${this.styleString}">
          ${this.title}
        </button> 
        `; 
    }
   setStyleString(style){
        this.styleString = style;
   }
}