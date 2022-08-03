import { BaseElement } from "./base-element.js";

export class Combox extends BaseElement{
    
    constructor(title, id){
        super();
        this.id=id;
        this.title=title;
        this.users=[];
    }


    getElementString(){
       /* let users='';
        for (let user of this.users)
            users =+ `<option value="1">${}</option>\n`;*/
     return`
     <div class="row"></div>
     <select class="form-select" aria-label="Default select example" id="${this.id}">
     <option selected>Open this select menu</option>
     <option value="1">One</option>
     <option value="2">Two</option>
     <option value="3">Three</option>
   </select>
   <div class="row"></div>
        `; 
    }

}