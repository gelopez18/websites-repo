import { BaseElement } from "./base-element.js";


export class ComboField extends BaseElement{
    constructor(id, data){
        super();
        this.id=id;
        this.data=data;
        this.styleString ="";

    }
    getElementString(){
        // send the user to the combo box
        let options='';
            for (let value of this.data){
                options += `<option value="${value}">${value}</option>\n`;
            }
         //return the full element to the page  
     return`
     <br><div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">${this.id}</label>
                <select class="form-select ${this.styleString}" id="${this.id}"  name="${this.id}">
                    <option selected>Choose...</option>
                    ${options}
                </select>
        </div><br>
  
        `; 
    }
    setStyleString(style){
        this.styleString = style;

   }

}