import { BaseElement } from "./base-element.js";


export class ComboField extends BaseElement{
    constructor(id, data){
        super();
        this.id=id;
        this.data=data;

    }
    getElementString(){
        let CityName = [];
        //this will add only the name of the users to an array 
          let cityInput =  this.data.map((el) => {
            return el.city;
          });
          //then the array can be passed on to the options array to display to assign the task. 
          cityInput.forEach(element => {
            CityName.push(element);
        });
        // send the user to the combo box
        let cityAdd='';
            for (let city of CityName){
                cityAdd += `<option value="${city}">${city}</option>\n`;
            }
         //return the full element to the page  
     return`
     <br><div class="input-group mb-8">
            <label class="input-group-text" for="inputGroupSelect01">${this.id}</label>
                <select class="form-select" id="${this.id}"  >
                    <option selected>Choose...</option>
                    ${cityAdd}
                </select>
        </div><br>
  
        `; 
    }

}