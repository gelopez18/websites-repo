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
        let cityAdd='';
            for (let city of this.data){
                cityAdd += `<option value="${city}">${city}</option>\n`;
            }
         //return the full element to the page  
     return`
     <br><div class="input-group mb-8">
            <label class="input-group-text" for="inputGroupSelect01">${this.id}</label>
                <select class="form-select ${this.styleString}" id="${this.id}"  >
                    <option selected>Choose...</option>
                    ${cityAdd}
                </select>
        </div><br>
  
        `; 
    }
    setStyleString(style){
        this.styleString = style;

   }

}