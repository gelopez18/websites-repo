import { BaseElement } from "./base-element.js";

export class Check extends BaseElement{
    constructor(title, id){
        super();
        this.title=title;
        this.id=id; 
    }
    getElementString(){
        return `<div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="${this.id}">
        <label class="form-check-label" for="flexCheckDefault">
          ${this.title}
        </label>
      </div>`;      
    }

}