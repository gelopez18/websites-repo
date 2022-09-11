import { BaseElement } from "./base-element.js";

export class Button extends BaseElement{
    
    constructor(title, id){
        super();
        this.title=title;
        this.styleString ="";
        this.type="";
        this.id=id;
    }
    
    getElementString(){
     return`
        <button type="button" class="${this.styleString}"  type="${this.type}" id="${this.id}" data-bs-toggle="button" >
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