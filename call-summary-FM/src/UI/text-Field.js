import { BaseElement } from "./base-element.js";

export class textfield extends BaseElement{
    
    constructor(title, id){
        super();
        this.id=id;
        this.title=title;
        this.styleString="";
    }
    
    getElementString(){
     return`
     <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">${this.title}</label>
        <input type="text" name="${this.id}" class="form-control ${this.styleString}" id="${this.id}"  placeholder="${this.title}">
     </div>
        `; 
    }
    setStyleString(style){
        this.styleString = style;

   }
}