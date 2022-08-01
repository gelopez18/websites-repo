import { User } from "../UI/user.js";
import { Page } from "../framework/page.js";

export class AddUser extends Page{
    constructor(){
        super('Add User');
    }
    createElement(){
        super.createElement();
        let Uinput = new User();
        Uinput.appendToElement(this.element);
    }
    getElementString(){
        return '<div style="text-align: center;"></div>'
      }
}