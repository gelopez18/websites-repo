import { BaseElement } from "./base-element.js";

export class textfield extends BaseElement{
    
    constructor(title){
        super();
        this.title=title;
    }
    
    getElementString(){
     return`

     <div class="mb-3">
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="${this.title}">
      <label for="formGroupExampleInput" class="form-label">${this.title}</label>
     </div>
  
        `; 
    }
    setStyleString(style){
        this.styleString = style;
   }
}