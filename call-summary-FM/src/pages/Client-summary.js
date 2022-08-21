import { textfield } from "../UI/text-Field.js";
import { Button } from "../UI/button.js";
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
        let Add = new Button("Add");
            let styleStringAdd = 'btn btn-success btn-lg col-lg-4 col-md-4 col-sm-4';
            Add.setStyleString(styleStringAdd);
            Add.setType('submit')
            Add.appendToElement(this.element);
        let emtybtn = new Button('');
            let styleStringEmpty = 'btn btn-link col-lg-4  col-md-4 col-sm-4';
            emtybtn.setStyleString(styleStringEmpty);
            emtybtn.appendToElement(this.element);
    }
    getElementString(){
        return`<form method='POST' action =''></form>`;
    }
}