
import { Button } from "../UI/button.js";
import { Page } from "../framework/page.js";
import { textfield } from "../UI/Textfield.js";
import { UserInfo } from "../classes/user-Info.js";

export class AddUser extends Page{
    constructor(){
        super('Add User');
    }
    createElement(){
        super.createElement();

        let userName = new textfield("User", "UserName");
            userName.appendToElement(this.element);

        let Org = new textfield("Organization Name", "Org");
            Org.appendToElement(this.element);
            

        let svUser = new Button('Save User');
            svUser.setStyleString('btn btn-primary btn-lg');
            svUser.setType('Button');
            svUser.appendToElement(this.element);
            svUser.element.click(() =>{
                let newUserObj = new UserInfo();
              
                let userData =(newUserObj.addUserList());

            })
    }

    getElementString(){
        return `<form class="container"></form>`;
    }


}