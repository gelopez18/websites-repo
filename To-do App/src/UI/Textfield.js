import { BaseElement } from "./base-element.js";

export class textfield extends BaseElement{
    
    constructor(title){
        super();
        this.title=title;
    }
    
    getElementString(){
     return`
     <form action="#">
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
       <input class="mdl-textfield__input" type="text" id="sample3">
       <label class="mdl-textfield__label" for="sample3">${this.title}...</label>
     </div>
   </form> 
        `; 
    }
    setStyleString(style){
        this.styleString = style;
   }
}