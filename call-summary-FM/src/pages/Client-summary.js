import { textfield } from "../UI/text-Field.js";
//import { Button } from "bootstrap";
import { Page } from "../frameWork/page.js";

export class clientSummary extends Page {
    constructor(){
        super('Sales Summary');
    }
    createElement(){
        super.createElement();
        let wknumb = new textfield('Week Number','wkNumb');
            wknumb.appendToElement(this.element);
    }
    getElementString(){
        return`<form method='POST' action =''></form>`;
    }
}