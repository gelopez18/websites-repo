import { textfield } from "../UI/text-Field.js";
import { button } from "../UI/button.js";
import { Page } from "../frameWork/page.js";
import { Hr } from "../UI/hr.js";

export class clientSummary extends Page {
    constructor(){
        super('Sales Summary');
    }
    createElement(){
        super.createElement();
        let space = new Hr();
            space.appendToElement(this.element);
        let wknumb = new textfield('Week Number','wkNumb');
            wknumb.appendToElement(this.element);
        let SRO = new textfield('SRO','sro');
            SRO.appendToElement(this.element);
        let clientName = new textfield('Client','Client');
            clientName.appendToElement(this.element);
        let total = new textfield('Total Before Taxes','Client');
            total.appendToElement(this.element);
    }
    getElementString(){
        return`<form method='POST' action =''></form>`;
    }
}