import { BaseElement } from "./base-element.js";

export class Button extends BaseElement{
    
    constructor(title){
        super();
        this.title=title;
        this.styleString ="";
        this.type="";
    }
    
    getElementString(){
     return`
        <button type="${this.type}" class="${this.styleString}" type="${this.type}">
          ${this.title}
        </button> 
        `; 
    }
   setStyleString(style){
        this.styleString = style;
   }
   setType(type){
    this.type=type;
   }
}