import { BaseElement } from "./base-element";


export class ComboField extends BaseElement{
    constructor(id, users){
        super();
        this.id=id;
        this.user=users;
    }
    getElementString(){

     return`
        <select class="form-select" aria-label="Default select example" id="${this.id}">
        <option value="1"></option>\n
                ${usersAdd}
        </select>
        `; 
    }

}