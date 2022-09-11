
import { Button } from "../UI/button.js";
import { Page } from "../framework/page.js";
import { textfield } from "../UI/Textfield.js";
import { UserInfo, UserList } from "../classes/user-Info.js";
import { Hr } from "../UI/hr.js";
import { Table } from "../UI/Table.js";

export class AddUser extends Page{
    constructor(){
        super('Add User');
    }
    createElement(){
        super.createElement();
        let headers = ['Name', 'Org', 'date'];

        let space = new Hr();
          space.appendToElement(this.element);

        let userName = new textfield("User", 'Name');
            userName.appendToElement(this.element);

        let Org = new textfield("Organization Name", 'Org');
            Org.appendToElement(this.element);
            

        let svUser = new Button('Save User');
            svUser.setStyleString('btn btn-success col-4 col-md-4 col-sm-3 me-4 btn-lg');
            svUser.setType('Button');
            svUser.appendToElement(this.element);

        let showUserT = new Button('Show Table', 'userTable');
            showUserT.setStyleString('btn btn-primary col-4 col-md-4 col-sm-3 me-4 btn-lg');
            showUserT.setType();
            showUserT.appendToElement(this.element);
            showUserT.element.click(()=>{
                                
            })
        let line = new Hr('border border-primary border-3 opacity-75');
            space.appendToElement(this.element);
            line.appendToElement(this.element);    
 
            svUser.element.click(() =>{
                let newUserObj = new UserInfo();
                
                newUserObj.addUserList();
                document.getElementById('Name').value="";
                document.getElementById('Org').value="";
                let UserTable = new Table(headers, UserList); 
                UserTable.appendToElement(this.element);
            })
            let hr = new Hr();
            hr.appendToElement(this.element);    
    }

    getElementString(){
        return `<form class="container"></form>`;
    }



}