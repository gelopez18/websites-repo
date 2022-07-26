import { BaseElement } from "./base-element.js";

export class Combox extends BaseElement{
    
    constructor(user, id){
        super();
        this.id=id;
         this.users=user;
    }
    getElementString(){
        let UsersName = ['Gabriel', 'Brenda'];
        //this will add only the name of the users to an array 
          let NamesInput =  this.users.map((el) => {
            return el.name;
          });
          //then the array can be passed on to the options array to display to assign the task. 
        NamesInput.forEach(element => {
            UsersName.push(element);
        });
        // send the user to the combo box
        let usersAdd='';
            for (let name of UsersName){
                usersAdd += `<option value="${name}">${name}</option>\n`;
            }
         //return the full element to the page  
     return`
        <select class="form-select" aria-label="Default select example" id="${this.id}">
        <option value="1"></option>\n
                ${usersAdd}
        </select>
        `; 
    }

}