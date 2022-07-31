import { BaseElement } from "./base-element.js";

export class Button extends BaseElement{
    
    constructor(title){
        super();
        this.title=title;
        this.styleString ="";
    }
    
    getElementString(){
     return`
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect">
          ${this.title}
        </button> 
        `; 
    }
   setStyleString(style){
        this.styleString = style;
   }
}